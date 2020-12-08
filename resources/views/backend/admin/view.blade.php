@extends('backend.master')
@section('content')

<div class="row">
  		<div class="col-sm-5"><!--left col-->
            
          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> {{ $child->first_name }} </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Father's Name</strong></span> {{ $child->f_name }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Mother's Name</strong></span> {{ $child->m_name }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Birth Date</strong></span> {{ $child->birthDate }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Gender</strong></span> {{ $child->gender }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span> {{ $child->email }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Phone</strong></span> {{ $child->phoneNumber }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Blood Group</strong></span> {{ $child->blood_group }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Address</strong></span> {{ $child->address }}</li>
            <!--
            'first_name'=> 'required',
            'last_name'=> 'required',
            'f_name'=> 'required',
            'm_name'=> 'required',
            'phoneNumber'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:8|confirmed',
            'phoneNumber'=> 'required',
            'address'=> 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'birthDate' => 'required',
            -->
          </ul> 
          <ul class="list-group">
              <li class="list-group-item text-right"><span class="pull-left"><strong>Allergie</strong></span> <button>edit</button><div class="expandable form-group text-center" style="margin-top:30px; width:100%" data-count="1">
        <div class="row">
    	    <input name="name[]" type="text" id="name[]"  placeholder="Allergia">
		    <button class="btn add-more" id="add-more" type="button">+</button>
	    </div>
    </div>

@stop