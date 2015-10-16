<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recommend;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['recommend' => Recommend::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.recommend.list', $data);
    }
    
    public function queryBulider(Request $request)
    {
    
        $q1 = $request['q1'];
        $op = $request['op'];
        $field1 = $request['field1'];
    
        $q2_start = $request['q2_start'];
        $q2_end = $request['q2_end'];
        $field2 = $request['field2'];
    
        $q3_start = $request['q3_start'];
        $q3_end = $request['q3_end'];
        $field3 = $request['field3'];
    
        $search_scope = $request['search_scope'];
    
    
        if( $search_scope == 0 ) { //全库
            $query = Recommend::query();
        }elseif ($search_scope == 1) { //搜索结果
            $query_where = json_decode( $request['query_where'], true );
            $query_bindings = json_decode( $request['query_bindings'], true );
            $query = Recommend::query();
            if($query_where){
                $query->getQuery()->wheres = $query_where;
                $query->getQuery()->setBindings($query_bindings);
            }
        }elseif ($search_scope == 2) { //选中项
            $ids = $request['ids'];
            $query = Recommend::query()->whereIn('id', explode(",", $ids));
        }
    
        if($q1){
            if($op == "like"){
                $query = $query->where($field1, $op, '%'.$q1.'%');
            }else{
                $query = $query->where($field1, $op, $q1);
            }
        }
    
        if($q2_start && $q2_end){
            $query = $query->whereBetween($field2, [$q2_start, $q2_end]);
        }elseif($q2_start){
            $query = $query->where($field2, '>=' , $q2_start);
        }elseif($q2_end){
            $query = $query->where($field2, '<=' , $q2_end);
        }
    
    
        if($q3_start && $q3_end){
            $query = $query->whereBetween($field3, [date('Y-m-d', strtotime($q3_start)),  date('Y-m-d', strtotime($q3_end)) ]);
        }elseif($q3_start){
            $query = $query->where($field3, '>=' , date('Y-m-d', strtotime($q3_start)));
        }elseif($q3_end){
            $query = $query->where($field3, '<=' , date('Y-m-d', strtotime($q3_end)));
        }
    
        return $query;
    }
    
    public function search(Request $request)
    {
        $query = $this->queryBulider($request);
         
        $recommend = $query -> orderBy('id', 'desc')-> paginate(20) ;
        $recommend ->appends(['q1' => $request['q1']]);
        $recommend ->appends(['op' => $request['op']]);
        $recommend ->appends(['field1' => $request['field1']]);
        $recommend ->appends(['q2_start' => $request['q2_start']]);
        $recommend ->appends(['q2_end' => $request['q2_end']]);
        $recommend ->appends(['field2' => $request['field2']]);
        $recommend ->appends(['q3_start' => $request['q3_start']]);
        $recommend ->appends(['q3_end' => $request['q3_end']]);
        $recommend ->appends(['field3' => $request['field3']]);
        $recommend ->appends(['search_scope' => $request['search_scope']]);
        
        $param = ['q1' => $request['q1'], 'op' => $request['op'], 'field1' => $request['field1'],
            'q2_start' =>$request['q2_start'] , 'q2_end' =>$request['q2_end'] , 'field2' => $request['field2'],
            'q3_start' =>$request['q3_start'] , 'q3_end' =>$request['q3_end'] , 'field3' => $request['field3'],
            'search_scope' => $request['search_scope']
        ];
        $wheres = $query->getQuery()->wheres;
        $bindings = $query->getQuery()->getBindings();
        
        $data = ['recommend' => $recommend,  'query_where'=> json_encode($wheres? $wheres : ""), 'query_bindings' => json_encode($bindings? $bindings : "")];
        return view('admin.recommend.list', array_merge($data, $param));
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
       
            return redirect('/admin/recommend');
        }
        else {            
            return view('admin.recommend.create_edit', ['recommend' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $recommend = Recommend::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [
//                 'cn' => 'required|max:255|unique:recommend,cn,'.$recommend->id,
//                 'en' => 'required|max:255',
            ]);
    
            $input = $request->all();
            $recommend->fill($input);
    
            $recommend->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/recommend':$referer);
        }
        else {
            return view('admin.recommend.create_edit', ['recommend' => $recommend] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Recommend::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}