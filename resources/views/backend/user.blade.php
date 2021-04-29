@extends('backend.master')

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
        <form method="POST" action="{{ route('child.update', $ch->id) }}">
            {{csrf_field()}}
        <div class="note">
            <p>Registration Form for Child</p>
        </div>

        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" value="{{ $ch->name }}" class="form-control" placeholder="Your Name *" />
                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input type="string" name="phone" value="{{$ch->phone}}" class="form-control" placeholder="Phone Number *" />
                        @error('phone') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="Email" name="email" value="{{ $ch->email }}" class="form-control" placeholder="Your Email *" />
                        @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                </div>
                <div class="col-md-6">


                    <div class="form-group">
                        <input type="date" name="birthDate" value="{{ $ch->child->birthDate }}" class="form-control" placeholder="Birthdate *" />
                        @error('birthDate') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="f_name" value="{{ $ch->child->f_name }}" class="form-control" placeholder="Father's Name *" />
                        @error('f_name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    
                </div>
                <div class="col-md-6">
                    
                    
                    <div class="form-group">
                        <input type="text" name="m_name" value="{{ $ch->child->m_name }}" class="form-control" placeholder="Mother's Name *" />
                        @error('m_name') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <select name="gender" value="{{ $ch->gender }}" id="gender" class="form-control">
                            <option selected>{{ $ch->gender }}</option>
                            <option >Male</option>
                            <option >Female</option>
                        </select>                   
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div >
                
                        <select id="blood_group" value="{{ $ch->blood_group }}" name="blood_group" class="form-control">
                            <option selected>{{ $ch->blood_group }}</option>
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
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text-area" name="address" id="address" value="{{ $ch->child->address }}"class="form-control" placeholder="Address *" />
                    
                    @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                </div>

                
                </div>
            </div>
                
               
            </div>
               
                </div>

           <div>
               <button type="submit" class="btn btn-primary">Update</button>
           </div> 
        </div>
    </form>
    </div>
</div>

@endsection