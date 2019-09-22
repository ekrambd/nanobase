<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog With Sidebar || Intexure || Responsive HTML 5 Template</title>

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

<!-- End Top Bar style2 --> 

<!--Start Main Header-->
<header class="main-header header-style2 blog-single stricky">
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
                            
                        </li>
                       
                        <li class="dropdown"><a href="{{URL::to('/all-project')}}">Projects</a>
                           
                        </li>
                        <li class="dropdown current"><a href="{{URL::to('/all-blog_show')}}">Blog</a>
                            
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

<!--Start Single Post Info Area-->
<section class="single-post-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-post-info-content text-center">
                    <div class="meta-box">
                        <ul class="meta-info">
                            <li>By <a href="#">{{$blog_details->author_name}}</a></li>
                            
                        </ul>  
                    </div>
                    <h1 class="blog-title">{{$blog_details->blog_title}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>      
<!--End Single Post Info Area-->      

<!--Start blog single area-->
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
             <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                        <div class="main-image-box">
                            <img src="{{URL::to($blog_details->blog_image)}}" alt="Awesome Image">
                        </div>
                        <div class="top-text-box">
                            <p>{{$blog_details->blog_long_description}}</p>   
                        </div>
                      
                      
                      
                        
                      
                        
                        <div class="tag-with-social-links-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner-content clearfix">
                                        
                                        <div class="social-links-box pull-right">
                                            <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Share this post:</p> 
                                            <ul class="sociallinks fix">
                                                <li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                               
                                            </ul>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!--Start prev next option-->
                      
                        <!--End prev next option-->
                    </div>
                          
                  
                    
                  
                   
                    
                </div>
            </div>
            
            <!--Start sidebar Wrapper-->
            <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                <div class="sidebar-wrapper">
                    <div class="sidebar-search-box">
                        <form class="search-form" action="#">
                            <input placeholder="Your Keyword..." type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!--Start single sidebar-->
                    
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    @php
                     $recent_post = DB::table('blog')->orderBy('blog_id', 'desc')->get();
                    @endphp 
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <div class="title">Recent Post</div>
                        </div>
                        <ul class="recent-post">
                         @foreach($recent_post as $v_post)
                            <li>
                                <div class="img-holder">
                                    <img src="{{URL::to($v_post->blog_image)}}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    
                                    <h5 class="post-title"><a href="{{URL::to('/blog-details/'.$v_post->blog_id)}}">{{$v_post->blog_title}}</a></h5>
                                </div>
                            </li>
                          @endforeach
                           
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                   
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->    
                    
                    <!--End single-sidebar-->
                    <!--Start single-sidebar-->
                     
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->
            
            
        </div>
    </div>
    
</section> 
<!--End blog single area-->                                                                        

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

<script src="{{asset('public/front/assets/jquery-ui-1.11.4/jquery-ui.js')}}"></script>
<script src="{{asset('public/front/assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('public/front/assets/timepicker/timePicker.js')}}"></script>                       
<script src="{{asset('public/front/assets/html5lightbox/html5lightbox.js')}}"></script>

<!-- thm custom script -->
<script src="{{asset('public/front/js/custom.js')}}"></script>



</body>
</html>