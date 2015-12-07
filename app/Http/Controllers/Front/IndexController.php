<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use DB;

class IndexController extends Controller
{   
    public function lists(Request $request)
    {
        if($request->has('open'))  {
            //查询开放的需求
            $data = ['demand' => Demand::openDemand() ->orderBy('id', 'desc')->paginate(10), 'open'=>1 ];
        }else{
            //查询当前用户的，未删除数据
            $data = ['demand' => Demand::myDemand() ->orderBy('id', 'desc')->paginate(10) ];
        }
        
        return view('front.index', $data);
    }
    
   
}