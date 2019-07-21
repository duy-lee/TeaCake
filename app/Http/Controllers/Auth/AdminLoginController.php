<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Redirect;
use Illuminate\Support\Facades\Input;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except' => ['logout']]);
    }

    public function showLoginForm(){
        return view('admin/admin-login');
    }

    public function login(Request $req){
        if($req->isMethod('POST')){
            $data = $req->input();
            $this->validate($req,[
                'username' => 'required|min:5',
                'password' => 'required|min:6'
            ]);
            
            if(Auth::guard('admin')->attempt(['username' => $req->username, 'password' => $req->password], $req->remember)){
                session::put('adminSession',$data['username']);
                //print_r(['username' => $req->username, 'password' => $req->password]);
                //exit();
                return redirect()->intended(route('admin.dashboard'));
            }
                // print_r(['username' => $req->username, 'password' => $req->password]);
                // exit();
                $errors = new MessageBag(['username' => ['username hoặc mật khẩu không chính xác!']]);
                return Redirect::back()->withErrors($errors)->withInput($req->only('username','remember'));
                //return redirect()->back()->withInput($req->only('username','remember'));
            
        }

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
