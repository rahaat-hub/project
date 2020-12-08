<?php

namespace App\Http\Controllers\Backend;
use  App\Http\Controllers\Controller;
use App\Models\Org;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    //
    public function org(){
        return view('backend.org.registration');
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'org_name'=>'required',
            'ph_no'=>'required',
            'email'=>'required',
            'password'=>'required',
            'address'=>'required'

        ],);

        $org =new Org();
        $org->org_name=$request->org_name;
        $org->ph_no=$request->ph_no;
        $org->email=$request->email;
        $org->password=$request->password;
        $org->address=$request->address;
        $org->save();

       
        return redirect()->back()->with('message','Succefully registered');
        

    }

    public function orglist(){

        $list= Org::all();
        return view('backend.org.list',compact('list'));
    }
}
