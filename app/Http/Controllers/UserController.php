<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function userUpdate(Request $request){
        // dd($request->all()  );
        $this->userUpdateValidationCheck($request);
        $data = $this->getUserData($request);
        // dd($request->hasFile('image'));
        if($request->hasFile('image')){
            $dbImage = User::where('id',Auth::user()->id)->first();
            $dbImage = $dbImage->image;
            if($dbImage != null){
                Storage::delete('public/admin/' . $dbImage);
            }
            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            // dd($fileName);
            $request->file('image')->storeAs('public/admin',$fileName);
            $data['image'] = $fileName;
        }
        // dd($data);
        User::where('id',Auth::user()->id)->update($data);
        return redirect()->route('user#dashboard')->with(['updateSuccess' => 'Profile Updated....']);
    }

    // get user data
    private function getUserData($request){
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'updated_at' => Carbon::now(),
        ];
    }

    // update user data validation check
    private function userUpdateValidationCheck($request){
        Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp,svg|file',
            'address' => 'required',
        ]);
    }
}
