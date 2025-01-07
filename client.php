<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <!-- <meta name="description" content="Planwey &#8211; Event planner &amp; celebration html Template" /> -->
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/event/logo.jpeg" media="all" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />

</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    .featured-imagebox {
        position: relative;
        padding: 3px !important;
        /* background-color: #000; */
    }

    .ttm-row {
        padding: 56px 0px !important;
    }

    .slider {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 192%;
        width: 100%;
        overflow: hidden;
        margin-bottom: 16px;
        background-color: #ffd658ad;
    }

    .slider {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 192%;
        width: 100%;
        overflow: hidden;
        margin-bottom: 16px;

        background-color: #ffd658ad;

    }

    .client {
        text-align: center;
        padding: 0px 20px 0px !important;
    }

    .slider-items {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        animation: scrolling 20s linear infinite;

    }

    @keyframes scrolling {

        0% {
            transform: translateX(80%);
        }

        100% {
            transform: translateX(-20%);
        }
    }

    .slider-items img {
        width: 9%;
        margin: 0px;

    }


    .slider-items {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        animation: scrolling 20s linear infinite;

    }

    @keyframes scrolling {

        0% {
            transform: translateX(80%);
        }

        100% {
            transform: translateX(-20%);
        }
    }

    .slider-items img {
        width: 8%;
        margin: -4px;
    }

    .slider-items {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        animation: scrolling 10s linear infinite;
        transition: animation-play-state 0.5s ease;
        /* Optional: Smooth transition */
    }

    .slider:hover .slider-items {
        animation-play-state: paused;
    }

   

    .cabs {
        font-weight: 800 !important;
        letter-spacing: 1px !important;
        background: -webkit-linear-gradient(rgba(0, 150, 255, 1.00), #6c757d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: #007bff14;
    }

    .section-title p {
        color: #fff !important;
    }

    p {
        color: #fff !important;
    }

    #app {
        text-align: center;
        font-size: 50px;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%);
        background-clip: border-box;
        text-fill-color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
        animation: textclip 2s linear infinite;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    /* Default: Hide logo on all screens */
    .mobile-logo {
        display: none;
    }

    /* Show logo only on screens smaller than 768px (typical mobile breakpoint) */
    @media (max-width: 768px) {
        .mobile-logo {
            display: block;
        }
    }

    .row:not(.text-center) .section-title h2.title {
        margin-bottom: 10px !important;
    }

    .btn,
    button,
    .owl-item,
    img,
    span,
    .portfolio-filter button,
    .team-social,
    .price-table,
    .price-table:hover .price-value,
    .product-item:hover,
    .product-overlay,
    .product-btn,
    .dropdown-item,
    .about-2:before,
    .testimonial-content,
    .testimonial .testimonial-content::after,
    .testimonial .testimonial-content::before,
    .featured-content.featured-content-team,
    .featured-thumbnail img,
    #totop {
        /* border-radius: 10px !important; */
        -webkit-transition: all 0.5s ease-in-out 0s;
        -moz-transition: all 0.5s ease-in-out 0s;
        -ms-transition: all 0.5s ease-in-out 0s;
        -o-transition: all 0.5s ease-in-out 0s;
        transition: all 0.5s ease-in-out 0s;
    }

    .featured-title h5 {
        font-size: 24px;
        line-height: 25px;
    }

    @media (min-width:280px) and (max-width:780px) {


        #mack {
            margin-top: -47px !important;
        }

        #bn {
            margin-bottom: -5px !important;
        }

        #ssd {
            font-size: 29px !important;
        }

        #star {
            line-height: 19px !important;
            font-size: 21px !important;

        }

        #case {
            margin-top: 0px !important;
            background: rgba(0, 0, 0, 1.00) !important;
        }

        #tune {
            width: 30% !important;
            margin: 5px !important;
        }

        #st {
            font-size: 27px !important;
            line-height: 28px !important;
            margin-top: 30px !important;
        }

        #hii {
            height: 200px !important;
        }

        #sold {
            margin-top: 17px !important;
            font-size: 22px !important;
            line-height: 27px !important;
        }


        #gan {}

        #saw1 {
            margin: 1px 0px 0px -2px !important;
            border-radius: 50px 0px 0px 0px !important;
        }

        #nun {
            line-height: 20px !important;
            font-size: 15px !important;
            color: #fff;
        }

        #sav {
            text-align: end !important;
            margin: -29px 0px 11px 0px !important;
        }

        #none {
            display: contents !important;
        }

        #penn {
            margin-top: 0px !important;
        }

        #topp {
            margin-top: 0px !important;
        }

        #brand {
            font-size: 24px !important;
        }

        #padding {
            margin-top: 0px !important;
        }

        #logo-img {
            margin-top: -60px !important;
        }
    }

    .mat {
        font-size: 20px;
    }

    /* section {
    display: grid;
    place-items: center;
} */

    .ttm-bgcolor-black,
    .ttm-bgcolor-black>.ttm-bg-layers {
        background-color: rgba(0, 0, 0, 1.00);
    }

    h1 {
        font-size: 3rem;
        padding: 20px;
        margin: 20px 0px;
    }

    .slider {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 95%;
        width: 100%;
        overflow: hidden;
        /* background-color: #fff; */
        /* background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(7.4px);
    -webkit-backdrop-filter: blur(7.4px);
    border: 1px solid rgba(255, 255, 255, 0.4); */
    }

    .slider-items {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        animation: scrolling 20s linear infinite;

    }

    @keyframes scrolling {

        0% {
            transform: translateX(80%);
        }

        100% {
            transform: translateX(-20%);
        }
    }

    .slider-items img {
        width: 8%;
        margin: -2px;

    }

    .count {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 40px;
        font-weight: bold;
    }

    .counter-wrapper {
        background: #333;
        background-image: linear-gradient(#ffd658d9, #ffd6587d), url(images/slider3.jpg);
        background: cover;
        background-position: center center;
        position: relative;
    }

    .counter-wrapper:after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .5);
    }

    .counter-inner {
        position: relative;
        z-index: 2;
    }

    .count-icon {
        font-size: 48px;
    }

    .cabs {

        font-weight: 800 !important;
        letter-spacing: 0px !important;
        background: -webkit-linear-gradient(#f8a519, rgb(255 253 188));
        -webkit-background-clip: text;
        -webkit-text-fill-color: #007bff14;

    }


    .make {
        font-size: 24px;
        color: #fff;
        font-weight: 700;
        background: -webkit-linear-gradient(rgba(255, 255, 255, 1.00), #ffffff91);
        -webkit-background-clip: text;
        -webkit-text-fill-color: #007bff6e;
    }

    #app {
        text-align: center;
        font-size: 50px;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%);
        background-clip: border-box;
        text-fill-color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
        animation: textclip 2s linear infinite;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }

    /* Default: Hide logo on all screens */
    .mobile-logo {
        display: none;
    }

    .separator .sep-line {
        height: 1px;
        border-top: none !important;
        display: block;
        position: relative;
        width: 100%;
    }

    /* Show logo only on screens smaller than 768px (typical mobile breakpoint) */
    @media (max-width: 768px) {
        .mobile-logo {
            display: block;
        }
    }
