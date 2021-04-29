@extends('backend.master')
@section('content')
    

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<div class="container" >
    <div class="row" style="text-align: center" >
        <table class="table table-success table-striped" style="padding:30x 0" >
            <thead>
                <tr>
                    
                    <th scope="col">Child Id</th>
                    <th scope="col">Child Name</th>
                    <th scope="col">Vaccine Name</th>
                    <th scope="col">total dose</th>
                    <th scope="col">1st dose</th>
                    <th scope="col">2nd dose</th>
                    <th scope="col">3rd dose</th>
                    
                    
        
        
                </tr>
            </thead>
           
            <tbody>



           @foreach ($child as $key=>$item)
     
           <tr>
            <td>{{optional($item->child)->id}}</td>
            <td>{{ optional($item->child)->name}}</td>
            <td>{{ $item->vaccine->vc_name }}</td>
            <td>{{ $item->dose_no }}</td>
            <td>{{ $item->first_dose }}</td>
            <td>{{ $item->second_dose }}</td>
            <td>{{ $item->third_dose }}</td>
            
            
            
            
        </tr>
           @endforeach
               
        
                
            
            </tbody>
        </table>
    </div>
</div>


@endsection