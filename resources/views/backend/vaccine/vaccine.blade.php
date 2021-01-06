@extends('backend.master')
@section('content')

<h4 class="pb">Table 1: EPI immunization schedule of Bangladesh for children 0 - 1 year of age</h4>

<table class="table table-hover immunesc">
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
            <td>{{$data->interval_between_doses}}</td>
            <td>{{$data->starting_time_of_doses}} weeks</td>
            <td>{{$data->route}}</td>
            <td>{{$data->site}}</td>
            <td>

            <a class="btn btn-primary" href="{{route('vaccine.edit',$data->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('vaccine.delete',$data->id)}}">Delete</a>
            <a class="btn btn-success" href="{{ route('vaccine.view',$data->id) }}">View</a>
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