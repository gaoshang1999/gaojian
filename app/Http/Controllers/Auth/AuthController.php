<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\Traits\ThrottlesLogins;
use App\Http\Controllers\Auth\Traits\AuthenticatesAndRegistersUsers;
class AuthController extends Controller
{
    
    protected $username = 'user_name';
    protected $redirectPath = '/';
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'getLogout']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($request)
    {
        $data = $request->all();
        $vcode = $request->session()->get('p'.$data['phone']);
        return Validator::make($data, [
            'name' => 'required|max:255|unique:users,name',
            'phone' => 'required|phone|max:255|unique:users,phone',
            'email' => 'required|email|max:255|unique:users,email',
            'phonecode' => 'required|regex:/' . $vcode['verifycode'] . '/',
            'password' => 'required|confirmed|min:6|max:20',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role' => 'user',
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function authenticated($request, $user)
    {
        if ($user->isAdminstrator()) {
            return redirect('/admin');
        } elseif ($user->isOperator()) {
            return redirect('/front/match');
        } else {
            return redirect('/front/demand');
        }
    }
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request);
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        // Auth::login($this->create($request->all()));
        $user = $this->create($request->all());
        $request->session()->forget('p' . $user->phone);
        return redirect($this->loginPath());
    }
    
 
}