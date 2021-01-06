@extends('backend.master')
@section('content')

<!------ Include the above in your HEAD tag ---------->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>

body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

</style>

<div class="container emp-profile">
            <form method="post" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <!--img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/-->
                            <img src="{{ URL::asset('/style/img/k.jpg') }}" alt="" srcset="">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      {{ $vlntr->first_name}} {{ $vlntr->last_name }}
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a style="background-color:#EEEEE " href="{{ route('vlntr.edit',$vlntr->id) }}">Edit profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div-->
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> C {{ $vlntr->id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                              
                                            

                                            <div class="col-md-6">
                                                <p>{{ $vlntr->first_name }} {{ $vlntr->last_name }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                              <label>Gender</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>{{ $vlntr->gender }}</p>
                                          </div>
                                      </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $vlntr->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $vlntr->phoneNumber }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $vlntr->blood_group }}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Data</th>
                                      <th>Trattamento</th>
                                      <th>Prodotti utilizzati</th>
                                      <th>Colori utilizzati</th>
                                      <th>Note</th>
                                      <th>Modifica</th>
                                    </tr>
                                  </thead>
                                  <tbody id="items">
                                    <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle ">
                                      <td>10.05.2017</td>
                                      <td>MASSAGGIO schiena</td>
                                      <td>usato loreal</td>
                                      <td>colore rosso</td>
                                      <td>il cliente preferisce il verde</td>
                                      <td><button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
                                      <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                    </tr>
                                    
                                    <tr>
                            <td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="demo1"> 
                              <table class="table table-striped">
                                  <h1>Dettagli trattamento</h1>
                                      
                                     <tbody>
                          <tr id='addr0'>
                            <td>
                            
                            </td>
                            <td>
                            <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                            </td>
                            <td>
                            <input type="text" name='mail0' placeholder='Mail' class="form-control"/>
                            </td>
                            <td>
                            <input type="text" name='mobile0' placeholder='Mobile' class="form-control"/>
                            </td>
                          </tr>
                                    <tr id='addr1'></tr>
                        </tbody>
                        
                                 </table>
                                 <a id="add_row" class="btn btn-default pull-left">Aggiungi riga</a><a id='delete_row' class="pull-right btn btn-default">Elimina riga</a>
                              
                              </div> </td>
                        </tr>
                                    
                                    
                                    
                                      </tbody>
                                  
                                </table>
                                <hr>
                               <div class="row">
                                  <div class="col-md-6 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                  </div>
                                </div>
                              </div><!--/table-resp-->
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>               

@endsection