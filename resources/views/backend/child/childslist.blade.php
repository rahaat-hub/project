@extends('backend.master')
@section('content')
<div class="table-responsive">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col"> Name</th>
        <th scope="col">BirthID</th>
        
        <th scope="col">Birth Date</th>
        <th scope="col">Gender</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>          
        <th scope="col">Blood Group</th>      
        <th scope="col">Action</th>
  
      </tr>
    </thead>
    <tbody>
      @foreach($child as $key=> $data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->first_name}} {{$data->last_name}}</td>
        <td>{{$data->nid}}</td>
        
        <td>{{$data->birthDate}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phoneNumber}}</td>
        <td>{{$data->blood_group}}</td>
        
        <td>
              <a class="btn btn-primary" href="{{route('child.edit',$data->id)}}">Edit</a>
              <a class="btn btn-danger" href="{{route('child.delete',$data->id)}}">Delete</a>
              <a class="btn btn-success" href="{{route('child.view',$data->id)}}">View</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>  

</div>



@stop