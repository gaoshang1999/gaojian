<?php $Table = ucfirst($table->en) ;?>

<pre>
&lt;?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{{$Table}};
use Illuminate\Http\Request;

class {{$Table}}Controller extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['{{$table->en}}' => {{$Table}}::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.{{$table->en}}.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        ${{$table->en}} = {{$Table}}::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        ${{$table->en}} ->appends(['q' => $request['q']]);
        ${{$table->en}} ->appends(['field' => $field]);
    
        $data = ['{{$table->en}}' => ${{$table->en}}, 'q' => $request['q'], 'field' => $field];
        return view('admin.{{$table->en}}.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [                                
            ]);

            $input = $request->all();
            ${{$table->en}} = {{$Table}}::create($input);
                        
            ${{$table->en}}->save(); 
       
            return redirect('/admin/{{$table->en}}');
        }
        else {            
            return view('admin.{{$table->en}}.create_edit', ['{{$table->en}}' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        ${{$table->en}} = {{$Table}}::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [                
            ]);
    
            $input = $request->all();
            ${{$table->en}}->fill($input);
    
            ${{$table->en}}->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/{{$table->en}}':$referer);
        }
        else {
            return view('admin.{{$table->en}}.create_edit', ['{{$table->en}}' => ${{$table->en}}] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        {{$Table}}::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}

</pre>