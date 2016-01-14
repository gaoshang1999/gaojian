<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\Talent;
use App\Models\Recommend;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use ZipArchive;
use DB;
use Log;
use Exception;

class MyTalentController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['talent' => Talent::myTalent() -> orderBy('id', 'desc')->paginate(10)  ];

        return view('front.mytalent.list', $data);
    }
    
    
    public function queryBulider(Request $request)
    {
        //搜索
        $name = $request['name'];
        $mobile = $request['mobile'];
        //查询当前用户的，未删除数据
        $query = Talent::myTalent();
        if(strlen($name)){
            $query = $query->where('name', 'like', '%'.$name.'%');
        }
        
        if(strlen($mobile)){
            $query = $query->where('mobile', 'like', '%'.$mobile.'%');
        }
        //过滤
        $recruit_corporation = $request['recruit_corporation'];
        $recommend_flow_parameter_1 = $request['recommend_flow_parameter_1'];
        $updated_at= $request['updated_at'];
        
        
        if($recruit_corporation){
            $query = $query->whereExists(function ($query)  use ($recruit_corporation){
                $query->select(DB::raw(1))
                ->from('recommend')               
                ->whereRaw('gj_recommend.talent_id = gj_talent.id')
                ->whereExists(function ($query)  use ($recruit_corporation){
                        $query->select(DB::raw(1))
                        ->from('demand')               
                        ->where('demand.recruit_corporation', $recruit_corporation)
                        ->whereRaw('gj_recommend.demand_id = gj_demand.id')   ;
                    });
            });
        }
        
        if($recommend_flow_parameter_1){
            $query =  $query ->whereExists(function ($query)  use ($recommend_flow_parameter_1){
                $query->select(DB::raw(1))
                ->from('recommend')
                ->where('recommend.recommend_flow_parameter_1', $recommend_flow_parameter_1)
                ->whereRaw('gj_recommend.talent_id = gj_talent.id')   ;
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
         
        $talent = $query -> orderBy('id', 'desc')-> paginate(10) ;
        $talent ->appends(['name' => $request['name']]);
        $talent ->appends(['mobile' => $request['mobile']]);
        $talent ->appends(['recruit_corporation' => $request['recruit_corporation']]);
        $talent ->appends(['recommend_flow_parameter_1' => $request['recommend_flow_parameter_1']]);
        $talent ->appends(['updated_at' => $request['updated_at']]);
                
        $data = ['talent' => $talent];
        return view('front.mytalent.list', $data);
    }

    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'mobile' => 'required|max:30',
        ];
    }
    
    public function customAttributes()
    {
        return [
            'name' => '姓名',
            'mobile' => '手机号码',
        ];
    }
    
    public function add(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
            $this->validate($request,  $this->rules(), [],  $this->customAttributes());

            $input = $request->all();
            $talent = Talent::create($input);
            
            $talent ->user_id = $user->id;
            $talent->save(); 
       
            return redirect('/front/mytalent');
        }
        else {            
            return view('front.mytalent.create_edit', ['talent' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $talent = Talent::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request,  $this->rules(), [],  $this->customAttributes());
    
            $input = $request->all();
            $talent->fill($input);
    
            $talent->save();
             
           $referer = $input['referer'];
            return redirect(empty($referer)?'/front/talent':$referer);
        }
        else {
            return view('front.mytalent.create_edit', ['talent' => $talent] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Talent::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
    
    public function recommend(Request $request, $id)
    {
        $talent = Talent::where('id', $id)->first();       
        if ($request->isMethod('post')) {
            $talent_id = $request['talent_id'];
                        
            $data = ['talent_id'=> $talent_id, 'demand_id' => $id, 'recommend_time'=> date("Y-m-d H:i:s"), 'recommend_type'=> 1 , 'user_id' => Auth::user()->id ] ;            
            $recommend = Recommend::create($data);
            
            return new JsonResponse(['success'=>true, 'message' => '成功']);
        }
        else {
             //查询非当前用户的，未删除数据
            $demand = Demand::where('recruit_user', '<>',  Auth::user()->id)->where('demand_parameter_1', '<>',  2) -> paginate(10);
            return view('front.mytalent.recommend', ['talent' => $talent, 'demand' =>$demand] );
        }
    }
    
    public function demandSearch(Request $request, $id)
    {
        $talent = Talent::where('id', $id)->first();
        //搜索
        $post_name = $request['post_name'];
        $recruit_corporation = $request['recruit_corporation'];
        
        //查询非当前用户的，未删除数据
        $query = Demand::query()->where('recruit_user', '<>',  Auth::user()->id)  ->where('demand_parameter_1', '<>',  2);
        if(strlen($post_name)){
            $query = $query->where('post_name', 'like', '%'.$post_name.'%');
        }
        
        if(strlen($recruit_corporation)){
            $query = $query->where('recruit_corporation', 'like', '%'.$recruit_corporation.'%');
        }
        
         
        $demand = $query -> orderBy('id', 'desc')-> paginate(10) ;
        $demand ->appends(['post_name' => $request['post_name']]);
        $demand ->appends(['recruit_corporation' => $request['recruit_corporation']]);
        
        $param = ['post_name' => $request['post_name'], 'recruit_corporation' => $request['recruit_corporation']            
        ];
        
        $data = ['talent' => $talent,  'demand' => $demand];
        return view('front.mytalent.recommend', array_merge($data, $param));
    }
    
    
    public function view(Request $request, $id)
    {
        $talent = Talent::where('id', $id)->first();
         
         return view('front.mytalent.view', ['talent' => $talent] );        
    }

}