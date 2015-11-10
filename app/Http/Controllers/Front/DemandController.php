<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DemandController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['demand' => Demand::where('recruit_user', Auth::user()->id)->orderBy('id', 'desc')->paginate(10) ];

        return view('front.demand.list', $data);
    }
    
    public function queryBulider(Request $request)
    {
           
    }
    
    public function search(Request $request)
    {     
        $query = $this->queryBulider($request);
         
        $demand = $query -> orderBy('id', 'desc')-> paginate(20) ;
        $demand ->appends(['q1' => $request['q1']]);
        $demand ->appends(['op' => $request['op']]);
        $demand ->appends(['field1' => $request['field1']]);
        $demand ->appends(['q2_start' => $request['q2_start']]);
        $demand ->appends(['q2_end' => $request['q2_end']]);
        $demand ->appends(['field2' => $request['field2']]);
        $demand ->appends(['q3_start' => $request['q3_start']]);
        $demand ->appends(['q3_end' => $request['q3_end']]);
        $demand ->appends(['field3' => $request['field3']]);
        $demand ->appends(['search_scope' => $request['search_scope']]);
        
        $param = ['q1' => $request['q1'], 'op' => $request['op'], 'field1' => $request['field1'],
            'q2_start' =>$request['q2_start'] , 'q2_end' =>$request['q2_end'] , 'field2' => $request['field2'],
            'q3_start' =>$request['q3_start'] , 'q3_end' =>$request['q3_end'] , 'field3' => $request['field3'],
            'search_scope' => $request['search_scope']
        ];
        $wheres = $query->getQuery()->wheres;
        $bindings = $query->getQuery()->getBindings();
        
        $data = ['demand' => $demand,  'query_where'=> json_encode($wheres? $wheres : ""), 'query_bindings' => json_encode($bindings? $bindings : "")];
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