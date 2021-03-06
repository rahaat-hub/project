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

    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif

    <div class="container">
        <form method="POST" class="form-horizontal" action="{{ route('child.update', $ch->id) }} " role="form">
            {{ csrf_field() }}
            <h2>Registration</h2>
            <div class="form-group">
<<<<<<< HEAD
                <label for="name" class="col-sm-3 control-label">First Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="name" name="name" value="{{ $ch->name }}"
                        placeholder="First Name" class="form-control" autofocus>
                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="f_name" class="col-sm-3 control-label">Father's Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="f_name" name="f_name" value="{{ $ch->child->f_name }}" placeholder="Father Name"
                        class="form-control" autofocus>
                    @error('f_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="m_name" class="col-sm-3 control-label">Mother's Name</label>
                <div class="col-sm-9">
                    <input type="text" id="m_name" name="m_name" value="{{ $ch->child->m_name }}" placeholder="Mother's Name"
                        class="form-control" autofocus>
                    @error('m_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" name="email" value="{{ $ch->email }}" placeholder="Email"
                        class="form-control" name="email" autofocus>
                    @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" name="birthDate" value="{{ $ch->child->birthDate }}" id="birthDate" class="form-control"
                        autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label">Phone number* </label>
                <div class="col-sm-9">
                    <input type="phone" name="phone" id="phone" value="{{ $ch->phone }}"
                        placeholder="Phone number" class="form-control" autofocus>
                    @error('phone') <p class="text-danger">{{ $message }}</p> @enderror
                    <span class="help-block">Your phone number won't be disclosed anywhere </span>
                </div>
            </div class="form-group">
            <label for="address" class="col-sm-3 control-label">Address*</label>
            <input type="text-area" name="address" id="address" value="{{ $ch->child->address }}" placeholder="address"
                class="form-control" autofocus>
            @error('address') <p class="text-danger">{{ $message }}</p> @enderror
            <div>

            </div>
            <div class="form-group">
                <div class="form-row">

                    <div class="form-group col-sm-3">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" value="{{ $ch->gender }}">
                            <option selected>{{ $ch->gender }}</option>
=======
                <label for="first_name" class="col-sm-3 control-label">First Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="first_name" name="first_name" value="{{ $ch->first_name }}"
                        placeholder="First Name" class="form-control" autofocus>
                    @error('first_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="last_name" name="last_name" value="{{ $ch->last_name }}"
                        placeholder="Last Name" class="form-control" autofocus>
                    @error('last_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nid" class="col-sm-3 control-label">NID</label>
                <div class="col-sm-9">
                    <input type="number" min="0" oninput="validity.valid||(value='');" name="nid" id="nid" value="{{ $ch->nid }}" placeholder="NID" class="form-control" autofocus>
                    @error('nid') <p class="text-danger">{{ $message }}</p> @enderror
                </div>

            </div>
            <div class="form-group">
                <label for="f_name" class="col-sm-3 control-label">Father's Name*</label>
                <div class="col-sm-9">
                    <input type="text" id="f_name" name="f_name" value="{{ $ch->f_name }}" placeholder="Father Name"
                        class="form-control" autofocus>
                    @error('f_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="m_name" class="col-sm-3 control-label">Mother's Name</label>
                <div class="col-sm-9">
                    <input type="text" id="m_name" name="m_name" value="{{ $ch->m_name }}" placeholder="Mother's Name"
                        class="form-control" autofocus>
                    @error('m_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" name="email" value="{{ $ch->email }}" placeholder="Email"
                        class="form-control" name="email" autofocus>
                    @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" name="birthDate" value="{{ $ch->birthDate }}" id="birthDate" class="form-control"
                        autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
                <div class="col-sm-9">
                    <input type="phoneNumber" name="phoneNumber" id="phoneNumber" value="{{ $ch->phoneNumber }}"
                        placeholder="Phone number" class="form-control" autofocus>
                    @error('phoneNumber') <p class="text-danger">{{ $message }}</p> @enderror
                    <span class="help-block">Your phone number won't be disclosed anywhere </span>
                </div>
            </div class="form-group">
            <label for="address" class="col-sm-3 control-label">Address*</label>
            <input type="text-area" name="address" id="address" value="{{ $ch->address }}" placeholder="address"
                class="form-control" autofocus>
            @error('address') <p class="text-danger">{{ $message }}</p> @enderror
            <div>

            </div>
            <div class="form-group">
                <div class="form-row">

                    <div class="form-group col-sm-3">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" value="{{ $ch->gender }}">
                            <option selected>Choose...</option>
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="blood_group">Blood group*</label>
<<<<<<< HEAD
                        <select id="blood_group" name="blood_group"  class="form-control" value="{{ $ch->blood_group }}">
                            <option seected>{{ $ch->blood_group }}</option>
=======
                        <select id="blood_group" name="blood_group" class="form-control" value="{{ $ch->blood_group }}">
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
    <button type="submit" class="btn btn-primary btn-block" >update</button>
    </form> <!-- /form -->
    </div>

@stop
