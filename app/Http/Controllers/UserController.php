<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function login(){
        return view("user.login"); 
    }

    public function register(){
        return view("user.register"); 
    }

    // login user to the site
    public function loginUser(Request $request){
        $user = User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password,$user->password))
        {
            return Redirect::back()->withErrors(['msg', 'The Message']);
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/home');
        }
    }

    // registration user
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'cpassword' => 'required'
        ]);

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return redirect()->back()->with('success','You are registered successfully!');
    }


    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }


    public function resetPassword()
    {
        return view('user.reset-password');
    }


    public function resetUserPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);
            
        // $token = str_random(64);

        // DB::table('password_resets')->insert(
        //     ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        // );
        
        // return back()->with('message', 'We have e-mailed your password reset link!');
    }
}
