<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models;
use App\Models\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    //
    public function login(){
        return view('login');
    }
   

    public function store(Request $request){
       
        $login = $request->only('email','password');
      
        if(Auth::attempt($login)){
            
            return redirect(route('home'))->with('message','Successfully LogIn!!!');
            
        }
        else{
            return redirect()->back()->withErrors('Invalid Credentials!!');
        }
    }

    public function adminlist(){
        $adlist = Admin::all();
        return view('backend.admin.adminlist', compact('adlist'));
       
    }

    public function delete($id){
        Admin::find($id)->delete();
        return redirect()->route('admin.list');
    }

    public function edit($id){
        $ad = Admin::find($id);
        return view('backend.admin.adminedit',compact('ad'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([

            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'blood_group' => 'required'
            

        ],[

            

        ]);



        $adminreg = Admin::find($id);
        $adminreg->name = $request->name;
        $adminreg->phone = $request->phone;
        $adminreg->email = $request->email;
        $adminreg->password = $request->password;
        $adminreg->blood_group = $request->blood_group;
        $adminreg->save();

        return redirect()->route('admin.list')->with('massage','Admin Info Successfully updated!!');
    }
    
    

}
