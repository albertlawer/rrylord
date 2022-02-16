<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.png" />
    <title>rrylord group</title>
    <link rel=“canonical” href=%c3%a2%c2%80%c2%9chttps_/www.cymolthemes.com/html/mrhandy/auto-mechanic/%c3%a2%c2%80%c2%9d.html />
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/font-awesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/flaticon.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/themify-icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/shortcodes.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/main.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/megamenu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('theassets/css/responsive.css') }}"/>
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{ asset('theassets/revolution/css/rs6.css') }}"> 
</head>
<body>
    
    
    <!--page start-->
    <div class="page">
       
        @include('header')
        
        <!-- page-title -->
        <div class="cmt-page-title-row cmt-bgimage-yes cmt-bg cmt-bgcolor-darkgrey">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
            <div class="cmt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title" style="color: rgb(8, 9, 88);">Contact Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="/" style="color: rgb(8, 9, 88);">Home</a>
                                </span>
                                <span style="color: rgb(8, 9, 88);">Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end-->

            
        <!--site-main start-->
        <div class="site-main">


            <section class="cmt-row contact-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row no-gutters">
                                <div class="col-lg-1 col-md-1 col-sm-2">
                                    <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-white pt-25 pb-25 mt-100 res-575-mt-0 box-shadow">
                                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                                        <div class="layer-content">
                                            <div class="contact-block text-center">
                                                <div class="cmt-social-links-wrapper">
                                                    <ul class="social-icons d-sm-block">
                                                        <li class="social-facebook">
                                                            <a href="#" class="tooltip-top" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li class="social-twitter">
                                                            <a href="#" class="tooltip-top" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li class="social-instagram">
                                                            <a href="#" class="tooltip-top" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                                                        </li>
                                                        <li class="social-dribbble">
                                                            <a href="#" class="tooltip-top" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                                                        </li>
                                                        <li class="social-pinterest">
                                                            <a href="#" class="tooltip-top" data-tooltip="Pinterest"><i class="fa fa-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-11 col-sm-10">
                                    <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-white spacing-11 box-shadow">
                                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                                        <div class="layer-content">
                                            <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-grey spacing-12">
                                                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                                                <div class="layer-content">
                                                    <!-- section title -->
                                                    <div class="section-title with-desc">
                                                        <div class="title-header">
                                                            <h2 class="title">Get In Touch</h2>
                                                        </div>
                                                        <div class="title-desc"><p>Call or Email us regarding questions or issues</p></div>
                                                    </div><!-- section title end -->
                                                    <form id="contact_form_2" class="contact_form_2 wrap-form clearfix" method="post" action="/contact">
                                                        @csrf
                                                        <label>
                                                            <span class="text-input"><input name="your-name" type="text" value="" placeholder="Your Name" required="required"></span>
                                                        </label>
                                                        <label>
                                                            <span class="text-input"><input name="your-phone" type="text" value="" placeholder="Phone no." required="required"></span>
                                                        </label>
                                                        <label>
                                                            <span class="text-input"><input name="email" type="email" value="" placeholder="E-mail address" required="required"></span>
                                                        </label>
                                                        <label>
                                                            <span class="text-input"><textarea name="message" cols="40" rows="4" placeholder="Message" required="required"></textarea></span>
                                                        </label>
                                                        <div class="text-center">
                                                            <button type="submit" class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-black text-center">Submit Quote</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <!--google_map-->
                                    <div id="google_map" class="google_map mt-100 res-991-mt-50">
                                        <div class="map_container">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                    <div class="mb_15 pt-20 pl-40 res-991-pl-0">
                                        <div class="row cmt-vertical_sep">
                                            <div class="col-lg-6 col-md-5 col-sm-6">
                                                <!--  featured-icon-box --> 
                                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                                                    <div class="featured-icon pt-5">
                                                        <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-grey cmt-icon_element-size-md cmt-icon_element-style-round">
                                                            <i class="cmt-textcolor-skincolor ti ti-email"></i>
                                                        </div>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>Email Address</h5>
                                                        </div>
                                                        <div class="featured-desc">
                                                            <p>info@rrylord.com</p>
                                                        </div>
                                                    </div>
                                                </div><!--  featured-icon-box END -->
                                            </div>
                                            <div class="col-lg-6 col-md-5 col-sm-6">
                                                <!--  featured-icon-box --> 
                                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7 pl-30 res-991-pl-0">
                                                    <div class="featured-icon pt-5">
                                                        <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-grey cmt-icon_element-size-md cmt-icon_element-style-round">
                                                            <i class="cmt-textcolor-skincolor ti ti-location-pin"></i>
                                                        </div>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>Our Address</h5>
                                                        </div>
                                                        <div class="featured-desc">
                                                            <p>GZ 180-7510,</p>
                                                            <p>East Airport</p>
                                                            <p>Accra</p>
                                                        </div>
                                                    </div>
                                                </div><!--  featured-icon-box END -->
                                            </div>                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--cta-section-->
            <section class="cmt-row cta-section pt-70 pb-70 cmt-bgimage-yes inner_pg-bg-img1 cmt-bg cmt-bgcolor-grey clearfix">
                <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
                <div class="container"><!--container-->
                    <div class="row"><!--row-->
                        <div class="col-lg-8 m-auto">
                            <div class="col-title text-center">
                                <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-black cmt-icon_element-size-lg cmt-icon_element-style-rounded">
                                    <i class="themifyicon ti-headphone-alt"></i>
                                </div>
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="title">Call us On: +233 551 152 222</h2>
                                    </div>
                                    <div class="title-desc"><h6>Address: GZ 180-7510, East Airport, Accra</h6></div>
                                </div><!-- section title end -->
                                <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-border cmt-icon-btn-right cmt-btn-color-black mt-10" href="/contact">Contact us<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--cta-section-->


        </div><!--site-main end-->
        
        @include('footer')
        

    </div><!-- page end -->


    
    <!-- Javascript -->
    <script src="{{ asset('theassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theassets/js/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('theassets/js/tether.min.js') }}"></script>
    <script src="{{ asset('theassets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('theassets/js/jquery.easing.js') }}"></script>    
    <script src="{{ asset('theassets/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('theassets/js/jquery-validate.js') }}"></script> 
    <script src="{{ asset('theassets/js/slick.min.js') }}"></script>
    <script src="{{ asset('theassets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('theassets/js/jquery-isotope.js') }}"></script>
    <script src="{{ asset('theassets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('theassets/js/numinate.min.js') }}"></script>
    <script src="{{ asset('theassets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('theassets/js/main.js') }}"></script>


    <script src="{{ asset('theassets/js/map.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script> 
</body>
</html>