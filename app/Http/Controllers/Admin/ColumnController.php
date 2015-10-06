<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Column;
use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Http\JsonResponse;
use DB;

class ColumnController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['column' => Column::orderBy('created_at', 'desc')->paginate(20) ];

        return view('admin.column.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
         
        if($field == "table"){
           $table = Table::where('cn', 'like', '%'.$q.'%')->first();
           $column = Column::where('table_id', $table->id)-> paginate(20) ;
        }else{
            $column = Column::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        }
        
        $column ->appends(['q' => $request['q']]);
        $column ->appends(['field' => $field]);
    
        $data = ['column' => $column, 'q' => $request['q'], 'field' => $field];
        return view('admin.column.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cn' => 'required|max:255|unique:column',                         
            ]);

            $input = $request->all();
            $column = Column::create($input);
                        
            $column->save(); 
       
            return redirect('/admin/column');
        }
        else {            
            return view('admin.column.create_edit', ['column' => null, 'table' => Table::get()] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $column = Column::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cn' => 'required|max:255|unique:column,cn,'.$column->id,               
            ]);
    
            $input = $request->all();
            $column->fill($input);
    
            $column->save();

            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/column':$referer);
        }
        else {
            return view('admin.column.create_edit', ['column' => $column, 'table' => Table::get()] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Column::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
    
    public function translate(Request $request, $id)
    {
        $column = Column::where('id', $id)->first();
    
        $translateService = app('TranslateService');
        $result = $translateService->translate($column->cn);
    
        if($result['cn_segment']){
            $column->fill($result);
            $column->save();
        }else{
            return new JsonResponse(['success'=>false, 'message' => "Column ". $column->cn. ' 翻译失败,请检查词根']);
        }
    
        return new JsonResponse(['success'=>true, 'message' => '翻译成功']);    
    }    
}