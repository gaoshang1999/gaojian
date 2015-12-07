<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Recommend;
use App\Models\RecommendComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use DB;
class MyRecommendController extends Controller
{
    
    public function lists(Request $request)
    {
        //查询当前的推荐
        $data = ['recommend' => Recommend::myRecommend()->orderBy('id', 'desc')->paginate(10) ];

        return view('front.myrecommend.list', $data);
    }
    
    public function queryBulider(Request $request)
    {        
        $user_id = Auth::user()->id;
        //查询当前的推荐
        $query = Recommend::myRecommend();
        
        //搜索
        $name = $request['name'];
        $user_name = $request['user_name'];        
        
        //人才名称
        if(strlen($name)){
            $query =  $query ->whereExists(function ($query)  use ($name){
                $query->select(DB::raw(1))
                ->from('talent')
                ->where('talent.name', 'like', '%'.$name.'%')
                ->whereRaw('gj_talent.id = gj_recommend.talent_id')             ;
            });
        }
        
        //推荐人
        if(strlen($user_name)){
           $query =  $query ->whereExists(function ($query)  use ($user_name){
                $query->select(DB::raw(1))
                ->from('user')
                ->where('user.user_name', 'like', '%'.$user_name.'%')
                ->whereRaw('gj_user.id = gj_recommend.user_id')             ;
            });
        }
        //过滤
        $post_name_2 = $request['post_name_2'];
        $demand_type_label_1 = $request['demand_type_label_1'];
        $recommend_flow_status_label_3 = $request['recommend_flow_status_label_3'];
        $recommend_flow_parameter_2= $request['recommend_flow_parameter_2'];
        $recommend_flow_parameter_1= $request['recommend_flow_parameter_1'];
        //岗位
        if($post_name_2){
            $query =  $query ->whereExists(function ($query)  use ($post_name_2){
                $query->select(DB::raw(1))
                ->from('demand')
                ->where('demand.post_name',  $post_name_2)
                ->whereRaw('gj_demand.id = gj_recommend.demand_id')             ;
            });
        }
        //职能
        if($demand_type_label_1){
            $query =  $query ->whereExists(function ($query)  use ($demand_type_label_1){
                $query->select(DB::raw(1))
                ->from('demand')
                ->where('demand.demand_type_label_1',  $demand_type_label_1)
                ->whereRaw('gj_demand.id = gj_recommend.demand_id')             ;
            });
        }
        //进度
        if($recommend_flow_status_label_3){
            if($recommend_flow_status_label_3=="不含流程外候选人"){
                $query =  $query  ->where('recommend_flow_status_label_3', '<>', '流程外候选人')  ;
            }else{
                $query =  $query  ->where('recommend_flow_status_label_3', $recommend_flow_status_label_3)             ;
            }
        }
        //提醒时间
        if($recommend_flow_parameter_2){          
           $query = $query->where('recommend_flow_parameter_2', $recommend_flow_parameter_2);            
        }
        
        //状态
        if($recommend_flow_parameter_1){
            $query = $query->where('recommend_flow_parameter_1',  $recommend_flow_parameter_1 );
        }
        return $query;   }
    
    public function search(Request $request)
    {
        $query = $this->queryBulider($request);
         
        $recommend = $query -> orderBy('id', 'desc')-> paginate(10) ;
        $recommend ->appends(['name' => $request['name']]);
        $recommend ->appends(['user_name' => $request['user_name']]);
        $recommend ->appends(['post_name_2' => $request['post_name_2']]);
        $recommend ->appends(['demand_type_label_1' => $request['demand_type_label_1']]);
        $recommend ->appends(['recommend_flow_status_label_3' => $request['recommend_flow_status_label_3']]);
        $recommend ->appends(['recommend_flow_parameter_2' => $request['recommend_flow_parameter_2']]);
        $recommend ->appends(['recommend_flow_parameter_1' => $request['recommend_flow_parameter_1']]);
        
        $data = ['recommend' => $recommend];
        return view('front.myrecommend.list', $data);
    }
    
    public function rules()
    {
        return [    
//             'recommend_flow_parameter_1' => 'required|numeric',           
        ];
    }
    
    public function customAttributes()
    {
        return [
//             'recommend_flow_parameter_1' => '推荐状态',
           
        ];
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
//                 'cn' => 'required|max:255|unique:recommend',
//                 'en' => 'required|max:255',                         
            ]);

            $input = $request->all();
            $recommend = Recommend::create($input);
                        
            $recommend->save(); 
       
            return redirect('/front/recommend');
        }
        else {            
            return view('front.myrecommend.create_edit', ['recommend' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $recommend = Recommend::myRecommend()->where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request,  $this->rules(), [],  $this->customAttributes());
    
            $input = $request->all();
            $input = $this->assignValue($request, $input);
            $recommend->fill($input);
    
            $recommend->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/front/recommend':$referer);
        }
        else {
            return view('front.myrecommend.create_edit', ['recommend' => $recommend] );
        }
    }
    
    public function assignValue(Request $request, $input)
    {
        /**
         * recommend_flow_parameter_1： 1,  2,  4,  5,  6 对应： recommend_flow_status_label_3 面试前评审进度中
    
            recommend_flow_parameter_1：8,  9,  10,  11,  12,  13 对应：recommend_flow_status_label_3 面试进度中
    
             recommend_flow_parameter_1： 16,  17,  18 对应：recommend_flow_status_label_3 offer进度中
         */
        if($request->has('recommend_flow_parameter_1')){
            $array1 = [1,  2,  4,  5,  6];
            $array2 = [8,  9,  10,  11,  12,  13];
            $array3 = [16,  17,  18];
            $array4 = [3,  7,  14,  15,  19,  20];
            $recommend_flow_parameter_1 = $input['recommend_flow_parameter_1'];
            if(in_array($recommend_flow_parameter_1, $array1)){
                $input['recommend_flow_status_label_3']  = "面试前评审进度中";
            }elseif (in_array($recommend_flow_parameter_1, $array2)){
                $input['recommend_flow_status_label_3']  = "面试进度中";
            }elseif (in_array($recommend_flow_parameter_1, $array3)){
                $input['recommend_flow_status_label_3']  = "offer进度中";            
            }elseif (in_array($recommend_flow_parameter_1, $array4)){
                $input['recommend_flow_status_label_3']  = "流程外候选人";
            }           
         }
       
        return $input;
    }
    
    
    
    public function delete(Request $request, $id)
    {
        Recommend::myRecommend()->where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
    
    public function comment(Request $request)
    {      
            $input = $request->all();
            $recommendComment = RecommendComment::create($input);
                        
            $recommendComment->save(); 
       
           return new JsonResponse(['success'=>true, 'message' => '成功']);
    }
}