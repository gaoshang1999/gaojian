<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Constant;
use Illuminate\Http\Request;

class ConstantController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['constant' => Constant::orderBy('cn')->paginate(20) ];

        return view('admin.constant.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $constant = Constant::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $constant ->appends(['q' => $request['q']]);
        $constant ->appends(['field' => $field]);
    
        $data = ['constant' => $constant, 'q' => $request['q'], 'field' => $field];
        return view('admin.constant.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'en' => 'required|max:255',
                'k' => 'required|max:255',
                'v' => 'required|max:255',                       
            ]);

            $input = $request->all();
            $constant = Constant::create($input);
                        
            $constant->save(); 
       
            return redirect('/admin/constant');
        }
        else {            
            return view('admin.constant.create_edit', ['constant' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $constant = Constant::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [                
                'en' => 'required|max:255',
                'k' => 'required|max:255',
                'v' => 'required|max:255',
            ]);
    
            $input = $request->all();
            $constant->fill($input);
    
            $constant->save();
             
            return redirect('/admin/constant');
        }
        else {
            return view('admin.constant.create_edit', ['constant' => $constant] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Constant::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}