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
        return view('admin.industry.industry_tree');
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
        $industry = Industry::create(['name'=> $text, 'parent_id'=>$parent_id, 'level'=>($parent->level) + 1]);
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
        $industry = Industry::where('id', $id)->first();
        $parents = $industry->parents;
        //两个特殊的根节点不能删除，分别代表两颗树的根
        if($parents->id == -10 ||$parents->id == -20){
            return ;
        }        
        $ret = $this->deleteTree($industry);
        return new JsonResponse($ret);
    }
    
    private function deleteTree($industry){
        $children = $industry->children;
        foreach($children as $k=>$v){
            $this->deleteTree($v);
        }
        return $industry->delete();
    }
    
    public function move(Request $request)
    {
        $id = $request->get('id');
        $parent_id = $request->get('parent');
        $industry = Industry::where('id', $id)->first();
        $ret = $industry->update(['parent_id'=> $parent_id]);
        $this->moveTree($industry);
        return new JsonResponse($ret);
    }
    
    private function moveTree($industry){
        $parents = $industry->parents;
        $industry->update(['level'=> ($parents->level)+1]);
        $children = $industry->children;
        foreach($children as $k=>$v){
            $this->moveTree($v);
        }
    }
    
    public function children(Request $request)
    {
        $id = $request->get('id', -1);
        $lists = Industry::where('parent_id', $id)->orderBy(DB::raw('CONVERT( name USING gbk )'))->get();
        $outputs = [];
        foreach ($lists as $k=>$v){
            $industry = ['id'=>$v->id, 'text'=>$v->name, 'icon'=>'folder', 'children'=>$v->hasChildren()];
            $outputs []= $industry;
        }
        return new JsonResponse($outputs);
    }
}
