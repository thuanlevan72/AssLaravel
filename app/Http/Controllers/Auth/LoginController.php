<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $rule = [
            'email' => 'required|email|min:3',
            'password' => 'required|min:2'
        ];
        $message = [
            'email.required'=>'bạn phải nhập vào email',
            'email.email'=>'email nhập vào không hợp lệ',
            'password.required' => 'không được để chống password'
        
        ];
        $validator = Validator::make($request->all(),$rule, $message);
        if($validator->fails()){
            
            return redirect('login');
        }else{
           
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email,'password'=>$password, 'level'=> 1])){
                return redirect('/admin');
            }else{
                Session::flash('error', 'Email hoặc mật khẩu không đúng hoặc quyền hạn của bạn không đủ để vào trang quản trị');
                return redirect('/login');
            };
        }
    }
    public function showFormLogin(){
        return view('frontend.Auth.login');
    }
    public function postLoginFront(Request $request){
        $rule = [
            'email' => 'required|email|min:3',
            'password' => 'required|min:2'
        ];
        $message = [
            'email.required'=>'bạn phải nhập vào email',
            'email.email'=>'email nhập vào không hợp lệ',
            'password.required' => 'không được để chống password'
        
        ];
        $validator = Validator::make($request->all(),$rule, $message);
        if($validator->fails()){
            return redirect('/loginUser');
        }else{
           
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('/');
            }else{
                Session::flash('error', 'Email hoặc mật khẩu không đúng');
                return redirect('/loginUser');
            };
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
