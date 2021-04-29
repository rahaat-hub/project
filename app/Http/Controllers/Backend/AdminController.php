<?php

namespace App\Http\Controllers\Backend;

use App\Models;
use App\Models\Admin;
use App\Models\Child;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Child_vaccin;
use Illuminate\Support\Facades\Auth;
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
            'blood_group' => 'required',
            'gender'=> 'required'
            
            

        ],);

        $adminreg = new Admin();
        $adminreg->name = $request->name;
        $adminreg->phone = $request->phone;
        $adminreg->email = $request->email;
        $adminreg->password = bcrypt($request->password);
        $adminreg->gender = $request->gender;
        $adminreg->blood_group = $request->blood_group;
        $adminreg->role= $request->role;
        $adminreg->save();

        

        return redirect()->back()->with('message','Successfully Registerd');
    }
    public function login(){
        return view('login');
    }
   

    public function dashboard(Request $request){
       
        $login = $request->only('email','password');
      
        if(Auth::attempt($login)){
            
            return redirect(route('master2'))->with('message','Successfully LogIn!!!');
            
        }
        else{
            return redirect()->back()->withErrors('Invalid Credentials!!');
        }
    }


    ///Volunteer login


 

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logout Success!!');
    }

   /* public function adminlist(){
        $adlist = Admin::all();
        return view('backend.admin.adminlist', compact('adlist'));
       
    }*/
    public function adminlist(){
        $adlist = Admin ::where('role', '=', 'admin')->get();
        
        return view('backend.admin.adminlist',compact('adlist'));
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
            
            'blood_group' => 'required',
            

        ],[

            

        ]);



        $adminreg = Admin::find($id);
        $adminreg->name = $request->name;
        $adminreg->phone = $request->phone;
        $adminreg->email = $request->email;
        
        $adminreg->gender = $request->gender;
        $adminreg->blood_group = $request->blood_group;
        
        $adminreg->save();

        return redirect()->back()->with('massage',' Successfully updated!!');
    }

    public function volunteer(Request $request){

        $validatedData = $request->validate([

            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'blood_group' => 'required',
            'gender'=>'required'

            

            
        ],

        );
        $vlntr = new Admin();
        
        $vlntr->name = $request->name;
        $vlntr->email = $request->email;
        $vlntr->password = bcrypt($request->password);
        $vlntr->gender = $request->gender;
        $vlntr->phone = $request->phone;
        $vlntr->blood_group = $request->blood_group;
        $
        
        $vlntr->save();

        return redirect()->back()->with('message','Volunteer Added');
    }
    public function profile(){
        
       $user =auth()->user();

        $child = Child_vaccin::where('child_id','=',$user->id)->first();


        

    }
    public function childslist(){
            
        $child = Admin::with('child')->where('role','=','user')->get();
        
        return view('backend.child.childslist',compact('child'));
    }
    public function view($id){
    
        return view('backend.admin.view',[
            'admin'=>Admin::findorFail($id)
        ]);
    }
}
