@extends('backend.master')

@section('content')
    

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<<<<<<< HEAD
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.note {
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    background:#3a3b45 10%;
    color:#fff;
    font-weight: bold;
    line-height: 80px;
}

.form-content {
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}

.form-control {
    border-radius: 1.5rem;
}

.btnSubmit {
    border: none;
    border-radius: 1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #07121e;
    color: #fff;
}
</style>


<div class="container register-form">
    <div class="form">
        <form method="POST" action="{{ route('child.store') }}">
            {{csrf_field()}}
        <div class="note">
            <p>Registration Form for Child</p>
        </div>

        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Your Name *" />
                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input type="string" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Phone Number *" />
                        @error('phone') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="Email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Your Email *" />
                        @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password" class="form-control" placeholder="Your Password *" />
                        @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="col-md-6">


                    <div class="form-group">
                        <input type="number" value="{{ old('nid') }}" name="nid" class="form-control" placeholder="BirthId *" />
                        @error('nid') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="f_name" value="{{ old('f_name') }}" class="form-control" placeholder="Father's Name *" />
                        @error('f_name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                </div>
                <div class="col-md-6">
                    
                    
                    <div class="form-group">
                        <input type="text" name="m_name"value="{{ old('m_name') }}"  class="form-control" placeholder="Mother's Name *" />
                        @error('m_name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="date" name="birthDate" id="birthDate" value="{{ old('birthDate') }}" class="form-control" placeholder="date of birth" />
                        @error('birthDate') <p class="text-danger">{{ $message }}</p> @enderror
                        
                        
                    </div>
                    <div class="form-group">
                    
                        <select id="blood_group" name="blood_group" value="{{ old('blood_group') }}" class="form-control" placeholder="blood_group">
                            
=======


    <!------ Include the above in your HEAD tag ---------->

    <style>
        ::content {
            background: url('public\vlntr\img\rethink-target-heart-rate-number-ftr.jpg') fixed;
            background-size: cover;
        }

        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            border-radius: 0.3em;
            background-color: #f2f2f2;
        }

        *[role="form"] h2 {
            font-family: 'Open Sans', sans-serif;
            font-size: 40px;
            font-weight: 600;
            color: #000000;
            margin-top: 5%;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

    </style>

    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif

    <div class="container">
        <form method="POST" class="form-horizontal" action="{{ route('child.store') }} " role="form">
            {{ csrf_field() }}
            <h2>Registration</h2>
            <div class="form-group">
                <label for="first_name" class="col-sm-3 control-label">First Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                        placeholder="First Name" class="form-control" autofocus>
                    @error('first_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                        placeholder="Last Name" class="form-control" autofocus>
                    @error('last_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nid" class="col-sm-3 control-label">NID</label>
                <div class="col-sm-9">
                    <input type="number" min="0" oninput="validity.valid||(value='');" name="nid" id="nid" value="{{ old('nid') }}" placeholder="NID" class="form-control" autofocus>
                    @error('nid') <p class="text-danger">{{ $message }}</p> @enderror
                </div>

            </div>
            <div class="form-group">
                <label for="f_name" class="col-sm-3 control-label">Father's Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="f_name" name="f_name" value="{{ old('f_name') }}" placeholder="Father Name"
                        class="form-control" autofocus>
                    @error('f_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="m_name" class="col-sm-3 control-label">Mother's Name</label>
                <div class="col-sm-9">
                    <input type="text" id="m_name" name="m_name" value="{{ old('m_name') }}" placeholder="Mother's Name"
                        class="form-control" autofocus>
                    @error('m_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email"
                        class="form-control" name="email" autofocus>
                    @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control"
                        autofocus>
                    @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password*</label>
                <div class="col-sm-9">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Password" class="form-control" autofocus>
                    @error('password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" name="birthDate" value="{{ old('birthDate') }}" id="birthDate" class="form-control"
                        autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
                <div class="col-sm-9">
                    <input type="phoneNumber" name="phoneNumber" id="phoneNumber" value="{{ old('phoneNumber') }}"
                        placeholder="Phone number" class="form-control" autofocus>
                    @error('phoneNumber') <p class="text-danger">{{ $message }}</p> @enderror
                    <span class="help-block">Your phone number won't be disclosed anywhere </span>
                </div>
            </div class="form-group">
            <label for="address" class="col-sm-3 control-label">Address*</label>
            <input type="text-area" name="address" id="address" value="{{ old('address') }}" placeholder="address"
                class="form-control" autofocus>
            @error('address') <p class="text-danger">{{ $message }}</p> @enderror
            <div>

            </div>
            <div class="form-group">
                <div class="form-row">

                    <div class="form-group col-sm-3">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="blood_group">Blood group*</label>
                        <select id="blood_group" name="blood_group" class="form-control">
                            <option seected>Blood group</option>
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
<<<<<<< HEAD
                        </select>
                    </div>
                    
                    
                    
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text-area" name="address" id="address" value="{{ old('address') }}"class="form-control" placeholder="Address *" />
                    
                    @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                </div>

                <div class="form-group">
                    <select name="gender" id="gender"  class="form-control" placeholder="*gender">
                        
                        <option >Male</option>
                        <option >Female</option>
                    </select>                   
                </div>
                </div>
            </div>
                
               
            </div>
               
                </div>

           <div>
               <button type="submit" class="btn btn-primary">Register</button>
           </div> 
        </div>
    </form>
    </div>
</div>

@endsection
=======


                        </select>
                        @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>

            </div>

    </div>
    </div> <!-- /.form-group -->
    <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
            <span class="help-block">*Required fields</span>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block" >Register</button>
    </form> <!-- /form -->
    </div>

@stop
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
