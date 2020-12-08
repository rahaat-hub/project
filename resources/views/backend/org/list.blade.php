@extends('backend.master')
@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>      
      <th scope="col">Address</th>      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($list as $key=> $data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->org_name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->ph_no}}</td>
      <td>{{$data->address}}</td>
      
      <td>
            <a class="btn btn-primary" href="">Edit</a>
            <a class="btn btn-danger" href="">Delete</a>
            <a class="btn btn-success" href="">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@stop