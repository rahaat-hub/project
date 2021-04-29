@extends('backend.master')
@section('content')
<div class="container-fluid">

  <div class="table-responsive">

  <table class="table" style="text" >
    <thead class="thead-dark">
      <tr>
        <th scope="col">Card No</th>
        <th scope="col"> Name</th>
        <th scope="col">BirthID</th>
        
        <th scope="col">Birth Date</th>
        <th scope="col">Gender</th>
        <th scope="col">Email</th>
              
        <th scope="col">Blood Group</th>
        @if(auth()->user()->role=='volunteer')      
        <th scope="col">Action</th>
        @elseif(auth()->user()->role=='admin')
        <th scope="col">Action</th>
       @endif 
      </tr>
    </thead>
    <tbody >
      @foreach($child as $key=> $data)
      <tr>
        <th >{{$data->id}}</th>
        <td>{{$data->name}} </td>
        <td>{{$data->child->nid}}</td>
        
        <td>{{$data->child->birthDate}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->blood_group}}</td>
        
        <td>
          @if(auth()->user()->role=='volunteer')
          <a href="{{ route('child.view',$data->id)}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px" color="green">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            </a>
          
              @elseif(auth()->user()->role=='admin')

              <a href="{{route('child.edit',$data->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                </a>
                <a href="{{route('child.delete',$data->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px" color="red">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                </a>
                <a href="{{ route('child.view',$data->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px" color="green">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                </a>

              
              @endif


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>  

</div>
</div>




@stop