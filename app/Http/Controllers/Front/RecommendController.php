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
class RecommendController extends Controller
{   
    public function lists(Request $request)
    {
        //查询当前用户发布的职位,  收到的推荐
        $data = ['recommend' => Recommend::myHostRecommend()->orderBy('id', 'desc')->paginate(10) ];

        return view('front.recommend.list', $data);
    }
    
    public function queryBulider(Request $request)
    {  
        //查询当前用户发布的职位,  收到的推荐
        $query = Recommend::myHostRecommend();
        
        //搜索
        $name = $request['name'];
        $post_name = $request['post_name'];        
        
        //人才名称
        if(strlen($name)){
            $query =  $query ->whereExists(function ($query)  use ($name){
                $query->select(DB::raw(1))
                ->from('talent')
                ->where('talent.name', 'like', '%'.$name.'%')
                ->whereRaw('gj_talent.id = gj_recommend.talent_id') ;
            });
        }
        
        //岗位名称
        if(strlen($post_name)){
           $query =  $query ->whereExists(function ($query)  use ($post_name){
                $query->select(DB::raw(1))
                ->from('demand')
                ->where('demand.post_name', 'like', '%'.$post_name.'%')
                ->whereRaw('gj_demand.id = gj_recommend.demand_id') ;
            });
        }
        //过滤
        $recruit_corporation = $request['recruit_corporation'];
        $demand_type_label_1 = $request['demand_type_label_1'];
        $recommend_flow_status_label_3 = $request['recommend_flow_status_label_3'];
        $recommend_flow_parameter_2= $request['recommend_flow_parameter_2'];
        $recommend_flow_parameter_1= $request['recommend_flow_parameter_1'];
        //岗位
        if($recruit_corporation){
            $query =  $query ->whereExists(function ($query)  use ($recruit_corporation){
                $query->select(DB::raw(1))
                ->from('demand')
                ->where('demand.recruit_corporation',  $recruit_corporation)
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
        
        //用需求编号筛选
        if($request->has('demand_id')){
            $query =  $query -> where('demand_id', $request['demand_id']);
        }
        
        //用状态栏，推荐流程筛选
        if($request->has('recommend_flow_parameter')){
            $flow = $request['recommend_flow_parameter'];
            if($flow == 1){
                $query =  $query -> whereIn('recommend_flow_parameter_1', [1,  2,  4,  5,  6]);
            }elseif ($flow == 2){
                $query =  $query -> whereIn('recommend_flow_parameter_1', [8,  9,  10,  11,  12,  13]);
            }elseif ($flow == 3){
                $query =  $query -> whereIn('recommend_flow_parameter_1', [16,  17,  18]);
            }
        }
        
        
        return $query;   }
    
    public function search(Request $request)
    {
        $query = $this->queryBulider($request);

         
        $recommend = $query -> orderBy('id', 'desc')-> paginate(10) ;
        $recommend ->appends(['name' => $request['name']]);
        $recommend ->appends(['post_name' => $request['post_name']]);
        $recommend ->appends(['recruit_corporation' => $request['recruit_corporation']]);
        $recommend ->appends(['demand_type_label_1' => $request['demand_type_label_1']]);
        $recommend ->appends(['recommend_flow_status_label_3' => $request['recommend_flow_status_label_3']]);
        $recommend ->appends(['recommend_flow_parameter_2' => $request['recommend_flow_parameter_2']]);
        $recommend ->appends(['recommend_flow_parameter_1' => $request['recommend_flow_parameter_1']]);   
        $recommend ->appends(['demand_id' => $request['demand_id']]);
        $recommend ->appends(['recommend_flow_parameter' => $request['recommend_flow_parameter']]);
       
        $data = ['recommend' => $recommend];
        return view('front.recommend.list', $data);
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
            return view('front.recommend.create_edit', ['recommend' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $recommend = Recommend::myHostRecommend()->where('id', $id)->first();
        $recommend = $recommend ? $recommend: Recommend::myRecommend()->where('id', $id)->first();

        if ($request->isMethod('post')) {
            $this->validate($request,  $this->rules(), [],  $this->customAttributes());
    
            $input = $request->all();
            $input = $this->assignValue($request, $input);
                        
            $recommend->recom->fill($input);    
            $recommend->recom->save();
            
            $recommend->flow->fill($input);
            $recommend->flow->save();
            
            return redirect('/front/recommend/edit/'.$recommend->id);
        }
        else {
            return view('front.recommend.create_edit', ['recommend' => $recommend] );
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
        $recom= Recom::where('id', $id)->first();
        
        Flow::where('id',  $recom->flow_id)->update(['recommend_parameter_1'=> 2]);;

        return redirect($request->header('referer'));
    }
    
//     public function comment(Request $request)
//     {      
//             $input = $request->all();
            

//             switch ($input['remind_type'])
//             {
//                 case 1:
//                     $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+2 hours"));
//                     break;
//                 case 2:
//                     $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+1 days"));
//                     break;
//                 case 3:
//                     $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+2 days"));
//                     break;
//                 case 4:
//                     $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+7 days"));
//                     break;
//                 case 5:
//                     $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+14 days"));
//                     break;
//                 case 6:
//                     $input['remind_time'] = date('Y-m-d H:i:s',strtotime("+1 months"));
//                     break;                    
//             }

//             $recommendComment = RecommendComment::create($input);
       
//            return new JsonResponse(['success'=>true, 'message' => '成功']);
//     }
    
    public function recommend(Request $request)
    {           
        if ($request->isMethod('post')) {

            $talent_id= $request['talent_id'];
            $demand_id = $request['demand_id'];
            $demand = Demand::where('id', $demand_id)->first();
            
            $recommend = Recommend::where('talent_id', $talent_id)->where('demand_id', $demand_id)->first();
            if($recommend){
                return new JsonResponse(['success'=>false, 'message' => '对不起，人才已经被推荐给这个职位，加油！']);
            }
    
            $flow = Flow::create(['recommend_time'=> date("Y-m-d H:i:s")]);

            $data = ['talent_id'=> $talent_id, 'demand_id' => $demand_id , 'user_id' => Auth::user()->id , 'host_id'=>$demand->recruit_user, 'type'=> $request['type'], 'flow_id'=>$flow->id] ;
            $recom = Recom::create($data);      
             
             return new JsonResponse(['success'=>true, 'message' => '推荐成功']);
        }
        else {
            $demand_id = $request['demand_id'];
            $demand = Demand::where('id', $demand_id)->first();
            $talent_id = $request['talent_id'];
            if($talent_id){
                $talent = Talent::where('id', $talent_id)->get();
            }else{
                $talent = Talent::myTalent()->get();
            }

            return view('front.recommend.recommend' , ['demand' => $demand , 'talent' => $talent ]);
        }
    }
    
    public function recommendHR(Request $request)
    {  
        //推荐HR
        if($request->has("id")) {
            $id= $request['id'];
             
            $recommend = Recommend::where('id', $id)->first();
            if($recommend->host_id != Auth::user()->id){
                return new JsonResponse(['success'=>false, 'message' => '不能直接推荐给其他顾问的HR！']);
            }
               
            $flow = $recommend->flow;
            /**
             * 1. 推荐号--- 需求号---- 是否关联 HR？  
             * Y 则正式推荐给关联需求的发布hr, 
             * N:是否有公司名下的HR注册用户 （有，推荐给第一个）（没有，新建一个HR1511，推荐给她）
             */
            if($recommend->demand->user->isHr()){
                $host_id = $recommend->demand->recruit_user;
            }else{
                $first_hr =User::where('corporation', $recommend->demand->recruit_corporation)->where('group_parameter', 2)->orderBy('id', 'desc')->first();
                if(!$first_hr){              
                    $first_hr = ['corporation' =>$recommend->demand->recruit_corporation, 'group_parameter'=> 2];
                    $first_hr = User::create($first_hr);
                }
                $host_id =$first_hr->id;
            }
            
            $data = ['talent_id'=> $recommend->talent_id, 'demand_id' => $recommend->demand_id , 'user_id' => Auth::user()->id , 'host_id'=>$host_id, 'type'=> $request['type'], 'flow_id'=>$flow->id] ;
            $recom = Recom::create($data);
            // 推荐参数2=1 hr推荐 默认=0，没有hr推荐
            $flow -> recommend_parameter_2=1;
            $flow -> save();
        }else{ //新建推荐
            $talent_id= $request['talent_id'];
            $demand_id = $request['demand_id'];            
           
            $demand = Demand::where('id', $demand_id)->first();

            if($demand->recruit_user != Auth::user()->id){
                return new JsonResponse(['success'=>false, 'message' => '不能直接推荐给其他顾问的HR！']);
            }
            
            $recommend = Recommend::where(['talent_id'=> $talent_id, 'demand_id' => $demand_id, 'type'=>1])->first();
            if(!$recommend){
                return new JsonResponse(['success'=>false, 'message' => '必须先做预推荐！']);
            }
            
            if($demand->user->isHr()){
                $host_id = $demand->recruit_user;
            }else{
                $first_hr =User::where('corporation', $demand->recruit_corporation)->where('group_parameter', 2)->orderBy('id', 'desc')->first();
                if(!$first_hr){
                    $first_hr = ['corporation' =>$demand->recruit_corporation, 'group_parameter'=> 2];
                    $first_hr = User::create($first_hr);
                }
                $host_id =$first_hr->id;
            }
                        
            $data = ['talent_id'=> $talent_id, 'demand_id' => $demand_id, 'type'=> $request['type']];
            $recommend = Recommend::where($data)->first();
            if($recommend){
                return new JsonResponse(['success'=>false, 'message' => '对不起，人才已经被推荐给HR了！']);
            }
            
            $flow = Flow::create(['recommend_time'=> date("Y-m-d H:i:s")]);
            // 推荐参数2=1 hr推荐 默认=0，没有hr推荐
            $flow -> recommend_parameter_2=1;
            $flow -> save();

            $recom = Recom::create(array_merge($data, [ 'user_id' => Auth::user()->id , 'host_id'=>$host_id, 'flow_id'=>$flow->id]));
        }

         
        return new JsonResponse(['success'=>true, 'message' => '推荐成功']);
       
    }
    
    public function queryTalent(Request $request)
    {
        $demand_id = $request['demand_id'];
        $demand = Demand::where('id', $demand_id)->first();
        //搜索
        $name = $request['name'];
        $mobile = $request['mobile'];
        $last_corporation = $request['last_corporation'];
        //查询当前用户的，未删除数据
        $query = Talent::myTalent();
        if(strlen($name)){
            $query = $query->where('name', 'like', '%'.$name.'%');
        }
    
        if(strlen($mobile)){
            $query = $query->where('mobile', 'like', '%'.$mobile.'%');
        }
        
        if(strlen($last_corporation)){
            $query = $query->where('last_corporation', 'like', '%'.$last_corporation.'%');
        }
        
        $talent = $query -> orderBy('id', 'desc')-> paginate(10) ;
        $talent ->appends(['name' => $request['name']]);
        $talent ->appends(['mobile' => $request['mobile']]);
        $talent ->appends(['last_corporation' => $request['last_corporation']]);

        return view('front.recommend.recommend',  [ 'talent' => $talent,'demand'=>$demand  ] );
    }
}