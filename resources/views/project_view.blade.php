<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projects Single || Intexure || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<!-- master stylesheet -->
    <link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{asset('public/front/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/front/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('public/front/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('public/front/images/favicon/favicon-16x16.png')}}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>
<div class="boxed_wrapper">

<div class="preloader"></div> 

<!-- Start Top Bar style2 -->  
<section class="top-bar-style2">
    <div class="top-style2 clearfix">
        <div class="top-style2-left">
            <p><span class="icon-music"></span>We have Answers</p> 
            <ul>
                <li>+324 123 45 978</li>
                <li>support@intexure.com</li>
                <li>Mon - Sat: 9am to 6pm</li>
            </ul>   
        </div>
        <div class="top-style2-right">
            <ul class="top-right-menu">
                <li><a href="#">Partners</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">360O View</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul class="topbar-social-links">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>   
        </div>
    </div>    
</section>
<!-- End Top Bar style2 --> 

<!--Start Main Header-->
<header class="main-header header-style2 stricky">
    <div class="inner-container clearfix">
        <div class="logo-box-style2 float-left">
            <a href="{{URL::to('/')}}">
                <img src="{{asset('public/front/images/resources/logo.png')}}" alt="Awesome Logo">
            </a>    
        </div>
        <div class="main-menu-box float-right">
            <nav class="main-menu style2 clearfix">
                <div class="navbar-header clearfix">   	
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="dropdown"><a href="{{URL::to('/')}}">Home</a>
                           
                        </li>
                        <li class="dropdown"><a href="about.html">About Us</a>
                            <ul>
                                <li><a href="about.html">About Company</a></li>
                                <li><a href="faq.html">FAQ’s</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="404-page.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="services.html">Services</a>
                            <ul>
                                <li><a href="services.html">View All Services</a></li>
                                <li><a href="ser-concept-designs.html">Concept Designs</a></li>
                                <li><a href="ser-project-designs.html">Project Designs</a></li>
                                <li><a href="ser-make-overs.html">Make Overs</a></li>
                                <li><a href="ser-consulting.html">Consulting</a></li>
                                <li><a href="ser-glass-wrought.html">Glass & Wrought</a></li>
                                <li><a href="ser-space-planning.html">Space Planning</a></li>
                            </ul>
                        </li>
                        <li class="dropdown current"><a href="project.html">Projects</a>
                            <ul>
                                <li><a href="project.html">Classic View 01</a></li>
                                <li><a href="project-v2.html">Classic View 02</a></li>
                                <li><a href="project-v3.html">Modern View 01</a></li>
                                <li><a href="project-v4.html">Modern View 02</a></li>
                                <li><a href="project-v5.html">Fullwidth 01</a></li>
                                <li><a href="project-v6.html">Fulldwidth 02</a></li>
                                <li><a href="project-single.html">Projects Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog Grid View</a></li>
                                <li><a href="blog-v2.html">Blog With Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single Post</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="shop.html">Shop</a>
                            <ul>
                                <li><a href="shop.html">Our Products</a></li>
                                <li><a href="shop-single.html">Products Single</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="mainmenu-right style2">
                <div class="outer-search-box">
                    <div class="seach-toggle"><i class="fa fa-search"></i></div>
                    <ul class="search-box">
                        <li>
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="cart-box">
                    <a href="shoping-cart.html"><span class="icon-bag"><span class="number">0</span></span></a>
                </div>
                <div class="button">
                    <a class="btn-one" href="#">Get a Quote<span class="flaticon-next"></span></a>
                </div> 
            </div>  
        </div>
    </div>
</header>  
<!--End Main Header-->

<!--Start breadcrumb area-->     
<section class="breadcrumb-area style2" style="background-image: url({{URL::to($project_details->product_image)}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                       <span>Traditional</span>
                       <h1>Office Partition Walls</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li class="active">Single Project</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area--> 
 
<!--Start Project Description area-->

<!--End Project Description area-->
  
