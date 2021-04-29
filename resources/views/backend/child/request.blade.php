@extends('backend.master')
@section('content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

    <div style="text-align:center">
        <pre>{{ $card-> name }}</pre>
        <pre>{{ $card-> phone }}</pre>
        <pre>{{ $card-> email }}</pre>
        <pre> <b> Age : </b>{{ $age }} - {{ $user_age }} (Weeks)</pre>
        
        
        
        
        
    </div>
    
    <form action="{{ route('provide.vaccine') }}" method="post">
        @csrf
        <div class="table-responsive container">
            <table class="table table-hover">

                <tbody id="items">
                    <!--tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle ">

                        <td><button type="button" data-toggle="modal" data-target="#edit" data-uid="1"
                                class="update btn btn-warning btn-sm"><span
                                    class="glyphicon glyphicon-pencil"></span></button></td>
                        <td><button class="btn btn-default btn-xs"><span
                                    class="glyphicon glyphicon-eye-open"></span></button></td>
                    </tr-->

                    <tr>
                        <td colspan="12" class="hiddenRow">
                            <!--div class="accordian-body collapse" id="demo1"-->
                                <pre></pre>
                                <div>
                                <h2>Vaccine List</h2>
                                <div class="container ">
                                    <table class="table table-striped">
                                       
                                    @foreach ($vcc as $data)
                                        
                                        @php
                                         $doesCount=0;
                                        @endphp
                                       
                                       @foreach ($card->vaccine as $vac)
                                       @php if($vac->vaccine_id==$data->id)
                                       {
                                           $doesCount=$vac->dose_no??0;
                                           
                                       }
                                       
                                       @endphp
                                   @endforeach
                                   {{-- @dd($doesCount) --}}
                                   {{-- @if($data->id==2)
                                   @dd($data->interval_between_doses * $doesCount + $data->starting_time_of_doses)
                                   @endif --}}
                                {{-- @dd($user_age) --}}
                                        <tbody>
                                            <tr id="addr0">
                                                <div class="form-check">
                                               
                                                    <input 
                                                      
                                                    
                                                        @if($data->no_of_doses==$doesCount) checked disabled @endif
                                                        @if($data->interval_between_doses * $doesCount + $data->starting_time_of_doses == $user_age) enabled="enabled" @endif
                                                        @if($data->interval_between_doses * $doesCount + $data->starting_time_of_doses > $user_age) checked disabled @endif
                                                        @if ( $data->starting_time_of_doses <= $user_age && ($data->interval_between_doses*$data->no_of_doses + $data->starting_time_of_doses)!=$user_age ) @else checked disabled @endif
                                                
                                                        
                                                    name="vaccine[]" class="form-check-input" type="checkbox" value="{{ $data->id  }}"
                                                        id="flexCheckDefault">

                                                        
                                                       
                                                    <label class="form-check-label" for="flexCheck">
                                                        
                                                        <p>{{ $data->vc_name }}( Doses: {{ $doesCount }} of {{ $data->no_of_doses }})  </p>
                                                    </label>

                                                </div>
                                            
                                                <input type="hidden" name="id" value="{{  $card->id }}">

                                            </tr>
                                            <tr id="addr1"></tr>
                                            
                                        </tbody>
                                    
                                       
                                        
                                    @endforeach
                                        
                                    
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                        


                                    </table>
                                </div>

                                

                            </div>
                        </td>
                    </tr>



                </tbody>

            </table>
            <hr>

        </div>

    </form>



@endsection
