@extends('backend.master')

@section('content')




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

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<div class="container">
<form method="POST" class="form-horizontal" action="{{route('vlntr.store')}} " role="form">
  {{csrf_field()}}
        <h2>Registration</h2>
        <div class="form-group">
            <label for="first_name" class="col-sm-3 control-label">First Name*</label>
            <div class="col-sm-9">
                <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="First Name" class="form-control" autofocus>
                @error('first_name')  <p class="text-danger">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Last Name" class="form-control" autofocus>
                @error('last_name')  <p class="text-danger">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email" class="form-control" name="email">
                @error('email')  <p class="text-danger">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                @error('password')  <p class="text-danger">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                @error('password')  <p class="text-danger">{{ $message }}</p> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
            <div class="col-sm-9">
                <input type="date" name="birthDate" value="{{old('birthDate')}}" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
            <div class="col-sm-9">
                <input type="phoneNumber" name="phoneNumber" id="phoneNumber" value="{{old('phoneNumber')}}" placeholder="Phone number" class="form-control" >
                @error('phoneNumber')  <p class="text-danger">{{ $message }}</p> @enderror
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>


        <div class="form-group">
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" class="form-control">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            
            <div class="form-group col-md-6">
                <label for="blood_group" >Blood group*</label>
                <select id="blood_group" name="blood_group" class="form-control">
                    <option seected>Blood group</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>


                </select>
                @error('gender')  <p class="text-danger">{{ $message }}</p> @enderror
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
<button type="submit" class="btn btn-primary btn-block">Register</button>
</form> <!-- /form -->
</div>

@stop