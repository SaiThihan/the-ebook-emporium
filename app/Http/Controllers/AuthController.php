<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // // direct login page
    // public function loginPage(){
    //     return view('login');
    // }

    // // direct register page
    // public function registerPage(){
    //     return view('register');
    // }

    // // user register
    // public function register(Request $request){
    //     $this->registerValidationCheck($request);
    //     $userData = $this->getUserInformation($request);
    //     User::create($userData);
    //     return redirect()->route('auth#loginpage');
    // }

    // // dashboard
    // public function dashboard(){
    //     // return view('dashboard');
    //     dd(Auth::user()->all());
    //     if(Auth::user()->role == 'admin'){
    //         // dd($dbPassword);
    //         return redirect()->route('list');
    //     }
    //     return redirect()->route('user#home');
    // }

    // // user login
    // public function loginUser(Request $request){
    //     $this->loginValidationCheck($request);
    //     $dbPassword = User::select('*')->where('email',$request->email)->first();
    //     $takenPassword = $dbPassword->password;
    //     return view('admin.category');
    //     // dd(Auth::user()->all());
    //     if(Hash::check($request->password,$takenPassword)){
    //         // dd($dbPassword->toArray());
    //         // dd(Auth::user()->all());
    //         // return redirect()->route('dashboard');
    //         return view('admin.category');
    //         // dd($dbPassword->role);
    //     }
    //     return back()->with(['incorrectPassword' => 'Incorrect password!']);

    // }

    // // login validation check
    // private function loginValidationCheck($request){
    //     Validator::make($request->all(),[
    //         'email' => 'required|exists:users,email',
    //         'password' => 'required|min:6|max:18',
    //     ])->validate();
    // }

    // // register validation check
    // private function registerValidationCheck($request){
    //     // dd($request->all());
    //     Validator::make($request->all(),[
    //         'name' => 'required',
    //         'email' => 'required|unique:users,email',
    //         'gender' => 'required',
    //         'phone' => 'required',
    //         'address' => 'required|min:5|max:30',
    //         'password' => 'required|min:6|max:18',
    //         'password_confirmation' => 'required|min:6|max:18|same:password',
    //     ])->validate();
    // }

    // // request user data
    // private function getUserInformation($request){
    //     return [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'gender' => $request->gender,
    //         'phone' => $request->phone,
    //         'address' => $request->address,
    //         'password' => Hash::make($request->password),
    //     ];
    // }

    // direct login page
    public function loginPage(){
        return view('login');
    }

    // direct register page
    public function registerPage(){
        return view('register');
    }

    public function dashboard(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('category#list');
        }
        return redirect()->route('user#home');
    }
}
