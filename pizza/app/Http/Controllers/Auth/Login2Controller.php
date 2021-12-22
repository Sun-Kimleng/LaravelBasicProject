<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Login2Controller extends Controller
{
    public function login2show(){
        $data = [
            'logged' => User::where('id','=', session('logged'))->first(),
        ];
        return view('auth.login2', $data);
    }
    
    public function login2check(Request $request){
        $request ->validate([
            
            'email'=>'required|email',
            'passwords'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
            
        ],[
            'required' => 'មិនអាចទទេរ',
            'passwords.regex' =>'មិនត្រូវតាមស្តង់ដាពាក្យសម្ងាត់',
        ]);

        $email = request('email');
        $password = request('passwords');

        $userInfo = User::where('email',$email)->first();

        if(!$userInfo){
            return back()->with('fail', 'We cannot find this email in our service');
        }else{
            if(Hash::check($password, $userInfo->password)){
                $request->session()->put('logged', $userInfo->id);
                return redirect('pizzas');
            }else{
                return back()->with('fail', 'Your password is incorrect');
            }
        }
    }
    
    public function logout(){
        if(session()->has('logged')){
            session()->pull('logged');
            return redirect('login2');
        }
    }
}
