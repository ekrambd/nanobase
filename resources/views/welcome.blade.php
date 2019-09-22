<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home One || Intexure || Responsive HTML 5 Template</title>

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

    <!-- Start Top Bar style1 -->  
    <section class="top-bar-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="top-style1 clearfix">
                        <p>Intexure Inspiring Interiors, Basesd On United States... <a href="#">Get Approximate Estimation.</a></p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar style1 --> 
     
    <!--Start Main Header-->
    <header class="main-header header-style1">
        
        <div class="header-upper-style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-container clearfix">
                            <div class="logo-box-style1 float-left">
                                <a href="index.html">
                                    <img src="{{asset('public/front/images/resources/logo.png')}}" alt="Awesome Logo">
                                </a>    
                            </div>
                            <div class="main-menu-box float-right">
                                <nav class="main-menu clearfix">
                                    <div class="navbar-header clearfix">    
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown current"><a href="{{URL::to('/')}}">Home</a>
                                               
                                            </li>
                                            
                                           
                                            <li class="dropdown"><a href="{{URL::to('/show-project')}}">Projects</a>
                                                
                                            </li>
                                            <li class="dropdown"><a href="{{URL::to('/all-blog_show')}}">Blog</a>
                                                
                                            </li>
                                           
                                            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                               
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        
        <div class="header-lower-style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <ul class="header-contact-info float-left">
                                <li>
                                    <div class="single-item">
                                        <div class="icon">
                                            <span class="icon-maps-and-location"></span>  
                                        </div>
                                    @php
                                     $address = DB::table('address')->get();
                                    @endphp
                                    @foreach($address as $v_address)
                                        <div class="text">
                                            <h3>{{$v_address->address_title}}</h3>
                                            <p>{{$v_address->address_details}}</p>    
                                        </div>
                                    @endforeach
                                    </div>
                                </li>
                                <li>
                                @php
                                 $phone_schedule = DB::table('phone_schedule')->get();
                                @endphp
                                @foreach($phone_schedule as $row)
                                    <div class="single-item">
                                        <div class="icon">
                                            <span class="icon-phone"></span>  
                                        </div>
                                        <div class="text">
                                            <h3>{{$row->phone_number}}</h3>
                                            <p>{{$row->schedule}}</p>    
                                        </div>
                                    </div>
                                @endforeach
                                </li>
                                <li>
                                 @php
                                  $address = DB::table('address')->get();
                                 @endphp
                                    <div class="single-item">
                                        <div class="icon">
                                            <span class="icon-mail"></span>  
                                        </div>
                                        <div class="text">
                                         @foreach($address as $v_ad)
                                            <h3>{{$v_ad->email_address}}</h3>
                                            <p>Get a Free Quote</p>   
                                         @endforeach 
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="header-social-links-style1 float-right">
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                </li>
                                <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
    </header>  
    <!--End Main Header-->
         
    <!--Main Slider-->
   @php 
    $slider_1 = DB::table('slider-1')->get();
   @endphp
    
    <section class="main-slider">
         
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
           
                <ul>
                @foreach($slider_1 as $v_sli)
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="image" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to($v_sli->slider_image)}}"> 
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['800','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-160','-100','-110','-105']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    {{$v_sli->slider_title}}
                                </div>    
                            </div>
                        </div>
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['800','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-75','-10','-25','-30']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="text">{{$v_sli->slider_description}}</div>    
                            </div>
                        </div>
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['800','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['25','90','100','85']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            
                        </div>
                           
                    </li>
                @endforeach

                @php
                 $slider_2 = DB::table('slider-2')->get();
                @endphp
                @foreach($slider_2 as $v_slider_2)
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v1-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to($v_slider_2->slider_two_image)}}">
                        
                
                       <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-160','-100','-110','-105']"
                        data-x="['right','right','right','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    {{$v_slider_2->slider_two_title}}
                                </div>    
                            </div>
                        </div>
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-75','-10','-25','-30']"
                        data-x="['right','right','right','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="text">{{$v_slider_2->slider_two_description}}</div>    
                            </div>
                        </div>
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['25','90','100','85']"
                        data-x="['right','right','right','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            
                        </div>
                    </li>
                @endforeach
                @php
                 $slider_3 = DB::table('slider-3')->get();
                @endphp
                @foreach($slider_3 as $v_slider_3)
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v1-3.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{URL::to($v_slider_3->slider_three_image)}}"> 

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['800','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-160','-100','-110','-105']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    {{$v_slider_3->slider_three_title}}
                                </div>    
                            </div>
                        </div>
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['800','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-75','-10','-25','-30']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="text">{{$v_slider_3->slider_three_description}}</div>    
                            </div>
                        </div>
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['800','800','700','500']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['25','90','100','85']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            
                        </div>  
                    </li>
                   @endforeach
                    
                </ul>
                
            </div>
        </div>
    
    </section>
    
    <!--End Main Slider-->
    
    <!--Start Highlights Area-->
    <section class="highlights-area">
        <div class="container">
            <div class="row">
                <!--Start single highlight box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                        <div class="icon-holder">
                            <span class="icon-concept"></span>
                        </div> 
                        <div class="inner-content">
                            <div class="text">
                                <h3>Concept Designs</h3>
                                <p>Indignation dislike  who are beguile works & demoralized the charms.</p>    
                            </div>
                           
                        </div>   
                    </div>
                </div>
                <!--End single highlight box-->
                <!--Start single highlight box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="icon-holder">
                            <span class="icon-scheme"></span>
                        </div> 
                        <div class="inner-content">
                            <div class="text">
                                <h3>Project Designs</h3>
                                <p>Our power of choice is untrammelled and all nothing prevents best.</p>    
                            </div>
                            
                        </div>   
                    </div>
                </div>
                <!--End single highlight box-->
                <!--Start single highlight box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="icon-holder">
                            <span class="icon-cupboard"></span>
                        </div> 
                        <div class="inner-content">
                            <div class="text">
                                <h3>Make Overs</h3>
                                <p>Every pleasure is to be welcomed & every circumstances & owing power.</p>    
                            </div>
                            
                        </div>   
                    </div>
                </div>
                <!--End single highlight box-->
            </div>
        </div>
    </section>
    <!--End Highlights Area-->
    @php
     
     $ceo = DB::table('ceo')->get();

    @endphp
    <!--Start about area-->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about-image-box">
                        <div class="inner-box">
                          @foreach($ceo as $v_ceo)
                            
                            <div class="overlay">
                                <div class="box">
                                    <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <img src="{{URL::to($v_ceo->ceo_image)}}" alt="Home Icon">    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <!-- <p>{{$v_ceo->ceo_short_description}}</p> -->
                            <h3>{{$v_ceo->ceo_name}}, <span>CEO & Founder</span></h3>
                         @endforeach
                        </div>    
                    </div>   
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about-text">
                      @foreach($ceo as $seo)
                        <div class="sec-title">
                            <p>About CEO</p>
                            <div class="title">{{$seo->ceo_name}}<br> CEO of Nanobase </div>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p>{{$seo->ceo_short_description}}</p>
                     @endforeach
                            </div>
                            @php
                             $goal = DB::table('goal')->get();
                            @endphp
                            
                            <div class="about-carousel-box owl-carousel owl-theme">
                                <!--Start Single Box-->
                                <div class="single-box">
                                    <div class="icon-holder">
                                        <span class="icon-target"></span>
                                    </div>
                                    <div class="text-holder">
                                     @foreach($goal as $v_goal)
                                        <h3>{{$v_goal->goal_title}}</h3>
                                        <p>{{$v_goal->goal_description}}</p>
                                    @endforeach
                                    </div>
                                </div>
                                <!--End Single Box-->
                                <!--Start Single Box-->
                               
                                <!--End Single Box-->
                                <!--Start Single Box-->
                                
                                <!--End Single Box-->
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div> 
           
        </div>    
    </section>
    <!--End about Area-->
    
    <!--Start Working Area-->
    <section class="working-area" style="background-image:url(images/parallax-background/working-bg.jpg);">
        <div class="container">
            <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                <p>Service category</p>
                <div class="title clr-white">Our <span>Service Category</span></div>
                
            </div>
            <div class="row">
                <!--Start Single Working Box-->
                @php
                 $service = DB::table('services')->get();
                @endphp
                 @foreach($service as $v_service)
                <div class="col-xl-4 col-lg-4">
                
                    <div class="single-working-box wow fadeInDown" data-wow-delay="0ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img style="height: 250px; " src="{{URL::to($v_service->service_image)}}" alt="Awesome Image">
                                <div class="overlay-style-one"></div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="plus-icon-box"><span class="icon-plus"></span></div>
                            <div class="outer-box">
                                <div class="icon">
                                    <div class="inner">
                                        <div class="box">
                                            <span class="icon-architecture-and-city1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3>{{$v_service->service_title}}</h3>
                                    <p>{{$v_service->short_description}}</p>
                                </div>
                            </div>
                        </div>        
                    </div>
                 
                </div>
                @endforeach
                <!--End Single Working Box-->
                <!--Start Single Working Box-->
            
                <!--End Single Working Box-->
                <!--Start Single Working Box-->
               
                <!--End Single Working Box-->
            </div>
        </div>
    </section>
    <!--End Working Area-->
    
    <!--Start Recently Project Area-->
    <section class="recently-project-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title float-left">
                        <p>Projects</p>
                        <div class="title">Recently Completed <span>Works</span></div>
                    </div>
                    <div class="more-project-button float-right">
                        <a class="btn-two" href="{{URL::to('/all-project')}}">More Projects<span class="flaticon-next"></span></a>    
                    </div>
                </div>
            </div>
        </div>
        @php
          $recent_project = DB::table('project')->orderBy('project_id', 'desc')->get();
        @endphp
        <div class="container-fluid">
            <div class="project-carousel owl-carousel owl-theme">
                <!--Start single project style1-->
              @foreach($recent_project as $v_pro)
                <div class="single-project-style1">
                    <div class="img-holder">
                        <img src="{{URL::to($v_pro->product_image)}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="link-box">
                                    <a class="btn-one" href="#">View Project<span class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <span>{{$v_pro->sub_title}}</span>
                            <h3>{{$v_pro->product_title}}</h3>
                        </div>
                    </div>    
                </div>
            @endforeach
                <!--End single project style1-->
                <!--Start single project style1-->
               
                <!--End single project style1-->
                <!--Start single project style1-->
                
                <!--End single project style1-->
                <!--Start single project style1-->
               
                <!--End single project style1-->
                <!--Start single project style1-->
              
                <!--End single project style1-->
                
                <!--Start single project style1-->
               
                <!--End single project style1-->
                <!--Start single project style1-->
               
                <!--End single project style1-->
                <!--Start single project style1-->
                
                <!--End single project style1-->
                <!--Start single project style1-->
              
                <!--End single project style1-->
                <!--Start single project style1-->
               
                <!--End single project style1-->
                
                <!--Start single project style1-->
               
                <!--End single project style1-->
                <!--Start single project style1-->
              
                <!--End single project style1-->
                <!--Start single project style1-->
              
                <!--End single project style1-->
                <!--Start single project style1-->
              
                <!--End single project style1-->
                <!--Start single project style1-->
              
                <!--End single project style1-->
                
            </div>
        </div>    
    </section>
    <!--End Recently Project Area-->
    
    <!--Start Working Process Area-->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>To Do good design</p>
                <div class="title">Our Working <span>process</span></div>
            </div>
            <div class="row">
                <!--Start Single Working Process-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="single-working-process text-center">
                        <div class="top-box"><span>01</span></div>
                        <div class="inner">
                            <h3>Idea & Design</h3>
                            <p>With righteous indignation and works off beguiled demoralized charm.</p>
                            <div class="icon-holder">
                                <span class="icon-productive"></span>
                            </div>
                        </div>
                    </div> 
                </div>
                <!--End Single Working Process-->
                <!--Start Single Working Process-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="single-working-process text-center">
                        <div class="top-box"><span>02</span></div>
                        <div class="inner">
                            <h3>Specification</h3>
                            <p>Our power of choice is untrammelled and when nothing prevents.</p>
                            <div class="icon-holder">
                                <span class="icon-document"></span>
                            </div>
                        </div>
                    </div> 
                </div>
                <!--End Single Working Process-->
                <!--Start Single Working Process-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="single-working-process text-center">
                        <div class="top-box"><span>03</span></div>
                        <div class="inner">
                            <h3>Execution</h3>
                            <p>Wing to the claims of duty the obligations will frequently occur.</p>
                            <div class="icon-holder">
                                <span class="icon-kitchen"></span>
                            </div>
                        </div>
                    </div> 
                </div>
                <!--End Single Working Process-->
            </div>
        </div>
    </section>
    <!--End Working Process Area-->
    
    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content flex-box-two fix">
                        <div class="title float-left">
                            <h3>Wanna Work With Our Profesional Team? Make an Appointment.</h3>
                        </div>
                        <div class="button float-right">
                            <a class="btn-one" href="#">Make an Appointment<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>           
    <!--End slogan area-->     

    <!--Start Testimonial Area-->
    <section class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title float-left">
                        <p>Testimonials</p>
                        <div class="title">Our Customer <span>Words</span></div>
                    </div>
                    <div class="more-reviews-button float-right">
                        <a class="btn-two" href="#">More Reviews<span class="flaticon-next"></span></a>    
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start Single Testimonial Item-->
               @php
                $team = DB::table('teams')->get();
               @endphp
                @foreach($team as $v_team)
                <div class="col-xl-4 col-lg-4">
                   
                    <div class="single-testimonial-item text-center">
                        <div class="quote-icon">
                            <span class="icon-quote1"></span>    
                        </div>
                        
                        <div class="inner-content">
                            <div class="client-info">
                                 
                                <h3>{{$v_team->name}}</h3>
                                <span>{{$v_team->location}}</span>
                            </div>
                            <div class="img-box">
                                <img src="{{URL::to($v_team->photo)}}" alt="Awesome Image">

                            </div>
                            <div class="text-box">
                                <p>{{$v_team->details}}</p>
                            </div>
                             
                        </div> 
                        
                      
                    </div>
               
                </div>
                 @endforeach
                <!--End Single Testimonial Item-->
                <!--Start Single Testimonial Item-->
               
                <!--End Single Testimonial Item-->  
                <!--Start Single Testimonial Item-->
               
                <!--End Single Testimonial Item-->      
            </div>
        </div>
    </section>
    <!--End Testimonial Area-->   
     @php
      $const = DB::table('address')
         ->join('phone_schedule', 'address.address_id', 'phone_schedule.phone_id')
         ->select('address.*', 'phone_schedule.phone_number')
      ->get();
     @endphp
    <!--Start appointment Area-->
    <section class="appointment-area" style="background-image:url(images/resources/appointment-bg.jpg);">
        <div class="container">
            <div class="row">
             
                <div class="col-xl-6 col-lg-6">
                   
                    <div class="map-content-box">
                        <div class="sec-title">
                            <p>Contact Details</p>
                            <div class="title">How Can We <span>Help You?</span></div>
                        </div>
                        <div class="inner paroller">
                            <img src="{{asset('public/front/images/resources/map.png')}}" alt="Map"> 
                            <div class="overlay">
                                <div class="single-location-box one wow zoomIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>    
                                    </div>
                                    <div class="location-info">
                                     @foreach($const as $v_const)
                                        <h3>Bangladesh</h3>
                                        <p>{{$v_const->address_details}}</p>
                                        <p>{{$v_const->email_address}}</p>
                                        <p>{{$v_const->phone_number}}</p>
                                     @endforeach 

                                    </div>

                                </div>
    
                                      
                            </div> 
                        </div>  
                    </div> 
                     
                </div>
                

              
               
                

                <div class="col-xl-6 col-lg-6">
                   <div class="appointment-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <div class="title-box">
                           <h2>Make Appointment</h2>
                           <span>Leave your information here and get reply from our expert in 24 hours, don’t hesitate to ask.</span>
                       </div>
                       <div class="appointment">
                            <form action="{{URL::to('/add-appoitment')}}" method="post" class="appointment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="name" value="" placeholder="Name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="email" name="email" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="phone_number" value="" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                </div>

                                

                                @php
                                 $service = DB::table('services')->get();
                                @endphp
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <select class="selectpicker" name="service_id" data-width="100%">
                                             @foreach($service as $v_service)
                                                
                                                <option value="{{$v_service->service_id}}">{{$v_service->service_title}}</option>
                                             @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>                   
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box"> 
                                            <button class="btn-one" type="submit">Submit Here<span class="flaticon-next"></span></button>  
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                   </div> 
                </div>
                
                
            </div>
        </div>
    </section>
    <!--End appointment Area-->
   
    <!--Start latest blog area-->
    
    <!--End latest blog area-->   
     @php 
      $client = DB::table('testimonial')->get();
     @endphp
    <!--Start Brand area-->  
    <section class="brand-area">
        <div class="container">
            <div class="sec-title">
                <p>Corporate Clients</p>
                <div class="title">More than <span>2000 Clients</span></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="brand-items-carousel owl-carousel owl-theme">
                        <!--Start Single Brand Item-->
                    @foreach($client as $v_client)
                        <li class="single-brand-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <a href="#"><img src="{{URL::to($v_client->image)}}" alt="Awesome Brand Image"></a>
                            <div class="overlay-content">
                                <p>{{$v_client->name}}</p>
                            </div>
                        </li> 
                    @endforeach
                        <!--End Single Brand Item-->
                        <!--Start Single Brand Item-->
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->     

    <!--Start footer area-->  
    <footer class="footer-area">
        <div class="footer-shape-bg wow slideInRight" data-wow-delay="300ms" data-wow-duration="2500ms"></div>
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-footer-widget marbtm50">
                        <div class="contact-info-box">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{asset('public/front/images/footer/footer-logo.png')}}" alt="Awesome Logo">
                                </a>    
                            </div>
                            <ul>
                                <li>
                                    <h6>Address</h6>
                                    <p>Flat 20, Reynolds Neck, North<br> Helenaville, FV77 8WS</p>
                                </li>
                                <li>
                                    <h6>Phone</h6>
                                    <p>+324 123 45 978 & 01<br> <span>Mon - Friday:</span> 9.00am to 6.00pm</p>
                                </li>
                                <li>
                                    <h6>Email</h6>
                                    <p>support@intexure.com<br> intexurecareer@gmail.com</p>
                                </li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-footer-widget marbtm50">
                        <div class="title">
                            <h3>Services</h3>
                        </div>
                        <div class="services-links">
                            <ul>
                                <li><a href="#">Concept Design</a></li>
                                <li><a href="#">Project Designs</a></li>
                                <li><a href="#">Make Overs</a></li>
                                <li><a href="#">Consulting</a></li>
                                <li><a href="#">Glass & Wrought</a></li>
                                <li><a href="#">Space Planning</a></li>
                            </ul>    
                        </div> 
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-footer-widget pdbtm50">
                        <div class="title">
                            <h3>Recent News</h3>
                        </div>
                        <ul class="recent-news">
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('public/front/images/footer/recent-news-1.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="project-single.html"><span class="icon-next"></span></a>    
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="title-holder">
                                    <p>March 10, 2019</p>
                                    <h5><a href="#">Creating drama and<br> feeling with...</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('public/front/images/footer/recent-news-2.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="project-single.html"><span class="icon-next"></span></a>    
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="title-holder">
                                    <p>March 02, 2019</p>
                                    <h5><a href="#">Wondering if interior<br> design is dying...</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{asset('public/front/images/footer/recent-news-3.jpg')}}" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="project-single.html"><span class="icon-next"></span></a>    
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="title-holder">
                                    <p>February 27, 2019</p>
                                    <h5><a href="#">Enjoy monsoon in<br> comfort of your...</a></h5>
                                </div>
                            </li>
                          
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
               
                <!--End single footer widget-->
            </div>
        </div>
    </footer>   
    <!--End footer area-->

    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="footer-bottom-content flex-box-two">
                        <div class="copyright-text">
                            <p>© 2009–2019 All Rights Reserved by <a href="#">Intexure.</a></p>
                        </div>
                        <div class="footer-social-links float-right">
                            <span>We are On:</span>
                            <ul class="sociallinks-style-one">
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                </li>
                                <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!--End footer bottom area-->   

</div> 


<div class="scroll-to-top-style2 scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</div>  



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

<!---
<script src="js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/mapapi.js"></script> 
--->
<script src="{{asset('public/front/js/map-helper.js')}}"></script>

<script src="{{asset('public/front/assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('public/front/assets/timepicker/timePicker.js')}}"></script>                       
<script src="{{asset('public/front/assets/html5lightbox/html5lightbox.js')}}"></script>

<!--Revolution Slider-->
<script src="{{asset('public/front/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('public/front/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('public/front/js/main-slider-script.js')}}"></script>

<!-- thm custom script -->
<script src="{{asset('public/front/js/custom.js')}}"></script>



</body>
</html>