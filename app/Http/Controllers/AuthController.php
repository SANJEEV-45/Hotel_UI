<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  protected $model;

  public function __construct(UserModel $model){
    $this->model = $model;
  }

   public function login(){
     return view("auth.login");
   }

   public function register(){
    return view("auth.register");
   }

   public function registration(Request $request)
   {
      $request->validate([
        'Email'=>'required | email| unique:user_models,Email',
       'Phone'=>'required | numeric',
        'City'=>'required',
        'gender'=>'required',
        'password'=>'required| min:8 |alpha_num'
      ]);
      $user=$request->except('_token');
      $result=$this->model->saveUser($user);

      if($result){
        $request->session()->put('user_info',$result);
        return redirect()->route('dashboard')->with('success','Login Successfull!.....HappY shopping');
      }
      else{
        return back()->withErrors('fail','registration failed');
      }

   }

   public function validation(Request $request){
    $request->validate([
      'username'=>'required | email',
      'password'=>'required'
     ]);
      $user = $request->except('_token');
      $email = $user['username'];
      $password = $user['password'];

      $result = $this->model->verifyUser($email);

      $check = $request->only('email','password');
      if(!$result){
        return back()->with('fail','Please register ur details first');
      }
      else{
        // if(Auth::guard('web')->attempt($check)){
          if(convert_uudecode($result['password']) == $password){
            // $sessionId = uniqid();
            // $name = substr($result['email'],0,strpos($result['email'],'@'));
            // UserSessions::create([
            //     'id'=>$sessionId,
            //     'name'=>$name,
            //     'role'=>$result['role'],
            // ]);

            // $request->session()->put('role',$result['role']);
            //$request->session()->put('user_info',$result);
            return redirect()->intended('/dashboard')->with('success','Happy Shopping');
        }
        else{
          return back()->with('fail','Incorrect password or Username');
        }
      }
   }

   public function logout(Request $request){
    if($request->session()->has('user_info')){
      $request->session()->forget('user_info');
      return redirect('/');
    }
  }
}
