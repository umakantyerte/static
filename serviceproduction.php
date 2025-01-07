<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Planwey &#8211; Event planner &amp; celebration html Template" />
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

    .tttm-row {
        padding: 13px 0px 19px 0px !important;
    }

    .film-media-section .row {
        display: flex;
        flex-wrap: wrap;
    }

    @media (max-width: 768px) {
        .film-media-section .image-column {
            order: -1;
            /* Ensure the image appears first */
        }

        .film-media-section .content-column {
            margin-top: 20px;
            /* Add spacing after the image */
        }
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
        color: #fff;
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

    .mach {
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: -10px;
        background: #f8a519;
        padding: 13px;
        border-radius: 12px 0px 12px 0px;

        /* text-transform: uppercase; */
        margin-bottom: 30px;
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

        #dfg {
            margin-top: -2px !important;
        }

        #case {
            margin-top: 0px !important;
            background: rgba(0, 0, 0, 1.00) !important;
        }
        #feel{
            margin-top: 80px !important;
        }

        #sdf {
            border: 2px solid white;
            height: 230px !important;

        }

        #tune {
            width: 30% !important;
            margin: 5px !important;
        }

        #st {
            font-size: 26px !important;
            line-height: 32px !important;
            margin-top: 62px !important;
        }

        #notb {
            margin-top: 58px !important;
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
            margin: -18px 0px 0px -2px !important;
            border-radius: 5px 20px 20px 5px !important;
        }

        #nun {
            line-height: 21px !important;
            font-size: 14px !important;
            color: #fff;
        }

        #nunb {
            line-height: 21px !important;
            font-size: 14px !important;
            color: #fff;
            margin-bottom: -55px !important;
        }

        #nuno {
            line-height: 21px !important;
            font-size: 20px !important;
            margin-top: -60px !important;
            color: #fff;
        }

        #nunn {
            line-height: 21px !important;
            font-size: 14px !important;
            color: #fff;
            margin-top: -21px !important;
        }

        #sav {
            text-align: end !important;
            margin: -29px 0px 11px 0px !important;
        }

        #name {
            margin-top: -90px !important;
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
        width: 70%;
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
        width: 14%;
        margin: 5px;

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

