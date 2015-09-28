<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;
use App\Models\Dict;
use Illuminate\Http\JsonResponse;

class TableController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['table' => Table::orderBy('created_at', 'desc')->paginate(20) ];

        return view('admin.table.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $table = Table::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $table ->appends(['q' => $request['q']]);
        $table ->appends(['field' => $field]);
    
        $data = ['table' => $table, 'q' => $request['q'], 'field' => $field];
        return view('admin.table.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cn' => 'required|max:255|unique:table',                         
            ]);

            $input = $request->all();
            $table = Table::create($input);
                        
            $table->save(); 
       
            return redirect('/admin/table');
        }
        else {            
            return view('admin.table.create_edit', ['table' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $table = Table::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cn' => 'required|max:255|unique:table,cn,'.$table->id,               
            ]);
    
            $input = $request->all();
            $table->fill($input);
    
            $table->save();
             
            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/table':$referer);
        }
        else {
            return view('admin.table.create_edit', ['table' => $table] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Table::where('id', $id)->delete();
//         return back();
        return redirect($request->header('referer'));
    }
    
    public function translate(Request $request, $id)
    {
        $table = Table::where('id', $id)->first();
                
        $translateService = app('TranslateService');
        $result = $translateService->translate($table->cn);
        
        if($result['cn_segment']){
            $table->fill($result);
            $table->save();            
        }else{
             return new JsonResponse(['success'=>false, 'message' => "Table ". $table->cn. ' 翻译失败,请检查词根']);
        }
        
        foreach($table->columns as $c){
            $result = $translateService->translate($c->cn);
            if($result['cn_segment']){
                $c->fill($result);
                $c->save();
            }else{
                return new JsonResponse(['success'=>false, 'message' => "Column ". $c->cn. ' 翻译失败,请检查词根']);
            }
        }        
        
        return new JsonResponse(['success'=>true, 'message' => '翻译成功']);     
        
    }
}