<header id="header">
    <div class="left-part"></div>
    <a id="logo" href="index.html">Kid' school</a>
    <div class="bar-holder">
        <a class="menu_trigger" href="#">menu</a>
        <nav id="nav">
            <ul>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('schedule') }}">Vaccine schedule</a></li>
                <li><a href="gallery.html" >Gallery</a></li>
                <li><a href="index.html">Contact</a></li>
                <li><a href="index.html">Card</a></li>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Login | Registration
                </button>
                <li><a href="index.html">Login</a></li>
            </ul>
        </nav>
    </div>
</header>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Login or Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Registration</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name *</label>
                                <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address *</label>
                                <input required  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password *</label>
                                <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mobile Numbers *</label>
                                <input  name="mobile" required type="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile number">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">User image</label>
                                <input  name="photo" type="file" class="form-control" id="" placeholder="user photo">
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="">Forget password ?</a>
            </div>
        </div>
    </div>
</div>