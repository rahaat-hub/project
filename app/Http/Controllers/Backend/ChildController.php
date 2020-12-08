<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    //
    public function signup(){
        return view('backend.child.childsignup');
    }
    public function store(Request $request){

        $validatedData = $request->validate([

            'first_name'=> 'required',
            'last_name'=> 'required',
            'f_name'=> 'required',
            'm_name'=> 'required',
            'phoneNumber'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:8|confirmed',
            'phoneNumber'=> 'required',
            'address'=> 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',

            

            
        ],

        );
        $childreg = new Child();
        
        $childreg->first_name = $request->first_name;
        $childreg->last_name = $request->last_name;
        $childreg->f_name = $request->f_name;
        $childreg->m_name = $request->m_name;
        $childreg->email = $request->email;
        $childreg->password = $request->password;
        $childreg->gender = $request->gender;
        $childreg->phoneNumber = $request->phoneNumber;
        $childreg->address = $request->address;
        $childreg->blood_group = $request->blood_group;
        $childreg->birthDate = $request->birthDate;
        $childreg->save();

        return redirect()->back()->with('message','Successfully Registerd');


        }

        public function childslist(){
            $child = Child ::all();
            return view('backend.child.childslist',compact('child'));
        }

        public function delete($id){
            Child::find($id)->delete();
            return redirect(route('child.list'));
        }

        public function view($id){

            return view('backend.child.view',[
                'child'=> Child::findOrFail($id)
            ]);
        }

        public function edit($id){
            $ch = Child::find($id);
            return view('baclend.child.edit',compact('ch'));
        }
}
