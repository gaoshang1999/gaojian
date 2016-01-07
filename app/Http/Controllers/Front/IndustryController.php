<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class IndustryController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['industry' => Industry::orderBy('id', 'desc')->paginate(20) ];

        return view('front.industry.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $industry = Industry::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $industry ->appends(['q' => $request['q']]);
        $industry ->appends(['field' => $field]);
    
        $data = ['industry' => $industry, 'q' => $request['q'], 'field' => $field];
        return view('front.industry.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [                                
            ]);

            $input = $request->all();
            $industry = Industry::create($input);
                        
            $industry->save(); 
       
            return redirect('/front/industry');
        }
        else {            
            return view('front.industry.create_edit', ['industry' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $industry = Industry::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [                
            ]);
    
            $input = $request->all();
            $industry->fill($input);
    
            $industry->save();
                         
            return redirect('front/profile/edit/'.$industry->id);
        }
        else {
            return view('front.profile.myself', ['industry' => $industry] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Industry::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
    
    public function queryChildren(Request $request, $id)
    {
        $lists = Industry::where('parent_id', $id)->orderBy('number')->get();
    
        return new JsonResponse($lists);
    }
    
    public function queryDuty(Request $request, $id)
    {
        $lists = Constant::where('en', 'duty_post')->where('k', 'like', $id.'%')->whereRaw('length(k)>? ', [2])->orderBy('k')->get();
    
        return new JsonResponse($lists);
    }
}
