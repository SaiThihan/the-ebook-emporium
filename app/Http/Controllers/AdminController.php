<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    // direct user home page
    public function home(){
        return view('user.home');
    }

    // direct admin details page
    public function details(){
        return view('admin.account.details');
    }

    // direct admin edit page
    public function edit(){
        return view('admin.account.edit');
    }

    // update user information
    public function updateUserDetails(Request $request){
        // dd(Auth::user()->all());
        $this->updateProfileValidationCheck($request);
        $data = $this->getUserData($request);
        if($request->hasFile('image')){
            $dbImage = User::where('id',Auth::user()->id)->first();
            $dbImage = $dbImage->image;
            if($dbImage != null){
                Storage::delete('public/admin/' . $dbImage);
            }
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/admin',$fileName);
            $data['image'] = $fileName;
        }
        User::where('id',Auth::user()->id)->update($data);
        return redirect()->route('admin#details')->with(['updateSuccess'=>'Profile Updated...']);
    }

    // direct change password page
    public function changePasswordPage(){
        return view('admin.account.changePassword');
    }

    // change password
    public function changePassword(Request $request){
        $this->changePasswordValidationCheck($request);
        $dbPassword = User::select('password')->where('id',Auth::user()->id)->first();
        $dbHashValue = $dbPassword->password;
        // dd($dbHashValue);
        if(Hash::check($request->oldPassword, $dbHashValue)){
            User::where('id',Auth::user()->id)->update([
                'password' => Hash::make($request->newPassword)
            ]);
            return back()->with(['passwordChangeSuccess' => 'Password changed...']);
        }
        return back()->with(['passwordNotMatch' => 'Incorrect old password...']);
    }

    // direct customer list page
    public function customerList(){
        $customers = User::whereNotIn('id',[1])->orderBy('id','desc')->get();
        $count = 1;
        return view('admin.customer.list',compact('customers','count'));
    }

    // change to admin
    public function changeToAdmin($id){
        $role['role'] = 'admin';
        User::where('id',$id)->update($role);
        return back()->with(['userRoleChangeSuccess' => 'Role Changed....']);
    }

    // change to customer
    public function changeToCustomer($id){
        $role['role'] = 'user';
        User::where('id',$id)->update($role);
        return back()->with(['userRoleChangeSuccess' => 'Role Changed....']);
    }

    // user password validation
    private function changePasswordValidationCheck($request){
        Validator::make($request->all(),[
            'oldPassword' => 'required|min:6|max:18',
            'newPassword' => 'required|min:6|max:18',
            'confirmPassword' => 'required|min:6|max:18|same:newPassword',
        ])->validate();
    }

    // update user data validation
    private function updateProfileValidationCheck($request){
        Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp,svg|file',
            'address' => 'required',
        ])->validate();
    }

    // request user data
    private function getUserData($request){
        return [
            'name' => $request->name ,
            'email' => $request->email ,
            'phone' => $request->phone ,
            'address' => $request->address ,
            'gender' => $request->gender ,
            'updated_at' => Carbon::now() ,
        ];
    }
}
