<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class IndustryController extends Controller
{
    
    public function queryChildren(Request $request, $id)
    {
        $lists = Industry::where('parent_id', $id)->orderBy('number')->get();
    
        return new JsonResponse($lists);
    }
    
    public function queryDuty(Request $request, $id)
    {
//         $lists = Constant::where('en', 'duty_post')->where('k', 'like', $id.'%')->whereRaw('length(k)>? ', [2])->orderBy('k')->get();
        
        $lists = Industry::where('parent_id', $id)->orderBy('number')->get();        
    
        return new JsonResponse($lists);
    }
}
