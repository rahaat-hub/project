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
        background: #0062cc;
        color: #fff;
    }
</style>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif
<form method="POST" action="{{route('admin.update',$ad->id)}}">
    {{csrf_field()}}

    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Please Sign-up for <b>Log in</b> to System</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" value="{{$ad->name}}" class="form-control" placeholder="Your Name *" />
                            
                        </div>
                        <div class="form-group">
                            <input type="string" name="phone" value="{{$ad->phone}}" class="form-control" placeholder="Phone Number *" />
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="Email" name="email" class="form-control" value="{{$ad->email}}" placeholder="Your Email *" />
                            
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" value="{{$ad->password}}" placeholder="Your Password *" />
                            
                        </div>
                    </div>

                </div>
                    <div class="form-row">
                        <div class="col-md-4">
                        
                            <select id="blood_group" name="blood_group" value="{{$ad->name}}" class="form-control">
                                <option seected>*blood group</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>
                        </div>
                    </div>

               <div>
                   <button type="submit" class="btn btn-primary">Update</button>
               </div> 
            </div>
        </div>
    </div>
</form>
@stop