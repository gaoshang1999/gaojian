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
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $recommend = Recommend::where($field, 'like', '%'.$q.'%')->orderBy('id', 'desc')-> paginate(20) ;
        $recommend ->appends(['q' => $request['q']]);
        $recommend ->appends(['field' => $field]);
    
        $data = ['recommend' => $recommend, 'q' => $request['q'], 'field' => $field];
        return view('admin.recommend.list', $data);
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