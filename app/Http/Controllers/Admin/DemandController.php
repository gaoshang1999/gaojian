<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['demand' => Demand::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.demand.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $demand = Demand::where($field, 'like', '%'.$q.'%')->orderBy('id', 'desc')-> paginate(20) ;
        $demand ->appends(['q' => $request['q']]);
        $demand ->appends(['field' => $field]);
    
        $data = ['demand' => $demand, 'q' => $request['q'], 'field' => $field];
        return view('admin.demand.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
//                 'cn' => 'required|max:255|unique:demand',
//                 'en' => 'required|max:255',                         
            ]);

            $input = $request->all();
            $demand = Demand::create($input);
                        
            $demand->save(); 
       
            return redirect('/admin/demand');
        }
        else {            
            return view('admin.demand.create_edit', ['demand' => null] );
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
            return redirect(empty($referer)?'/admin/demand':$referer);
        }
        else {
            return view('admin.demand.create_edit', ['demand' => $demand] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Demand::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}