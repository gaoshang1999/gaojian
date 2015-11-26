<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['user' => User::orderBy('id', 'desc')->paginate(20) ];

        return view('front.user.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $user = User::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $user ->appends(['q' => $request['q']]);
        $user ->appends(['field' => $field]);
    
        $data = ['user' => $user, 'q' => $request['q'], 'field' => $field];
        return view('front.user.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [                                
            ]);

            $input = $request->all();
            $user = User::create($input);
                        
            $user->save(); 
       
            return redirect('/front/user');
        }
        else {            
            return view('front.user.create_edit', ['user' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [                
            ]);
    
            $input = $request->all();
            $user->fill($input);
    
            $user->save();
                         
            return redirect('front/profile/edit/'.$user->id);
        }
        else {
            return view('front.profile.myself', ['user' => $user] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}
