@extends('backend.master')
@section('content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('meessage')}}</p>
@endif


<form method="POST" action="{{route('vaccine.update',$vacc->id)}}" role="form">
@csrf

  <div class="form-group" >
    <label for="vc_name">Vaccine Name</label>
    <input type="text" required name="vc_name" class="form-control" value="{{$vacc->vc_name}}"  id="vc-name"  placeholder="Enter your name">
    
  </div>

  <div class="form-group">
    <label for="disease">Disease</label>
    <input type="text" name="disease" class="form-control" value="{{$vacc->disease}}" id="disease" placeholder="disease">
  </div>

  <div class="form-group">
    <label for="route">route</label>
    <input type="text" name="route" class="form-control" value="{{$vacc->route}}" id="route" placeholder="Enter route">
  </div>

  <div class="form-group">
    <label for="no_of_doses">No of Dose</label>
    <input type="text" name="no_of_doses" class="form-control" value="{{$vacc->no_of_doses}}" id="no_of_doses" placeholder="doses">
  </div>
  
  <div class="form-group">
    <label for="interval_between-doses">Interval between doses</label>
    <input type="string" name="interval_between_doses" class="form-control" value="{{$vacc->interval_between_doses}}" id="interval_between-doses" placeholder="Interval between doses">
  </div>

  <div class="form-group">
    <label for="starting_time_of_doses">Starting time of doses</label>
    <input type="string" name="starting_time_of_doses" class="form-control" value="{{$vacc->starting_time_of_doses}}" id="starting_time_of_doses" placeholder="starting_time_of_doses">
  </div>

    <div class="form-group">
    <label for="site">Site</label>
    <input type="text" name="site" class="form-control" value="{{$vacc->site}}" id="site" placeholder="Site">
  </div>
  <button type="save" class="btn btn-primary">Submit</button>
</form>

@endsection