<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Child;
use App\Models\Vaccine;
use App\Models\Volunteer;
use App\Models\Child_vaccin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Unique;

    class ChildController extends Controller
{
    //
    public function signup(){

        
        return view('backend.child.childsignup');
    }
    public function store(Request $request){

        

        $validatedData = $request->validate([

            'name'=>'required',
            'f_name'=> 'required',
            'm_name'=> 'required',
            'nid'=>'required|min:10|Unique:children',
            'phone'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'address'=> 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',

    
        ],

        );


       $admin = Admin::create([
            'name' =>  $request->name ,
            'phone' =>  $request->phone ,
            'email' =>  $request->email ,
            'password' => bcrypt($request->password ) ,
            'blood_group' =>  $request->blood_group ,
            'gender' =>  $request->gender ,
 
         ]);

         Child::create([
              'admin_id'=>  $admin->id,
            'f_name'=>$request->f_name,
            'm_name'=>$request->m_name,
            'nid'=>$request->nid,
            'birthDate'=>$request->birthDate,
            'address'=>$request->address,
            
            
         ]);

        return redirect()->route('child.list')->with('message','Successfully Registerd');


        }

        

        public function delete($id){
            Admin::with('child')->find($id)->delete();
            return redirect(route('child.list'));
        }

        public function view($id){       
            
            // dd(Admin::with('child','childVaccine','vaccine')->findOrFail($id));
            //dd(Child::with('childVaccine')->findOrFail($id));
            return view('backend.child.view',[
        
                'child'=> Admin::with('child','childVaccine','vaccine')->findOrFail($id)
                
            ]);
            
        }

        public function edit($id){
            $ch = Admin::with('child')->find($id);
            
            return view('backend.user',compact('ch'));
        }
        public function update(Request $request,$id){
            
            $validatedData = $request->validate([

                'name'=> 'required',
                
                'f_name'=> 'required',
                'm_name'=> 'required',
                
                
                'email'=> 'required|email',
                
                'phone'=> 'required',
                'address'=> 'required',
                'blood_group' => 'required',
                'gender'=> 'required',
                'birthDate' => 'required',
        
            ],
    
            );
            

            $adminup = Admin::with('child')->find($id);
           
            $adminup->name =  $request->name ;
            $adminup->phone =  $request->phone ;
            $adminup->email =  $request->email ;
           // $adminup->password = bcrypt($request->password ) ;
            $adminup->blood_group =  $request->blood_group ;
            $adminup->gender =  $request->gender ;
        
            $adminup->save();
            
            
            $childup = $adminup->child; 
            
        
            $childup->f_name = $request->f_name;
            $childup->m_name = $request->m_name;
            
            $childup->address = $request->address;
            
            $childup->birthDate = $request->birthDate;
            
            $childup->save();
    
            
            
    
            return redirect()->route('child.list')->with('message','Successfully Updated');
        }
        
        public function findcard(){
            
            return view('backend.child.login');
        }
        
        public function cardshow(Request $request){
        
            $card= Admin::with('child','vaccine')->find($request->id);
              
            
            // dd($card);

            $vcc= Vaccine::all();
        
           

            $birthday =$card->child->birthDate;
            
            
            // $diff=$birthday->diff(date()->now())->days;
            $user_age  =  Carbon::parse($birthday)->diff(Carbon::now())->days/7;
            
            $age = Carbon::parse($birthday)->diff(Carbon::now())->format('%y Year %m Month %d day');
            
            $user_age = (int) $user_age;
            
            return view('backend.child.request',compact('card','vcc','user_age','birthday','age'));
        }

        public function allinfo(){
           
        //    dd(Child_vaccin::with(['child','vaccine'])->get());
            return view('backend.child.vaccines',[
                'child'=>Child_vaccin::with(['child','vaccine'])->get()
                
            ]);
        }
        
        public function new(){
            return view('backend.user');
        }
        /**public function allinfo(){       
            dd( Admin::with('child','childVaccine','vaccine')->get());
            //dd(Child::with('admin','childVaccine','vaccine')->findOrFail($id));
            //dd(Child::with('childVaccine')->findOrFail($id));
            return view('backend.child.vaccines',[
        
                'allinfo'=> Admin::with('child','childVaccine','vaccine')->get()
                
            ]);
        }*/
        
}
