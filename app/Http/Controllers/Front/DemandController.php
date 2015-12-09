<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use DB;
use App\Models\Talent;
use App\Models\Recom;
class DemandController extends Controller
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

        return view('front.demand.list', $data);
    }
    
    public function queryBulider(Request $request)
    {
        //搜索
        $post_name = $request['post_name'];
        $position_description = $request['position_description'];
        
        if($request->has('open'))  {
            //查询开放的需求
            $query = Demand::openDemand();
        }else{
            //查询当前用户的，未删除数据
            $query = Demand::myDemand();
        }
        
        if(strlen($post_name)){
            $query = $query->where('post_name', 'like', '%'.$post_name.'%');
        }
        
        if(strlen($position_description)){
            $query = $query->where('position_description', 'like', '%'.$position_description.'%');
        }
        //过滤
        $recruit_corporation = $request['recruit_corporation'];
        $post_name_2 = $request['post_name_2'];
        $demand_type_label_1 = $request['demand_type_label_1'];
        $recommend_flow_status_label_3 = $request['recommend_flow_status_label_3'];
        $updated_at= $request['updated_at'];
        
        if($recruit_corporation){
            $query = $query->where('recruit_corporation',  $recruit_corporation);
        }
        
        if($post_name_2){
            $query = $query->where('post_name',  $post_name_2);
        }
        
        if($demand_type_label_1){
            $query = $query->where('demand_type_label_1',  $demand_type_label_1);
        }
        
        if($recommend_flow_status_label_3){
            $query =  $query ->whereExists(function ($query)  use ($recommend_flow_status_label_3){
               $query->select(DB::raw(1))
                ->from('recommend')
                ->where('recommend.recommend_flow_status_label_3', $recommend_flow_status_label_3)
                ->whereRaw('gj_recommend.demand_id = gj_demand.id')             ;
            });
        }
        
        if($updated_at){
            $query = $query->where('updated_at', '>=',  date('Y-m-d H:i:s',strtotime($updated_at)));
        }
        
        return $query;
    }
    
    public function search(Request $request)
    {     
        $query = $this->queryBulider($request); 
         
        $demand = $query -> orderBy('id', 'desc')-> paginate(10) ;
        $demand ->appends(['post_name' => $request['post_name']]);
        $demand ->appends(['position_description' => $request['position_description']]);
        $demand ->appends(['recruit_corporation' => $request['recruit_corporation']]);
        $demand ->appends(['post_name_2' => $request['post_name_2']]);
        $demand ->appends(['demand_type_label_1' => $request['demand_type_label_1']]);
        $demand ->appends(['recommend_flow_status_label_3' => $request['recommend_flow_status_label_3']]);
        $demand ->appends(['updated_at' => $request['updated_at']]);
        if($request->has('open'))  {
            $demand ->appends(['open' => 1]);
        }
        
                
        $data = ['demand' => $demand];
        return view('front.demand.list',  $data);
    }
    
    public function rules()
    {
        return [            
            'recruit_corporation' => 'required|max:30',
            'post_name' => 'required|max:30',
            'demand_type_label_1' => 'required|max:30',
            
            'work_location' => 'required|max:30',
            'work_year_requirement' => 'required|numeric|min:0',
            'demand_type_parameter_1' => 'required|numeric|min:0',
            
            'education_requirement' => 'required|numeric|min:0',
            'position_description' => 'required', 

            'subordinate_person_number' => 'numeric|min:0',
            'pretax_annual_salary' => 'numeric|min:0',
            'demand_type_parameter_2' => 'numeric|min:0',
            'age_requirement' => 'numeric|min:0',
            'occupation_parameter_1' => 'numeric|min:0',
        ];
    }
    
    public function customAttributes()
    {
        return [
            'recruit_corporation' => '公司名称',
            'post_name' => '职位名称',
            'demand_type_label_1' => '职能',
    
            'work_location' => '工作地点',
            'work_year_requirement' => '工作时间下限',
            'demand_type_parameter_1' => '工作时间上限',
    
            'education_requirement' => '最低学历要求',
            'position_description' => '职位描述',
    
            'subordinate_person_number' => '管理人数',
            'pretax_annual_salary' => '税前年薪',
            'demand_type_parameter_2' => '税前年薪上限',
            'age_requirement' => '年龄下限',
            'occupation_parameter_1' => '年龄上限',
        ];
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,  $this->rules(), [],  $this->customAttributes());

            $input = $request->all();
            $input['recruit_user'] = Auth::user()->id;
            $demand = Demand::create($input);
                        
            $demand->save(); 
       
            return redirect('/front/demand');
        }
        else {            
            return view('front.demand.create_edit', ['demand' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $demand = Demand::myDemand()-> where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request,  $this->rules(), [],  $this->customAttributes());
    
            $input = $request->all();
            $demand->fill($input);

            $demand->update();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/front/demand':$referer);
        }
        else {
            return view('front.demand.create_edit', ['demand' => $demand] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Demand::myDemand()-> where('id', $id)->update(['demand_parameter_1'=> 2]);
        return redirect($request->header('referer'));
    }
    
    public function queryPostName(Request $request)
    {
        $recruit_corporation = $request['recruit_corporation'];

        $query = Demand::myDemand()
        ->select('post_name')->whereNotNull('post_name');
        
        if($recruit_corporation){
             $query = $query->where('recruit_corporation', $recruit_corporation);
        }
        $lists = $query->distinct() ->orderBy('post_name')->get();
        
        return new JsonResponse($lists);
    }
       
    public function view(Request $request, $id)
    {
        $demand = Demand::myDemand()->where('id', $id)->first();
        
        if($demand){
            return view('front.demand.view', ['demand' => $demand] );
        }else{
            abort(404);
        }
    }
    
    public function queryMyDemand(Request $request)
    {
        $recruit_user = $request['recruit_user'];
        $recruit_corporation = $request['recruit_corporation'];
        
        $query = Demand::demand()->select('recruit_corporation');
    
        if($recruit_user){
            $query = $query->where('recruit_user', $recruit_user);
        }
        if($recruit_corporation){
            $query = $query->addSelect('id','post_name')->where('recruit_corporation', $recruit_corporation);
        }
        $lists = $query->distinct() ->orderBy('recruit_corporation')->orderBy('post_name')->get();
    
        return new JsonResponse($lists);
    }
    
    
    public function open(Request $request, $id)
    {
        $demand = Demand::myDemand()-> where('id', $id)->first(); 
    
        $input = $request->all();
        $demand->fill($input);

        $demand->update();

       return new JsonResponse(['success'=>true, 'message' => '操作成功']);
                
    }
    
    public function talentSearch(Request $request)
    {
        $demand_id = $request['demand_id'];
//         $demand = Demand::myDemand()-> where('id', $demand_id)->first();
  
        $name = $request['name'];
        $mobile = $request['mobile'];        
       
        $recom = Recom::where('demand_id', $demand_id)->whereIn('talent_id', function($query) use ($name, $mobile)
        {
            $query->select('id')
                  ->from('talent');
            
            if($name){
                $query = $query->where('name', $name);
            }        
            if($mobile){
                $query = $query->where('mobile', $mobile);
            }    
        });
        
        if($recom->count()>0){    
            return new JsonResponse(['success'=>false, 'message' => '对不起，人才已经被推荐到该岗位，下次快点哦！']);
        }else{
            return new JsonResponse(['success'=>true, 'message' => '尚未推荐！']);
        }
    
    }
}