<!--Start Project Info Area-->

  <section class="project-info-area" style="background: black">
    
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="project-info-content">
                    <div class="project-info-title">
                        <h3 style="color: white">Project Info</h3>
                    </div>
                    <div class="inner-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-maps-and-location1"></span>
                                </div>
                                <div class="title">
                                    <h4>Location</h4>
                                    <span>{{$project_details->location}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-ruler"></span>
                                </div>
                                <div class="title">
                                    <h4>Square Meters</h4>
                                    <span>{{$project_details->sq_m}} m<sup>2</sup></span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Year</h4>
                                    <span>{{$project_details->year}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-price"></span>
                                </div>
                                <div class="title">
                                    <h4>Price Value</h4>
                                    <span>{{$project_details->price}} BDT</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Head</h4>
                                    <span>{{$project_details->head}}</span>
                                </div>
                            </li>
                        </ul> 
                    </div>   
                </div>
            </div>
            <div class="col-xl-6">
             <!-- <img style="height: 500px" src="{{URL::to($project_details->product_image)}}"> -->
            <div class="map-content-box">
                        <div class="sec-title">
                            <p>Project Map</p>
                            
                        </div>
                        <div class="inner paroller">
                            <img src="{{asset('public/front/images/resources/map.png')}}" alt="Map"> 
                            <div class="overlay">
                                <div class="single-location-box one wow zoomIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>    
                                    </div>
                                    <div class="location-info">
                                        <h3>Location</h3>
                                        <p>{{$project_details->location}}</p>
                                    </div>
                                </div>
                                <div class="single-location-box two wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>    
                                    </div>
                                    <div class="location-info">
                                        <h3>Location</h3>
                                        <p>{{$project_details->location}}</p>
                                    </div>
                                </div>
                                <div class="single-location-box three wow zoomIn" data-wow-delay="500ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>    
                                    </div>
                                    <div class="location-info">
                                        <h3>Location</h3>
                                        <p>{{$project_details->location}}</p>
                                    </div>
                                </div>
                                <div class="single-location-box four wow zoomIn" data-wow-delay="700ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>    
                                    </div>
                                    <div class="location-info">
                                        <h3>Location</h3>
                                        <p>{{$project_details->location}}</p>
                                    </div>
                                </div>        
                            </div> 
                        </div>  
                    </div>
            </div>
        </div>
    </div>
</section> 
    

<!--End Project Info Area-->
  
<!--Start Video Image Holder Area--> 
<section class="video-image-holder-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="video-holder-box">
                    <div class="img-holder">
                        <img src="{{URL::to($project_details->product_image)}}" alt="Awesome Image">
                        <div class="icon-holder">
                            <div class="icon">
                                <div class="inner text-center">
                                    <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="Intexure Video Gallery" href="{{$project_details->video}}">
                                        <span class="flaticon-play-button"></span>
                                    </a>
                                </div>   
                            </div>
                        </div>
                    </div>    
                </div>    
            </div>
            
        </div>
    </div>    
</section>     
<!--End Video Image Gallery Area-->      
@php
 $project = DB::table('project')->orderBy('project_id', 'desc')->get();
@endphp
<!--Start Similar projects Area-->
<section class="similar-projects-area">
    <div class="container-fluid similar-projects-content">
        <div class="similar-project-title text-center">
            <h2>Recommend projects</h2>
        </div>
        <div class="row">
            <!--Start Single Similar Project-->
            @foreach($project as $v_pro)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                 
                    <div class="img-holder">
                        <img src="{{URL::to($v_pro->product_image)}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <span>{{$v_pro->sub_title}}</span>
                        <h3><a href="{{URL::to('/project-details/'.$v_pro->project_id)}}">{{$v_pro->product_title}}</a></h3>    
                    </div>
                  
                </div>
            </div>
            @endforeach
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
          
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
           
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
          
            <!--End Single Similar Project-->
        </div>
    </div>
</section>  
<!--End Similar projects Area-->  
  
<!--Start footer area Style4-->  
<footer class="footer-area style4">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s4">
                    <div class="our-info-box">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/footer/footer-logo.png" alt="Awesome Logo">
                            </a>    
                        </div>
                        <div class="text">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the  blinded by desiremoment.</p>
                        </div>
                        <div class="follow-us-social-links clearfix">
                            <span>Follw Us On:</span>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="single-footer-widget s4">
                    <div class="title-style2">
                        <h3>Usefull Links</h3>
                    </div>
                    <div class="usefull-links">
                        <ul class="float-left">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Get a Quote</a></li>
                        </ul>
                        <ul class="float-left borders-left">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>     
                    </div> 
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                <div class="single-footer-widget pdtop50-s4">
                    <div class="title-style2">
                        <h3>Subscribe Us</h3>
                    </div>
                    <div class="subscribe-box">
                        <form class="subscribe-form" action="#">
                            <input type="email" name="email" placeholder="Your Email">
                            <button class="btn-one" type="submit">Subscribe<span class="flaticon-next"></span></button>
                        </form> 
                        <div class="text">
                            <p><span>*</span>Subscribe us and get latest news and updates</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area style4-->

<!--Start Footer Contact Info Area-->
<section class="footer-contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="footer-contact-info clearfix">
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-global"></span>
                                </div>
                                <div class="text">
                                    <p>Flat 20, Reynolds Neck, North<br> Helenaville, FV77 8WS</p>
                                </div> 
                            </div>   
                        </div>
                    </li>
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-support1"></span>
                                </div>
                                <div class="text">
                                    <p>+324 123 45 978 & 01<br> <span>Mon - Friday:</span> 9.00am to 6.00pm</p>
                                </div> 
                            </div>   
                        </div>
                    </li>
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-shipping-and-delivery"></span>
                                </div>
                                <div class="text">
                                    <p>support@intexure.com<br> intexurecareer@gmail.com</p>
                                </div> 
                            </div>   
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Footer Contact Info Area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area style3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="copyright-text text-center">
                    <p>© 2009–2019 All Rights Reserved by <a href="#">Intexure.</a> Designed By <a href="#">Themekalia.</a></p>
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End footer bottom area--> 

</div> 


<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



<script src="{{asset('public/front/js/jquery.js')}}"></script>
<script src="{{asset('public/front/js/appear.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/front/js/isotope.js')}}"></script>
<script src="{{asset('public/front/js/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('public/front/js/jquery.countTo.js')}}"></script>
<script src="{{asset('public/front/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.enllax.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('public/front/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('public/front/js/owl.js')}}"></script>
<script src="{{asset('public/front/js/validation.js')}}"></script>
<script src="{{asset('public/front/js/wow.js')}}"></script>

<script src="{{asset('public/front/js/map-helper.js')}}"></script>

<script src="{{asset('public/front/assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('public/front/assets/timepicker/timePicker.js')}}"></script>                       
<script src="{{asset('public/front/assets/html5lightbox/html5lightbox.js')}}"></script>

<!-- thm custom script -->
<script src="{{asset('public/front/js/custom.js')}}"></script>



</body>
</html>