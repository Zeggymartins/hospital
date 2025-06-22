        <!-- sidebar-wrapper -->
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand">
                    <a href="{{ route('dashboard') }}">
                        <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-dark.png" height="22" class="logo-light-mode" alt="">
                        <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                        <span class="sidebar-colored">
                            <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-light.png" height="22" alt="">
                        </span>
                    </a>
                </div>
    
                <ul class="sidebar-menu">
                    <li><a href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 me-2 d-inline-block"></i>Dashboard</a></li>
                
                    <li><a href="{{ route('appointments.list') }}"><i class="bi bi-calendar-check me-2 d-inline-block"></i>Appointment</a></li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-person-badge me-2 d-inline-block"></i>Doctors</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Doctors</a></li>
                                <li><a href="#">Add Doctor</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-people me-2 d-inline-block"></i>Patients</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">All Patients</a></li>
                                <li><a href="#">Add Patients</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-grid me-2 d-inline-block"></i>Apps</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Chat</a></li>
                                <li><a href="#">Email</a></li>
                                <li><a href="#">Calendar</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-bag-check me-2 d-inline-block"></i>Pharmacy</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Shop Detail</a></li>
                                <li><a href="#">Shopcart</a></li>
                                <li><a href="#">Checkout</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-journal-text me-2 d-inline-block"></i>Blogs</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Blog Detail</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-files me-2 d-inline-block"></i>Pages</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Invoice List</a></li>
                                <li><a href="#">Invoice</a></li>
                                <li><a href="#">Terms & Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Blank Page</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-envelope-paper me-2 d-inline-block"></i>Email Template</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Confirmation</a></li>
                                <li><a href="#">Reset Password</a></li>
                                <li><a href="#">Alert</a></li>
                                <li><a href="#">Invoice</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-shield-lock me-2 d-inline-block"></i>Authentication</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Signup</a></li>
                                <li><a href="#">Forgot Password</a></li>
                                <li><a href="#">Lock Screen</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-puzzle me-2 d-inline-block"></i>UI Components</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Badges</a></li>
                                <li><a href="#">Alert</a></li>
                                <li><a href="#">Dropdowns</a></li>
                                <li><a href="#">Typography</a></li>
                                <li><a href="#">Background</a></li>
                                <li><a href="#">Text Color</a></li>
                                <li><a href="#">Tooltips & Popovers</a></li>
                                <li><a href="#">Shadows</a></li>
                                <li><a href="#">Border</a></li>
                                <li><a href="#">Form Elements</a></li>
                                <li><a href="#">Pagination</a></li>
                                <li><a href="#">Avatars</a></li>
                                <li><a href="#">Modals</a></li>
                                <li><a href="#">Icons</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="bi bi-stars me-2 d-inline-block"></i>Miscellaneous</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">Comingsoon</a></li>
                                <li><a href="#">Maintenance</a></li>
                                <li><a href="#">404 !</a></li>
                                <li><a href="#">Thank you...!</a></li>
                            </ul>
                        </div>
                    </li>
                
                    <li><a href="#" target="_blank"><i class="bi bi-globe2 me-2 d-inline-block"></i>Landing page</a></li>
                </ul>
                
                <!-- sidebar-menu  -->
            </div>
            <!-- Sidebar Footer -->
            <ul class="sidebar-footer list-unstyled mb-0">
                <li class="list-inline-item mb-0 ms-1">
                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                        <i class="bi bi-comment"></i>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Footer -->
        </nav>
        <!-- sidebar-wrapper  -->
        <!-- sidebar-wrapper  -->