<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projects Classic View V1 || Intexure || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<!-- master stylesheet -->
    <link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{asset('public/front/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
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
                <a href="index.html">
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
    @php
     $bg = DB::table('bg')->get();
    @endphp  
    @foreach($bg as $v_bg)  
    <section class="breadcrumb-area style2" style="background-image: url({{URL::to($v_bg->bg_image)}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                           <span>Our Projects</span>
                           <h1>More than 2300 Projects</h1>
                        </div>
    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!--End breadcrumb area-->                       

    <!--Start Main project area--> 
    <section class="main-project-area">
        <div class="container">
            <ul class="project-filter post-filter has-dynamic-filters-counter">
                <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
                
            </ul>
        @php
         $project = DB::table('project')->paginate(9);
        @endphp
            <div class="row filter-layout masonary-layout">
                <!--Start single project item-->
            @foreach($project as $v_project)
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                    <div class="single-project-style4">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{URL::to($v_project->product_image)}}" width="100px" height="100px" alt="Awesome Image">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="link">
                                            <a href="project-single.html"><span class="icon-out"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="title">
                                    <span>{{$v_project->sub_title}}</span>
                                    <h3><a href="{{URL::to('/project-details/'.$v_project->project_id)}}">{{$v_project->product_title}}</a></h3>
                                </div>  
                            </div>

                        </div>   
                    </div>

                </div>
              @endforeach

                <!--End single project item-->
                <!--Start single project item-->
               

             
                <!--End single project item-->
                <!--Start single project item-->
               
                <!--End single project item-->
                
                <!--Start single project item-->
              
                <!--End single project item-->
                <!--Start single project item-->
              
                <!--End single project item-->
                <!--Start single project item-->
             
                <!--End single project item-->
                
                <!--Start single project item-->
                
                <!--End single project item-->
                <!--Start single project item-->
                
                <!--End single project item-->
                <!--Start single project item-->
               
                <!--End single project item-->
            </div>
       {{$project->links()}}  
        </div>
    </section> 

    <!--End Main project area-->  
  
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
                                    <img src="{{asset('public/front/images/footer/footer-logo.png')}}" alt="Awesome Logo">
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