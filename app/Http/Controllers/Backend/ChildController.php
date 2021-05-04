<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Child;
use App\Models\Vaccine;
use App\Models\Volunteer;
<<<<<<< HEAD
use App\Models\Child_vaccin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Unique;
=======
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Carbon\Carbon;
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec

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
<<<<<<< HEAD
            'phone'=> 'required',
=======
            'phoneNumber'=> 'required',
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
            'email'=> 'required|email',
            'password'=> 'required',
            'address'=> 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',
<<<<<<< HEAD

=======
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    
        ],

        );
<<<<<<< HEAD
=======
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
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec


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
<<<<<<< HEAD
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
=======
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
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
                'birthDate' => 'required',
        
            ],
    
            );
<<<<<<< HEAD
            

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
    
            
            
=======
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
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    
            return redirect()->route('child.list')->with('message','Successfully Updated');
        }
        
        public function findcard(){
            
            return view('backend.child.login');
        }
        
        public function cardshow(Request $request){
        
<<<<<<< HEAD
            $card= Admin::with('child','vaccine')->find($request->id);
=======
            $card= Child::with('vaccine')->find($request->id);
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
              
            
            // dd($card);

            $vcc= Vaccine::all();
<<<<<<< HEAD
        
           

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
=======
            
            

            $birthday = $card->birthDate;
            // $diff=$birthday->diff(date()->now())->days;
            $user_age  =  Carbon::parse($birthday)->diff(Carbon::now())->days/7;
            
            $user_age = (int) $user_age;
            
            return view('backend.child.request',compact('card','vcc','user_age','birthday'));
        }
        
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
        
}
