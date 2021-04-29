<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('master2') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" href=""><i>CVCMS BD </i></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    @if(auth()->user()->role == 'admin')



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Admin</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin Screens:</h6>
                <a class="collapse-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="collapse-item" href="{{ route('admin.signup') }}">Register</a>
                <a class="collapse-item" href="{{ route('allinfo') }}">All card info</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="{{ route('admin.list') }}">Admin List</a>               
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Children</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('child.signup') }}">Register </a>
                <a class="collapse-item" href="{{ route('child.list') }}">Child List</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Vaccine</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('vaccine.add') }}">Add Vaccine </a>
                <a class="collapse-item" href="{{ route('vaccine.list') }}">Vaccine Info</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Volunteer</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ route('vlntr.signup') }}">Registration</a>
                <a class="collapse-item" href="{{ route('volunteer.list') }}">List</a>
                
            </div>
        </div>
    </li>


    @elseif(auth()->user()->role == 'volunteer') 



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-folder"></i>
            <span>Request</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
                
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Vaccine Provide</h6>
                <a class="collapse-item" href="{{ route('child.signup') }}">New</a>               
                <a class="collapse-item" href="{{ route('child.findcard') }}">Existing</a>
                <a class="collapse-item" href="{{ route('allinfo') }}">All card info</a>               
            </div>
        </div>
    </li>




    @elseif(auth()->user()->role == 'user') 










    <!--li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li-->

    <!-- Divider -->
    <!--hr class="sidebar-divider"-->

    <!-- Heading -->
    <!--div class="sidebar-heading">
        Interface
    </div-->

    <!-- Nav Item - Pages Collapse Menu -->
   


    


    <!-- Divider -->
    <!--hr class="sidebar-divider">

    <!-- Heading -->
    <!--div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
        
        

    

    
    
    
    <!-- Nav Item - Charts -->
    <!--li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li-->

    <!-- Nav Item - Tables -->
    <!--li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li-->

    @endif
 

    <!-- Divider -->
    <!--hr class="sidebar-divider d-none d-md-block"-->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

   

</ul>
