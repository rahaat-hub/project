<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models;
use App\Models\Admin;


use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    //
    public function signup(){
        
        return view('backend.admin.signup');

    }
    public function store(Request $request){
        $validatedData = $request->validate([

            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'blood_group' => 'required'
            

        ],[

            

        ]);



        $adminreg =new Admin();
        $adminreg->name = $request->name;
        $adminreg->phone = $request->phone;
        $adminreg->email = $request->email;
        $adminreg->password = $request->password;
        $adminreg->blood_group = $request->blood_group;
        $adminreg->save();

        return redirect()->back()->with('massage','Sign-up Completed!!');
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
    public function login(){
        return view('backend.admin.login');
    }
    

}
