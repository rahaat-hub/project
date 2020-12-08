@extends('backend.master');

@section('content')

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .note {
        text-align: center;
        height: 80px;
        background: -webkit-linear-gradient(left, #0072ff, #8811c5);
        background:#0062cc;
        color: #fff;
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
        background: #0062cc;
        color: #fff;
    }
</style>
<!--@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif-->
<form method="POST" action="{{route('org.store')}}">
    {{csrf_field()}}

    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Organization SetUp</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="org_name" value="{{old('org_name')}}" class="form-control" placeholder="Organization's Name *" />
                            @error('org_name') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <input type="string" name="ph_no" value="{{old('ph_no')}}" class="form-control" placeholder="Phone Number *" />
                            @error('ph_no') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" />
                            @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" />
                            @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="address" id="address" class="form-control" placeholder="address"></textarea>
                            @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>

                    </div>

                </div>
               
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </div>
    </div>
</form>
@stop