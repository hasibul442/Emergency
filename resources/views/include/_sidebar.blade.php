<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <h2>Emergency</h2>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class='sidebar-title'>Main Menu</li>



                <li class="sidebar-item ">
                    <a href="{{route('index')}}" class='sidebar-link'>
                        <i class="fab fa-accusoft" style="color: #7400b8"></i>
                        <span>Dashboard</span>
                    </a>
                </li>




                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i  class="fad fa-users-cog" style="color: #1d3557"></i>
                        <span>Users</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="#"><i class="fad fa-eye text-primary"></i>   View</a>
                        </li>
                        <li>
                            <a href="{{route('doctors.create')}}"><i class="fad fa-plus-circle text-danger"></i>   Create</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-edit text-warning"></i>   Update</a>
                        </li>
                        
                    </ul>

                </li>
                
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fad fa-prescription-bottle-alt" style="color: #ef233c"></i>
                        <span>Medicine</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="{{route('medicines.index')}}"><i class="fad fa-eye text-primary"></i>   View</a>
                        </li>
                        <li>
                            <a href="{{route('medicines.create')}}"><i class="fad fa-plus-circle text-danger"></i>   Add</a>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fad fa-ambulance" style="color: #5f0f40"></i>
                        <span>Ambulance</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="{{route('ambulances.index')}}"><i class="fad fa-eye text-primary"></i>   View</a>
                        </li>
                        <li>
                            <a href="{{route('ambulances.create')}}"><i class="fad fa-plus-circle text-danger"></i>   Create</a>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="far fa-hospitals" style="color: #2d6a4f"></i>
                        <span>Hospital</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="#"><i class="fad fa-eye text-primary"></i>   View</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-plus-circle text-danger"></i>   Create</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-edit text-warning"></i>   Update</a>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fad fa-user-md" style="color: #fb5607"></i>
                        <span>Doctors</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="{{route('doctors.index')}}"><i class="fad fa-eye text-primary"></i>   View</a>
                        </li>
                        <li>
                            <a href="{{route('doctors.create')}}"><i class="fad fa-plus-circle text-danger"></i>   Create</a>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fad fa-user-circle" style="color: #9c6644"></i>
                        <span>Employees</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="#"><i class="fad fa-eye text-primary"></i>   View</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-plus-circle text-danger"></i>   Create</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-edit text-warning"></i>   Update</a>
                        </li>
                    </ul>

                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i  class="fad fa-users-cog" style="color: #1d3557"></i>
                        <span>Setting</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="{{route('setting.company')}}"><i class="fad fa-eye text-primary"></i>   Pharmaceutical Company</a>
                        </li>
                        <li>
                            <a href="{{route('setting.medicine_categories')}}"><i class="fad fa-align-left" style="color: #e63946"></i>   Medicine Cetagory</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-edit text-warning"></i>   ####</a>
                        </li>
                        
                    </ul>

                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i class="fas fa-arrow-left"></i></button>
    </div>
</div>