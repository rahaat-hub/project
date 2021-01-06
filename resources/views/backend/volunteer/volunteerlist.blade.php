@extends('backend.master')
@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>      
      <th scope="col">Blood Group</th>      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($vlntr as $key=> $data)
    <tr>
      <th scope="row">C {{$key+1}}</th>
      <td> {{$data->first_name}} {{ $data->last_name }}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phoneNumber}}</td>
      <td>{{$data->blood_group}}</td>
      
      <td>
            <a class="btn btn-primary" href="{{ route('vlntr.edit',$data->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{route('volunteer.delete',$data->id)}}">Delete</a>
            <a class="btn btn-success" href="{{ route('vlntr.view', $data->id) }}">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop