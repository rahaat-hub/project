<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Models\Volunteer;
use Illuminate\Auth\Events\Validated;

use function GuzzleHttp\Promise\all;

class VolunteerController extends Controller
{
    //
    public function signup(){
        return view('backend.volunteer.vlntrsignup');
    }

    public function store(Request $request){

        $validatedData = $request->validate([

            'first_name'=> 'required',
            'last_name'=> 'required',
            'phoneNumber'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:8',
            'phoneNumber'=> 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',

            

            
        ],

        );
        $vlntrreg = new Volunteer();
        
        $vlntrreg->first_name = $request->first_name;
        $vlntrreg->last_name = $request->last_name;
        $vlntrreg->email = $request->email;
        $vlntrreg->password = $request->password;
        $vlntrreg->gender = $request->gender;
        $vlntrreg->phoneNumber = $request->phoneNumber;
        $vlntrreg->blood_group = $request->blood_group;
        $vlntrreg->birthDate = $request->birthDate;
        $vlntrreg->save();

        return redirect()->back()->with('message','Successfully Registerd');


        }

        public function vlntrlist(){
            $vlntr = Volunteer ::all();
            return view('backend.volunteer.volunteerlist',compact('vlntr'));
        }
        public function delete($id){
            Volunteer::find($id)->delete();
            return redirect()->back();
        }
        public function edit($id){
            $vlntr=Volunteer::find($id);
            
            return view('backend.volunteer.edit',compact('vlntr'));
        }

        public function update(Request $request,$id){
            $ValidatedData= $request->validate([

                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'gender'=>'required',
                'phoneNumber'=>'required',
                'blood_group'=>'required',

            ]);
            
            $vlntr=Volunteer::find($id);
            $vlntr->first_name = $request->first_name;
            $vlntr->last_name = $request->last_name;
            $vlntr->email = $request->email;
            $vlntr->password = $request->password;
            $vlntr->gender = $request->gender;
            $vlntr->phoneNumber = $request->phoneNumber;
            $vlntr->blood_group = $request->blood_group;
            $vlntr->save();
            return redirect()->route('volunteer.list')->with('message','Successfully Updated');

        }
            
        

        public function view($id){
    
            return view('backend.volunteer.view',[
                'vlntr'=>Volunteer::findorFail($id)
            ]);
        }
     
}
