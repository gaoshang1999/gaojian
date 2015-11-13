<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class DemandController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['demand' => Demand::where('recruit_user', Auth::user()->id)->orderBy('id', 'desc')->paginate(10) ];

        return view('front.demand.list', $data);
    }
    
    public function queryBulider(Request $request)
    {
        //搜索
        $post_name = $request['post_name'];
        $position_description = $request['position_description'];

        $query = Demand::query()->where('recruit_user',  Auth::user()->id); 
        if(strlen($post_name)){
            $query = $query->where('post_name', 'like', '%'.$post_name.'%');
        }
        
        if(strlen($position_description)){
            $query = $query->where('position_description', 'like', '%'.$position_description.'%');
        }
        //过滤
        $post_name_2 = $request['post_name_2'];
        $demand_type_label_1 = $request['demand_type_label_1'];
        $recommend_flow_status_label_3 = $request['recommend_flow_status_label_3'];
        $updated_at= $request['updated_at'];
        
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
        $demand ->appends(['post_name_2' => $request['post_name_2']]);
        $demand ->appends(['demand_type_label_1' => $request['demand_type_label_1']]);
        $demand ->appends(['updated_at' => $request['updated_at']]);
        
        $param = ['post_name' => $request['post_name'], 'position_description' => $request['position_description'] 
            , 'post_name_2' => $request['post_name_2'], 'demand_type_label_1' => $request['demand_type_label_1']
            , 'updated_at' => $request['updated_at'] 
         ];
        
        $data = ['demand' => $demand];
        return view('front.demand.list', array_merge($data, $param));
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
//                 'cn' => 'required|max:255|unique:demand',
//                 'en' => 'required|max:255',                         
            ]);

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
        $demand = Demand::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [
//                 'cn' => 'required|max:255|unique:demand,cn,'.$demand->id,
//                 'en' => 'required|max:255',
            ]);
    
            $input = $request->all();
            $demand->fill($input);
    
            $demand->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/front/demand':$referer);
        }
        else {
            return view('front.demand.create_edit', ['demand' => $demand] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Demand::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}