<body style="background: #000;">

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
                        <h1 class="title">SERVICES</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <span><a title="Homepage" href="index.php"><i
                                        class="fa fa-home"></i>&nbsp;&nbsp;Home</a></span>
                            <span class="ttm-bread-sep ttm-textcolor-white"> &nbsp; ⁄ &nbsp;</span>
                            <span class="ttm-textcolor-white">Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--page-title end-->

        <!--site-main-->
        <div class="site-main">

            <!--intro-section start-->
            <section class="ttm-row welcome-section clearfix" style="background: #000;">
                <div class="container">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-12 col-lg-5">
                            <div class="ttm_single_image_wrapper mt_20 res-991-mt-0">
                                <img id="saw1" src="images/ennn.jpg"
                                    style="margin: 0px; border-right: solid blue 2px; border-radius: 0px 40px 40px 0px;"
                                    alt="Entertainment Image" class="img-fluid">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-12 col-lg-7">
                            <div  class="section-title pt-40 res-991-pt-30">
                                <h2 id="st" class="title cabs app"
                                    style="font-size: 27px; text-transform: uppercase;">Entertainment Production</h2>
                            </div>
                            <p id="nunn" style="margin-top: -35px;">Blue Bell Entertainment Production House in Mumbai is a team of young and experienced creative professionals from the entertainment industry.</p>
                            <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff;">We’ve got a great team of people and we love what we do. We love solving creative challenges for our clients. Our team specializes in creating original, high-quality TV commercials (AD Films).</p>
                            <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff; margin-top: -10px;">Bluebell is also a leading talent agency in Andheri Mumbai. We choose the best facilities, directors, photographers, and crew for each individual production.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Film Media Section 1 -->
            <section class="ttm-row film-media-section" style="background: #111; margin-top: 0px;">
                <div class="container">
                    <div class="row">
                        <!-- Right Column (Image) -->
                        <div class="col-md-12 col-lg-5 order-1 order-lg-2">
                            <img src="images/p.jpg" alt="Production House in Mumbai" style="width: 100%; height: auto;">
                        </div>

                        <!-- Left Column (Content) -->
                        <div class="col-md-12 col-lg-7 order-2 order-lg-1">
                            <div id="feel" class="pt-40 res-991-pt-30">
                                <p id="nuno" style="line-height: 20px; font-weight: 600; font-size: 25px; color: #f8a519;">FILM MEDIA</p>
                                <p id="nun" style="line-height: 23px; font-size: 18px; color: #fff;margin-bottom: 4px;">Let your product dominate the market</p>
                                <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff;">The product videos we create for our clients turn out to be the best marketing tool for our clients. We work with professional filmmakers who produce high definition product videos fit for digital broadcast. We use the latest technology during product videos production. More importantly, We understand the clients’ needs and the audiences’ demands. We will prepare a video which has a cinematic feel to it. Blue bell is renowned entertainment production house in Mumbai.The viewers will have an almost film watching experience while watching our video because we will also add a story line to make it more interesting, appealing and engaging.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Film Media Section 2 -->
            <section class="ttm-row corporate-video-section" style="background: #111;margin-top: -114px;">
                <div class="container">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-12 col-lg-12">
                            <div class="pt-40 res-991-pt-30">
                                <p id="nun" style="line-height: 23px; font-size: 18px; color: #fff;margin-bottom: 4px;">Rise on the international horizon</p>
                                <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff;">A corporate video is the most powerful tool of communication which can be used to build the brand of your company & also the most effective tool to promote or develop your business. Blue Bell, as a corporate video production company, is capable of measuring the influence of a great and effective video for our clients. Our creative, talented and experienced video designers will prepare a video which will be unique with a strong message related to your company’s products and services and that too at the most competitive rate.</p>
                            </div>
                        </div>

                        <!-- Right Column -->

                    </div>
                </div>
            </section>






            <section class="ttm-row film-media-section" style="background: #111; margin-top: -52px;">
                <div class="container">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-12 col-lg-5">
                            <div class="ttm_single_image_wrapper mt_20 res-991-mt-0">
                                <iframe style="border: 2px solid white;" id="youtube-video" width="100%" height="315"
                                    src="https://www.youtube.com/embed/5-kPxbtxMpM" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-12 col-lg-7">
                            <div id="feel" class="pt-40 res-991-pt-30">
                                <p id="nuno" style="line-height: 20px; font-weight: 600; font-size: 25px; color: #f8a519;">PRINT MEDIA</p>
                                <p id="nun" style="line-height: 23px; font-size: 18px; color: #fff;margin-bottom: 4px;">First impressiont</p>
                                <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff;">For Print Media we’ve got a great team of creative brains and we love what we do. We solve challenges by a creative strategy. We understand design and the Science behind Art. The purpose of design is to support the brand strategy, by being the face of it. The science behind our designs is to ensure that every single touch point that the brand uses to interact with its audiences is created to offer an integrated experience.</p>
                                <p id="nun" style="line-height: 23px; font-size: 18px; color: #fff;margin-bottom: 4px;">Build to last</p>
                                <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff;">We are creative & our creative, talented and experienced designers will prepare a creative which will be unique with a strong message related to your company’s products and services. Our talented and experienced Photographer understand The
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Film Media Section 2 -->
            <section class="ttm-row corporate-video-section" style="background: #111;margin-top: -114px;">
                <div class="container">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-12 col-lg-12">
                            <div class="pt-40 res-991-pt-30" style="    margin-top: 10px;">
                                <p id="nun" style="line-height: 23px; font-size: 14px; color: #fff;"> science behind our designs, creative, what your company is, what it does, how it communicates to potential customers and how you want them to perceive your company.At Blue Bell entertainment production house in Mumbai, Our Photographers understand all & shoot accordingly with product, models, props at different location with high definition camera’s & lights equipment’s that too at the most competitive rate.
                            </div>
                        </div>

                        <!-- Right Column -->

                    </div>
                </div>
            </section>
            <!--intro-section end-->

            <section class="tttm-row gallery-page-section" style="background: #000;">
                <div id="name" class="container" style="margin-top: -35px;">
                    <h2 id="st" class="title cabs app"
                        style="font-size: 32px;text-transform: uppercase;text-align: center;">OUR
                        SHOWCASE</h2>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="ttm-tabs style2" data-effect="fadeIn">

                                <div class="content-tab">

                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <div class="row pt-10  multi-columns-row ttm-boxes-spacing-0px  ">





                                            <div class="ttm-box-col-wrapper col-lg-6 col-md-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail-->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img style="width: 99%;margin-bottom: 5px;"
                                                                class="img-fluid" src="images/call1.jpg"
                                                                alt="image"></a>
                                                    </div><!-- featured-thumbnail END-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image"
                                                                data-gal="prettyPhoto[gallery1]" title=""
                                                                href="images/call1.jpg" data-rel="prettyPhoto">
                                                                <i class="ti ti-search"></i>

                                                            </a>
                                                        </div>

                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-item -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-6 col-md-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail-->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img style="width: 99%;margin-bottom: 5px;"
                                                                class="img-fluid" src="images/call2.jpg"
                                                                alt="image"></a>
                                                    </div><!-- featured-thumbnail END-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay">
                                                        <div class="ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image"
                                                                data-gal="prettyPhoto[gallery1]" title=""
                                                                href="images/call2.jpg" data-rel="prettyPhoto">
                                                                <i class="ti ti-search"></i>

                                                            </a>
                                                        </div>

                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-item -->
                                            </div>


                                        </div>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <!-- content-inner end-->
                                    <!-- content-inner -->
                                    <!-- content-inner -->
                                    <!-- content-inner end-->
                                    <!-- content-inner -->
                                    <!-- content-inner end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div style="text-align: center;background: #000;">
                <a href="gallery3.php">
                    <button class="custom-button">View More Photos</button>
                </a>
            </div>

            <style>
                .custom-button {
                    background-color: #f8a519;
                    padding: 10px 20px;
                    font-size: 16px;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background-color 0.3s, color 0.3s;
                }

                .custom-button:hover {
                    background-color: blue;
                    color: white;
                }
            </style>
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