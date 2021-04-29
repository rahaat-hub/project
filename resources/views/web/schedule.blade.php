@extends('web.index2')

@section('duplicate')
<div class="container">
    <div class="row">
        <h4>Table 1: EPI immunization schedule of Bangladesh for children 0 - 1 year of age</h4>
    </div>
</div>


<div class="container">
    <div class="row" style="text-align: center">
        <table class="table table-success table-striped" style="padding:30x 0">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Disease</th>
                    <th scope="col">No. of Dose</th>
                    <th scope="col">Interval between doses</th>
                    <th scope="col">Starting time of doses</th>
                    <th scope="col">Route </th>
                    <th scope="col">Site</th>
        
        
                </tr>
            </thead>
           
            <tbody>
            @foreach($list as $key=>$data)
                <tr>
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$data->vc_name}}</td>
                    <td>{{$data->disease}}</td>
                    <td>{{$data->no_of_doses}}</td>
                    <td>{{$data->interval_between_doses}}</td>
                    <td>{{$data->starting_time_of_doses}} weeks</td>
                    <td>{{$data->route}}</td>
                    <td>{{$data->site}}</td>
                    
                    
                </tr>
        
                
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection