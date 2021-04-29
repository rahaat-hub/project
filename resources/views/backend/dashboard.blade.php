@extends('backend.master')
@section('content')
<section>
    <div class="container-fluid">
        <div class="container-fluid" style="background-color: rgb(8, 29, 50)">
        <h1 class="mt-4" style="color: rgb(241, 231, 231)">Dashboard</h1>
        <!--ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol-->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: rgb(33, 3, 61)">
                    <div class="card-body" >Total Vaccine</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="#">{{ $vaccine->count() }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: rgb(66, 2, 83)">
                    <div class="card-body">Total Child</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a style="text-align: center" class="small text-black stretched-link" href="">{{ $child->count() }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: rgb(111, 3, 81)">
                    <div class="card-body">Total Volunteer</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="">{{ $volunteer->count() }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: rgb(33, 123, 8)">
                    <div class="card-body">Total Card Generate</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="">{{ $card->count() }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-xl-3 col-md-6">
                <div class="card  text-white mb-4" style="background-color:rgb(32, 68, 32) ">
                    <div class="card-body">Notifications</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href=""></a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>
    
</section>

@endsection