<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dict;
use Illuminate\Http\Request;

class DictController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['dict' => Dict::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.dict.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $dict = Dict::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $dict ->appends(['q' => $request['q']]);
        $dict ->appends(['field' => $field]);
    
        $data = ['dict' => $dict, 'q' => $request['q'], 'field' => $field];
        return view('admin.dict.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cn' => 'required|max:255|unique:dict',
                'en' => 'required|max:255',                         
            ]);

            $input = $request->all();
            $dict = Dict::create($input);
                        
            $dict->save(); 
       
            return redirect('/admin/dict');
        }
        else {            
            return view('admin.dict.create_edit', ['dict' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $dict = Dict::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cn' => 'required|max:255|unique:dict,cn,'.$dict->id,
                'en' => 'required|max:255',
            ]);
    
            $input = $request->all();
            $dict->fill($input);
    
            $dict->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/dict':$referer);
        }
        else {
            return view('admin.dict.create_edit', ['dict' => $dict] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Dict::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}