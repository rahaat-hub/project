<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\Vaccine;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Carbon\Carbon;

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
            'nid'=>'required|min:10|Unique:children',
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
        $childreg->nid = $request->nid;
        $childreg->email = $request->email;
        $childreg->password = $request->password;
        $childreg->gender = $request->gender;
        $childreg->phoneNumber = $request->phoneNumber;
        $childreg->address = $request->address;
        $childreg->blood_group = $request->blood_group;
        $childreg->birthDate = $request->birthDate;

        
        $childreg->save();

        return redirect()->route('child.findcard')->with('message','Successfully Registerd');


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
            return view('backend.child.edit',compact('ch'));
        }
        public function update(Request $request,$id){
            $validatedData = $request->validate([

                'first_name'=> 'required',
                'last_name'=> 'required',
                'f_name'=> 'required',
                'm_name'=> 'required',
                'nid'=>'required|min:10|Unique:children',
                'phoneNumber'=> 'required',
                'email'=> 'required|email',
                
                'phoneNumber'=> 'required',
                'address'=> 'required',
                'blood_group' => 'required',
                'gender' => 'required',
                'birthDate' => 'required',
        
            ],
    
            );
            $childup = Child::find($id);
            
            $childup->first_name = $request->first_name;
            $childup->last_name = $request->last_name;
            $childup->f_name = $request->f_name;
            $childup->m_name = $request->m_name;
            $childup->nid = $request->nid;
            $childup->email = $request->email;
            
            $childup->gender = $request->gender;
            $childup->phoneNumber = $request->phoneNumber;
            $childup->address = $request->address;
            $childup->blood_group = $request->blood_group;
            $childup->birthDate = $request->birthDate;
    
            
            $childup->save();
    
            return redirect()->route('child.list')->with('message','Successfully Updated');
        }
        
        public function findcard(){
            
            return view('backend.child.login');
        }
        
        public function cardshow(Request $request){
        
            $card= Child::with('vaccine')->find($request->id);
              
            
            // dd($card);

            $vcc= Vaccine::all();
            
            

            $birthday = $card->birthDate;
            // $diff=$birthday->diff(date()->now())->days;
            $user_age  =  Carbon::parse($birthday)->diff(Carbon::now())->days/7;
            
            $user_age = (int) $user_age;
            
            return view('backend.child.request',compact('card','vcc','user_age','birthday'));
        }
        
        
}