</style>

<body style="background: #000;" >

    <!--page start-->
    <div class="page" style="background: #000;">
        <!--header start-->


        <?php
        include_once "header.php"
            ?>


        <!--header end-->

        <!--page-title start-->
        <div class="ttm-page-title-row text-center">
            <div class="section-overlay"></div>
            <div class="title-box text-center">
                <div class="container">
                    <div class="page-title-heading">
                        <h1 class="title" style="    text-transform: uppercase;">Testimonials</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <span><a title="Homepage" href="index.php"><i
                                        class="fa fa-home"></i>&nbsp;&nbsp;Home</a></span>
                            <span class="ttm-bread-sep ttm-textcolor-white"> &nbsp; ⁄ &nbsp;</span>
                            <span class="ttm-textcolor-white">Testimonials</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title end-->

        <!--site-main-->
        <div class="site-main">

            <!--intro-section start-->


            <!--last-section start-->
            <section class="testimonial-section ttm-row bg-layer break-991-colum" style="    margin-top: 30px;background: #000;">
                <div id="rightml" class="container" style="margin-top: -60px;">
                    <div class="row">
                        <!--Testimonials-->
                        <div class="col-md-12 col-lg-6">
                            <div
                                class="col-bg-img-thirteen ttm-col-bgimage-yes ttm-bg ttm-left-span mt_60 res-991-mt-0">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer" style=" margin-top: 60px;"></div>
                                <div class="layer-content"></div>
                            </div>
                            <img src="images/event/img.png" class="ttm-equal-height-image" alt="bg-image">
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div
                                class="col-bg-img-ten ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-black ml_73 res-991-ml-0 ttm-col-bgimage-yes ttm-bgimage-yes padding-4">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner" style="    background:#000000ba;"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="carousel-outer pr-10">
                                        <div class="section-title clearfix mb-30">
                                            <h4>TESTIMONAL</h4>
                                            <h2 class="title cabs">Clients feedback</h2>
                                        </div>
                                        <!-- wrap-testimonial -->
                                        <div class="testimonial-slide owl-carousel" data-item="1" data-nav="false"
                                            data-dots="false" data-auto="true">
                                            <!-- testimonials -->
                                            <div class="testimonials">
                                                <div class="testimonial-content mb-35">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-center" src="images/event/m1.jpg"
                                                                alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h6>Rajesh Khanna</h6>
                                                        <label>Mumbai City</label>
                                                    </div>
                                                    <blockquote>Thank you very much to all blue bell team for making
                                                        grand Annual conference & award night.</blockquote>
                                                </div>
                                            </div><!-- testimonials end -->
                                            <!-- testimonials -->
                                            <div class="testimonials">
                                                <div class="testimonial-content mb-35">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-center" src="images/event/m2.jpg"
                                                                alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h6>Priti Patil</h6>
                                                        <label>Pune City</label>
                                                    </div>
                                                    <blockquote>Excellent Shooting experience for JIVO TV commercials
                                                        (AD Films) With Blue Bell production House of young and
                                                        experienced creative team.</blockquote>
                                                </div>
                                            </div><!-- testimonials end -->
                                            <!-- testimonials -->
                                            <div class="testimonials">
                                                <div class="testimonial-content mb-35">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-center" src="images/event/m3.jpg"
                                                                alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h6>Om Parikh</h6>
                                                        <label>Nagpur City</label>
                                                    </div>
                                                    <blockquote>Thank you very much to all Blue Bell team for making
                                                        grand success event & award night at Bangkok Pattaya for our
                                                        Agents meets Event, It was comfortable memorable trip to Bangkok
                                                        Pattaya</blockquote>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $(".owl-carousel").owlCarousel({
                                                    items: 1,
                                                    loop: true,
                                                    margin: 10,
                                                    autoplay: true,         // Enables auto-sliding
                                                    autoplayTimeout: 5000,  // Time in milliseconds between slides
                                                    autoplayHoverPause: true, // Pause on hover
                                                    nav: false,
                                                    dots: false
                                                });
                                            });
                                        </script>

                                        <!-- wrap-testimonial end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--left Column-end-->
                        <!--Testimonials-end-->
                    </div>
                </div>
            </section>
            <!--last-section end-->
        </div>




        <!-- <section style="display: grid; place-items: center; margin-top: 40px;">

            <div id="marq" class="slider">
                <div id="kabs" class="slider-items">
                    <img src="images/c1.jpg" alt="Partner 1">
                    <img src="images/c2.jpg" alt="Partner 2">
                    <img src="images/c3.jpg" alt="Partner 3">
                    <img src="images/c4.jpg" alt="Partner 4">
                    <img src="images/c5.jpg" alt="Partner 5">
                    <img src="images/c6.jpg" alt="Partner 6">
                    <img src="images/c7.jpg" alt="Partner 7">
                    <img src="images/c8.jpg" alt="Partner 8">
                    <img src="images/c9.jpg" alt="Partner 9">
                    <img src="images/c10.jpg" alt="Partner 10">
                    <img src="images/c11.jpg" alt="Partner 11">
                </div>
            </div>
        </section> -->
        <!-- site-main end -->
        <!--intro-section end-->
        <!--client-section-->


    </div><!-- site-main end -->

    <!--footer-->

    <?php
    include_once "footer.php"
        ?>
    <!--footer-END-->


    </div><!-- page end -->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->



    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min6959.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>


</body>

</html>