<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['user' => User::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.user.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $user = User::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $user ->appends(['q' => $request['q']]);
        $user ->appends(['field' => $field]);
    
        $data = ['user' => $user, 'q' => $request['q'], 'field' => $field];
        return view('admin.user.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [    
                'user_name' => 'required|unique:user,user_name|max:30',
                'email'=> 'required|email',
            ]);

            $input = $request->all();
            $input['password'] = bcrypt($request->input('password'));
            $user = User::create($input);
                        
            $user->save(); 
       
            return redirect('/admin/user');
        }
        else {            
            return view('admin.user.create_edit', ['user' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [  
                'user_name' => 'required|unique:user,user_name,'.$user->id,
                'email'=> 'required|email',
            ]);
    
            $input = $request->all();
            $input['password'] = bcrypt($request->input('password'));
            $user->fill($input);
    
            $user->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/user':$referer);
        }
        else {
            return view('admin.user.create_edit', ['user' => $user] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}
