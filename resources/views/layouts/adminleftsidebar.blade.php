<!-- Start Left Side Bar  -->
<div class="col-lg-2 col-md-3 fixed-top vh-100 overflow-auto sidebars"> 

    <ul class="navbar-nav flex-column mt-4">
        <li class="nav-item nav-categories">Main</li>
        <li class="nav-item nav-categories"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks"><i class="fas fa-tachometer fa-lg me-3"></i>Boss</a></li>
        <li class="nav-item nav-categories"><a href="javascript:void(0);" class="nav-link text-white p-3 mb-2 sidebarlinks"><i class="fas fa-tachometer fa-lg me-3"></i>Dashboard</a></li>
        <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#pagelayout"><i class="fas fa-file-alt fa-lg me-3"></i>Page Layout <i class="fas fa-angle-left mores"></i></a>
        
            <ul id="pagelayout" class="collapse ps-2">
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Right Box</a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-left me-4"></i> Left Box</a></li>
            </ul>

        </li>
        
        <li class="nav-item nav-categories"><a href="javascript:void(0);"  class="nav-link p-3 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#sidebarlayout"><i class="fas fa-file-alt fa-lg me-3" ></i> Sidebar Layout <i class="fas fa-angle-left mores"></i></a>
            <ul id="sidebarlayout" class="collapse ps-2">
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Compact Menu </a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Icon Menu </a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Sidebar Hidden </a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Sidebar Overlay </a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Sidebar Fixed </a></li>
            </ul>
        </li>	
        <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i> Widgets</a></li>

        <li class="nav-item nav-categories">UI Features</li>
        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks"  data-bs-toggle="collapse" data-bs-target="#basicui"><i class="fas fa-file-alt fa-lg me-3"></i> Basic UI Element <i class="fas fa-angle-left mores"></i></a>
            <ul id="basicui" class="collapse ps-2">
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Accordions </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Buttons </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Badges </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Breadcrumbs </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Dropdowns </a></li>
            </ul>
        </li>

        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks"  data-bs-toggle="collapse" data-bs-target="#advanceui"><i class="fas fa-users fa-lg me-3"></i> Student <i class="fas fa-angle-left mores"></i></a>
            <ul id="advanceui" class="collapse ps-2">
                <li><a href="{{route('students.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> All Student </a></li>
              
            </ul>
        </li>

        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Popups</a></li>

        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#icon"><i class="fas fa-file-alt fa-lg me-3" ></i> Icons <i class="fas fa-angle-left mores"></i></a>
            <ul id="icon" class="collapse ps-2">
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Material </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Flag icons </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Font Awesome </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Simple Line Icons </a></li>
            </ul>
        </li>

        <li class="nav-item nav-categories">Manage</li>
        
        <li class=""><a href="{{route('cities.index')}}" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>City</a></li>
        <li class=""><a href="{{route('countries.index')}}" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Country</a></li>
        <li class=""><a href="{{route('genders.index')}}" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Gender</a></li>
        <li class=""><a href="{{route('roles.index')}}" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Roles</a></li>
        <li class=""><a href="{{route('statuses.index')}}" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Status</a></li>
        <li class=""><a href="{{route('categories.index')}}" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Category</a></li>
        {{-- name slug status_id user_id --}}
        <li class=""><a href="" class="nav-link p-3 text-white sidebarlinks"><i class="fas fa-file-alt fa-lg me-3"></i>Tag</a></li> 
        {{-- name slug status_id user_id  --}}
        
        <li class="nav-item nav-categories">Date Representation</li>

        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#chartelement"><i class="fas fa-file-alt fa-lg me-3"></i> Chart <i class="fas fa-angle-left mores"></i></a>
            <ul id="chartelement" class="collapse ps-2">
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Pie Chart </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Map Chart </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Line Chart </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> ChartJs  </a></li>
            </ul>
        </li>

        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks"  data-bs-toggle="collapse" data-bs-target="#tableelement"><i class="fas fa-file-alt fa-lg me-3"></i> Tables <i class="fas fa-angle-left mores"></i></a>
            <ul id="tableelement" class="collapse ps-2">
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Basic Table </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Data Table </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Sortable table </a></li>
            </ul>
        </li>

        <li class=""><a href="javascript:void(0);" class="nav-link p-3 text-white sidebarlinks"  data-bs-toggle="collapse" data-bs-target="#map"><i class="fas fa-file-alt fa-lg me-3"></i> Maps <i class="fas fa-angle-left mores"></i></a>
            <ul id="map" class="collapse ps-2">
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Google Map </a></li>
                <li><a href="javascript:void(0)" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4"></i> Vector Map </a></li>
            </ul>
        </li>



    </ul>

</div>
<!-- End Left Side Bar  -->