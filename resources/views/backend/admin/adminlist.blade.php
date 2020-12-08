@extends('backend.master')
@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>      
      <th scope="col">Blood Group</th>      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($adlist as $key=> $data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->blood_group}}</td>
      
      <td>
            <a class="btn btn-primary" href="{{route('admin.edit',$data->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('admin.delete',$data->id)}}">Delete</a>
            <a class="btn btn-success" href="">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop