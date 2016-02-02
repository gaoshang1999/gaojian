<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DB;

class IndustryController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['industry' => Industry::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.industry.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $industry = Industry::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $industry ->appends(['q' => $request['q']]);
        $industry ->appends(['field' => $field]);
    
        $data = ['industry' => $industry, 'q' => $request['q'], 'field' => $field];
        return view('admin.industry.list', $data);
    }
    
    public function query(Request $request)
    {
        $id = $request->input('id');        
        $industry = Industry::where('id', $id)->first();
        return new JsonResponse($industry);
    }
    
    public function add(Request $request)
    {
        $parent_id = $request->get('id');
        $text = $request->get('text');
        $parent =Industry::where('id', $parent_id)->first();
        $industry = Industry::create(['name'=> $text, 'parent_id'=>$parent_id, 'level'=>($parent->level + 1)]);
        return new JsonResponse($industry);
    }
    
    public function edit(Request $request)
    {
        $id = $request->get('id');
        $text = $request->get('text');
        $ret = Industry::where('id', $id)->update(['name'=> $text]);
        $industry = Industry::where('id', $id)->first();
        return new JsonResponse($industry);
    }
    
    public function save(Request $request)
    {
        $id = $request->get('id');
        $industry = Industry::where('id', $id)->first();
        
        $input = $request->all();
        $industry->fill($input);
    
        $ret = $industry->save(); 
        if($ret){
            return new JsonResponse(['success'=>true, 'message'=>'保存成功']);
        }else{
            return new JsonResponse(['success'=>false, 'message'=>'保存失败']);
        }
        
    }
    
    public function delete(Request $request)
    {
        $id = $request->get('id');
        $ret = Industry::where('id', $id)->delete();
        return new JsonResponse($ret);
    }
    
    public function move(Request $request)
    {
        $id = $request->get('id');
        $parent_id = $request->get('parent');
        $ret = Industry::where('id', $id)->update(['parent_id'=> $parent_id]);
        return new JsonResponse($ret);
    }
    
    public function children(Request $request)
    {
        $id = $request->get('id', 0);
        $lists = Industry::where('parent_id', $id)->orderBy(DB::raw('CONVERT( name USING gbk )'))->get();
        $outputs = [];
        foreach ($lists as $k=>$v){
            $industry = ['id'=>$v->id, 'text'=>$v->name, 'icon'=>'folder', 'children'=>$v->hasChildren()];
            $outputs []= $industry;
        }
        dump($outputs);
        return new JsonResponse($outputs);
    }
}
