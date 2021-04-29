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

<div id="hello">

    <div class="container">
            
        <div class="row">
           
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                              {{ $child->name }}
                            </h5>
                            
                            
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Card</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a style="background-color:#EEEEE " href="{{ route('child.edit',$child->id) }}">Edit profile</a>
            </div>
            
        </div>
        <div class="row">
            
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $child->id }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                      
                                    

                                    <div class="col-md-6">
                                        <p>{{ $child->name }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                      <label>Gender</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>{{ $child->gender }}</p>
                                  </div>
                              </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <label>Date Of Birth</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>{{ $child->child->birthDate }}</p>
                                  </div>
                              </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <label>Fathr's Nmae</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>{{ $child->child->f_name }}</p>
                                  </div>
                              </div>
                                <div class="row">
                                  <div class="col-md-6">
                                      <label>Mother's Name</label>
                                  </div>
                                  <div class="col-md-6">
                                      <p>{{ $child->child->m_name }}</p>
                                  </div>
                              </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $child->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $child->phone }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Blood Group</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $child->blood_group }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $child->child->address }}</p>
                                    </div>
                                </div>
                                <form >
                                    <div class="col-md-2">
                                    <button style="margin: 20px 0;" type="submit" onclick="codespeedy()" class="btn btn-success">Print</button>
                                </div>
                                </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="table-responsive">
                        <table class="table table-success table-striped" style="padding:30x 0" >
                            <thead>
                                <tr>

                                    <th scope="col">Card No</th>
                                    <th scope="col">Vaccine Name</th>
                                    <th scope="col">1st dose</th>
                                    <th scope="col">2nd dose</th>
                                    <th scope="col">3rd dose</th>
                                    
                        
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($child->childVaccine  as $key=>$data)
                              
                        
                                <tr>
                                    <td>{{ $data->child->id }}</td>
                                    <td >{{ $data->vaccine->vc_name }}</td>  
                                    <td>{{ $data->first_dose }}</td>
                                    <td>{{ $data->second_dose }}</td>
                                    <td>{{ $data->third_dose }}</td>
                                    
                                    
                                    
                                    
                                </tr>
                                
                                @endforeach
                           
                            </tbody>
                        </table>
                         
                        <form >
                            <div class="col-md-2">
                            <button style="margin: 20px 0;" type="submit" onclick="codespeedy()" class="btn btn-success">Print</button>
                        </div>
                        </form>
                      </div> 
                    </td>
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
    </div>
              
</div>


</div>
 
        
        
        <script type="text/javascript">
				
            function codespeedy(){
            var print_div = document.getElementById("hello");
            var print_area = window.open();
            print_area.document.write(print_div.innerHTML);
            print_area.document.close();
             print_area.focus();
            print_area.print();
            print_area.close();
            }
</script>

@endsection