
<!doctype html>
<html lang="en" dir="ltr">

    
<head>
        <meta charset="utf-8" />
        <title>Doctris - Doctor Appointment Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="Version" content="v1.4.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="https://shreethemes.in/doctris/layouts/assets/images/favicon.ico">
        
        <!-- Css -->
        <link href="https://shreethemes.in/doctris/layouts/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="https://shreethemes.in/doctris/layouts/assets/libs/js-datepicker/datepicker.min.css" rel="stylesheet">
        <link href="https://shreethemes.in/doctris/layouts/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="https://shreethemes.in/doctris/layouts/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- CSS (in <head>) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">




        <!-- Style Css-->
        <link href="https://shreethemes.in/doctris/layouts/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="navigation sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.html">
                        <span class="logo-light-mode">
                            <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-dark.png" class="l-dark" height="22" alt="">
                            <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-light.png" class="l-light" height="22" alt="">
                        </span>
                        <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                    </a>
                </div>
                <!-- End Logo container-->
        
                <!-- Start Mobile Toggle -->
                {{-- <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div> --}}
                <!-- End Mobile Toggle -->

             
            </div>
        </header><!--end header-->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100 min-vh-40" id="home" style="background-size: cover; background-position: center;">
            <div class="bg-overlay bg-overlay-dark"></div>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-xl-10">
                        <div class="heading-title text-center">
                            <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-icon.png" height="50" alt="">
                            <h4 class="heading fw-bold text-white title-dark mt-3 mb-4">Booking Your Appointments</h4>
                            <p class="para-desc mx-auto text-white-50 mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            
                          
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex">
                            <i class="bi bi-bullseye h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Our Mission</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="d-flex">
                            <i class="bi bi-eye h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Our Vision</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="d-flex">
                            <i class="bi bi-person-bounding-box h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Who We Are ?</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
                <!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/doc6.jpg') }}" class="img-fluid" alt="" height="200px">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox video-play-icon">
                                    <i class="bi bi-play-fill text-primary rounded-circle shadow"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-5">
                            <span class="badge rounded-pill bg-soft-primary">About Doctris</span>
                            <h4 class="title mt-3 mb-4">Good Services And Better <br> Health By Our Specialists</h4>
                            <p class="para-desc text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            <p class="para-desc text-muted">Healthcare services are best delivered by qualified healthcare personnel. These care providers are hidden away from sight because they are not allowed to advertise. At Healthxellent International Ltd, we have it our duty to locate and identify where these care can be obtained. We help to connect healthcare seekers to healthcare providers, saving our clients the hassles of the search and time.We help to monitor care delivery to ensure that our clients get quality care too.
                                We are your personal healthcare managers.</p>
                            
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <span class="badge rounded-pill bg-soft-primary mb-3">Departments</span>
                            <h4 class="title mb-4">Our Medical Services</h4>
                            <p class="text-muted mx-auto para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-eye h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Eye Care</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-emoji-smile h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Psychotherapy</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-heart-pulse h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Primary Care</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-capsule-pill h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Dental Care</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-search h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Orthopedic</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-activity h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Cardiology</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-gender-female h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Gynecology</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <i class="bi bi-diagram-3 h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="departments.html" class="title text-dark h5">Neurology</a>
                                <p class="text-muted mt-3">There is now an abundance of readable dummy texts required purely to fill a space.</p>
                                <a href="departments.html" class="link">Read More <i class="bi bi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                ><!--end row-->
            </div><!--end container-->
            
            <!-- Cta Start -->
            <div class="position-relative py-5 mt-5" style="min-height: 450px;">
                <div style="background: url('{{ asset('assets/images/doc5.jpg') }}') center center no-repeat; background-size: cover; position: absolute; top: 0; right: 0; bottom: 0; left: 0; border-radius: .5rem;"></div>
                <div class="position-relative container">
                    <div class="row">
                        <div class="offset-lg-8 offset-md-6 col-lg-4 col-md-6">
                            <!-- Optional content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->

       
            
        <!-- Start -->
        <section class="section">
           

            <div class="container mt-50 mt-60">
                <div class="row align-items-lg-end">
                    <div class="col-md-6">
                        <div class="me-xl-3">
                            <div class="section-title mb-4 pb-2">
                                <i class="bi bi-calendar-check text-primary h2"></i>
                                <h4 class="title mb-4">Book Your Appointment</h4>
                                <p class="text-muted para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            </div>
                    
                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden">
                                <i class="bi bi-bar-chart-line icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Success Of Treatment</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="bi bi-bar-chart-line"></i>
                                </div>
                            </div>
                    
                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                                <i class="bi bi-cpu icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Modern Technology</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="bi bi-cpu"></i>
                                </div>
                            </div>
                    
                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                                <i class="bi bi-patch-check-fill icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Certified Doctors</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="bi bi-patch-check-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 rounded shadow p-4 ms-xl-3">
                            <div class="custom-form">
                                <form action="{{ route('appointments.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                                <input name="name" id="name1" type="text" class="form-control" placeholder="Patient Name :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Age <span class="text-danger">*</span></label>
                                                <input name="age" id="name1" type="number" class="form-control" placeholder="Patient Age :">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Brief health history <span class="text-danger">*</span></label>
                                                <textarea name="health_history" id="comments" rows="6" class="form-control" placeholder="Your Message :"></textarea>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gender</label>
                                                <select class="form-select form-control" name="gender">
                                                    <option selected >Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                                <input name="phone" id="phone" type="tel" class="form-control" placeholder="Your Phone :">
                                            </div> 
                                        </div><!--end col-->


                                    

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Complaints <span class="text-danger">*</span></label>
                                                <textarea name="complaints" id="comments" rows="4" class="form-control" placeholder="Your Complaint :"></textarea>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Book An Appointment</button>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                    
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif<!--end row-->
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <footer class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-light.png" height="22" alt="">
                        </a>
                        <p class="mt-4 me-xl-5">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                    </div><!--end col-->

                    <div class="col-xl-7 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="aboutus.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> About us</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Services</a></li>
                                    <li><a href="doctor-team-two.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Team</a></li>
                                    <li><a href="blog-detail.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Project</a></li>
                                    <li><a href="blogs.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Blog</a></li>
                                    <li><a href="login.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->
                    
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Departments</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Eye Care</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Psychotherapy</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Dental Care</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Orthopedic</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Cardiology</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Gynecology</a></li>
                                    <li><a href="departments.html" class="text-foot"><i class="bi bi-chevron-right me-1"></i> Neurology</a></li>
                                </ul>
                            </div><!--end col-->
                    
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Contact us</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-envelope icon-sm text-foot align-middle"></i>
                                        <a href="mailto:contact@example.com" class="text-foot ms-2">contact@example.com</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-telephone icon-sm text-foot align-middle"></i>
                                        <a href="tel:+152534-468-854" class="text-foot ms-2">+152 534-468-854</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-geo-alt icon-sm text-foot align-middle"></i>
                                        <a href="javascript:void(0)" class="video-play-icon text-foot ms-2">View on Google map</a>
                                    </li>
                                </ul>

                                <ul class="list-unstyled social-icon footer-social mb-0 mt-4">
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i class="bi bi-facebook icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i class="bi bi-instagram icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i class="bi bi-twitter icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i class="bi bi-linkedin icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-5">
                <div class="pt-4 footer-bar">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start text-center">
                                <p class="mb-0"><script>document.write(new Date().getFullYear())</script> © Doctris. Design with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div>
                        </div><!--end col-->

                        <div class="col-sm-6 mt-4 mt-sm-0">
                            <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                                <li class="list-inline-item"><a href="terms.html" class="text-foot me-2">Terms</a></li>
                                <li class="list-inline-item"><a href="privacy.html" class="text-foot me-2">Privacy</a></li>
                                <li class="list-inline-item"><a href="aboutus.html" class="text-foot me-2">About</a></li>
                                <li class="list-inline-item"><a href="contact.html" class="text-foot me-2">Contact</a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5 rounded-pill text-center bg-primary justify-content-center align-items-center"><i class="bi bi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-body d-flex align-items-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h4>Search now.....</h4>
                                <div class="subcribe-form mt-4">
                                    <form>
                                        <div class="mb-0">
                                            <input type="text" id="help" name="name" class="border rounded-pill" required="" placeholder="Search">
                                            <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-dark.png" height="22" class="light-version" alt="">
                    <img src="https://shreethemes.in/doctris/layouts/assets/images/logo-light.png" height="22" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- Style switcher -->
                        <div id="style-switcher">
                            <div>
                                <ul class="text-center style-switcher list-unstyled mb-0">
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="https://shreethemes.in/doctris/layouts/admin/index.html" target="_blank" class="mt-4"><img src="https://shreethemes.in/doctris/layouts/assets/images/layouts/light-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Admin Dashboard</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end Style switcher -->
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/doctris-template" target="_blank" class="rounded"><i class="bi bi-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="bi bi-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="bi bi-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="bi bi-facebook align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="bi bi-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://x.com/shreethemes" target="_blank" class="rounded"><i class="bi bi-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="bi bi-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank" class="rounded"><i class="bi bi-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->

                
        <!-- javascript -->
        <script src="https://shreethemes.in/doctris/layouts/assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="https://shreethemes.in/doctris/layouts/assets/js/easy_background.js"></script>
        <script src="https://shreethemes.in/doctris/layouts/assets/libs/js-datepicker/datepicker.min.js"></script>
        <script src="https://shreethemes.in/doctris/layouts/assets/libs/tobii/js/tobii.min.js"></script>
        <!-- Main Js -->
        <!-- JAVASCRIPT -->
        <script src="https://shreethemes.in/doctris/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://shreethemes.in/doctris/layouts/assets/js/plugins.init.js"></script>
        <script src="https://shreethemes.in/doctris/layouts/assets/js/app.js"></script>
        <!-- JS (before </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            easy_background("#home",
                {
                    slide: ["{{ asset('assets/images/doc1.jpg') }}", "{{ asset('assets/images/doc2.jpg') }}", "{{ asset('assets/images/doc7.jpg') }}"],
                    delay: [3000, 3000, 3000]
                }
            );
        </script>
       @if (session('success'))
       <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
           <div class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="d-flex">
                   <div class="toast-body">
                       {{ session('success') }}
                   </div>
                   <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
           </div>
       </div>
   @endif
   
    


    </body>


</html>