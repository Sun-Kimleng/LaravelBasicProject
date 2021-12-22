<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register2show(){
        $data = [
            'logged' => User::where('id','=', session('logged'))->first(),
        ];
        return view('auth.register2', $data);
    }

    public function register2save(Request $request){

        $request ->validate([
            'name'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'passwords'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
            'c-password'=> 'required|same:passwords'
        ],[
            'required' => 'មិនអាចទទេរ',
            'min' => 'ពាក្យសម្ងាត់យ៉ាងតិច 6តួ',
            'same' => 'ពាក្យសម្ងាត់មិនដូចគ្នា',
            'passwords.regex' =>'មិនត្រូវតាមស្តង់ដាពាក្យសម្ងាត់',
            'email' => 'នេះមិនមែនជា Email',
            'name.unique' => 'ឈ្មោះមានម្ចាស់ហើយ',
        ]);

        $users = new User();

        $users-> name = request('name');
        $users-> email = request('email');
        $users-> password = Hash::make(request('passwords'));

        $success = $users -> save();
        
        if($success){
            return back()->with('success','You have been registered succesful');
        }else{
            return back()->with('fail','failed to register');
        }

    }

    
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
        [
            'name.required' => 'cannot empty please!',
        ]
    );



}


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]
        
    );
    }
    
}
