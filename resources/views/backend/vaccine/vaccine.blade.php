@extends('backend.master')
@section('content')

<div class="container">
    <div class="row">
        <h4>Table 1: EPI immunization schedule of Bangladesh for children 0 - 1 year of age</h4>
    </div>
</div>


<div class="container-fluid">
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
            <th scope="col">Action</th>

        </tr>
    </thead>
   
    <tbody>
    @foreach($list as $key=>$data)
        <tr>
            <td scope="row">{{$key+1}}</td>
            <td>{{$data->vc_name}}</td>
            <td>{{$data->disease}}</td>
            <td>{{$data->no_of_doses}}</td>
            <td>{{$data->interval_between_doses}} weeks</td>
            <td>{{$data->starting_time_of_doses}} weeks</td>
            <td>{{$data->route}}</td>
            <td>{{$data->site}}</td>
            <td>
                <a href="{{route('vaccine.edit',$data->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                </a>
                <a href="{{route('vaccine.delete',$data->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px" color="red">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                </a>
                <a href="{{ route('vaccine.view',$data->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25px" height="25px" color="green">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                </a>

            </td>
            
        </tr>


        <!--tr>
            <td>Pentavalent</td>
            <td>Diphtheria, Pertussis, Tetanus, Hepatitis B, Haemophilus Influenza B</td>
            <td>3</td>
            <td>4 Weeks</td>
            <td>6 weeks of age</td>
            <td>IM</td>
        </tr>


        <tr>
            <td>PCV</td>
            <td>Pneumococcal Pneumonia</td>
            <td>3</td>
            <td>4 Weeks</td>
            <td>6 weeks of age</td>
            <td>IM</td>
        </tr>

        <tr>
            <td>OPV</td>
            <td>Poliomyelitis</td>
            <td>4 (additional 0 dose at birth)</td>
            <td>4 Weeks</td>
            <td>6 weeks of age</td>
            <td>Oral</td>
        </tr>

        <tr>
            <td>MR</td>
            <td>Measles Rubella</td>
            <td>1</td>
            <td>-</td>
            <td>After completion of 9 months</td>
            <td>Subcutaneous</td>
        </tr>

        <tr>
            <td>Measles</td>
            <td>Measles</td>
            <td>1</td>
            <td>-</td>
            <td>After completion of 15 months</td>
            <td>Subcutaneous</td>
        </tr-->
    @endforeach
    </tbody>
</table>

@endsection