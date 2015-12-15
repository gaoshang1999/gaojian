<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Recommend;
use App\Models\RecommendComment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Demand;
use App\Models\Talent;
use App\Models\Flow;
use App\Models\Recom;
use App\Models\User;
class CommentController extends Controller
{   
    public function lists(Request $request)
    {
       $comments = RecommendComment::comments()->select('id')->orderBy('id', 'desc')->get(); 

       return new JsonResponse($comments);
    }
    
    
    public function edit(Request $request)
    {
        $comment= RecommendComment::where('id', $request['id'])->first();
        
        $op = $request['op'];
        if($op==1){ //推迟30分站
            $comment->remind_time = date('Y-m-d H:i:s',strtotime("+30 minutes"));
        }elseif ($op==2){ //不再提醒
            $comment->enable = false;
        }        
        $comment->save();
    }
    

   
    public function delete(Request $request, $id)
    {
        $recom= RecommendComment::where('id', $id)->first();        
    

        return redirect($request->header('referer'));
    }
    
    public function add(Request $request)
    {      
            $input = $request->all();            

            switch ($input['remind_type'])
            {
                case 1:
                    $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+2 hours"));
                    break;
                case 2:
                    $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+1 days"));
                    break;
                case 3:
                    $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+2 days"));
                    break;
                case 4:
                    $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+7 days"));
                    break;
                case 5:
                    $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+14 days"));
                    break;
                case 6:
                    $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+1 months"));
                    break;                    
            }

            $comment = RecommendComment::create($input);
       
           return new JsonResponse(['success'=>true, 'message' => '成功']);
    }
    
    public function view(Request $request, $id)
    {
        $comment = RecommendComment::where('id', $id)->first();
        
        if($comment){
            return view('front.widget.remind', ['comment' => $comment] );
        }
    }
   
}