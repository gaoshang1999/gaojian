<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Log;
use Auth;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $log = ['start_time'=>date("Y-m-d H:i:s.u") ];
        $log['user_id'] = Auth::check()? Auth::user()->id : 0;
        $log['ips'] = json_encode($request->ips());
        $log['method'] = $request->method();
        $log['ajax'] = $request->ajax();
        $log['url'] = $request->url();
        $log['full_url'] = $request->fullUrl();
        $log['input'] = json_encode($request->input());
        $log['cookie'] = json_encode($request->cookie());
        $log['header'] = json_encode($request->header());
        $response = $next($request);

        $log['end_time'] = date("Y-m-d H:i:s") ;
        $log['response_code'] = $response->getStatusCode() ;
        $log['response_header'] =  json_encode($response->headers->allPreserveCase());
        $log['response_content'] = $response->getContent() ;
        
//         dump($response);
//         var_dump($response);
//         Log::create($log);
        
        return $response;
    }
}
