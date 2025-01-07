<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* General Styles */
    .widget-area .widget-title {
        font-size: 1.125rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .widget-area .widget-contact {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .widget-area .widget-contact li {
        display: flex;
        align-items: center;
        margin: 8px 0;
        font-weight: 500;
    }

    /* Link Styles */
    .widget-area .widget-contact li a {
        color: #fff;
        text-decoration: none;
        margin-left: 8px;
        transition: color 0.3s;
    }

    /* Prevent Zoom on Email and Phone Links */
    .widget-area .widget-contact li a[href^="mailto:"]:hover,
    .widget-area .widget-contact li a[href^="tel:"]:hover {
        font-size: inherit;
        /* Remove zoom effect */
    }

    /* Hover Effect */
    .widget-area .widget-contact li a:hover {
      color: #f8a519 !important;
        font-size: large;
    }

    /* Active Link Style */
    .widget-area .widget-contact li a.active {
        font-size: larger;
        color: #f8a519 !important;
    }

    /* Icon Styling */
    .widget-area .widget-contact li i {
        color: #fff;
        font-size: 1.2rem;
    }

    /* General Styles for Widget Title */
    .widget-area .widget-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    /* Footer Links List */
    .widget-area .menu-footer-services {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .widget-area .menu-footer-services li {
        margin: 5px 0;
    }

    /* Link Styles */
    .widget-area .menu-footer-services li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* Hover Effect for Links */
    .widget-area .menu-footer-services li a:hover {
      color: #f8a519 !important;
    }

    /* Active Link Style */
    .widget-area .menu-footer-services li a.active {
        font-size: larger;
      color: #f8a519 !important;
    }

    .zoom {
        transition: transform 0.3s ease-in-out;
    }

    .zoom:hover {
        transform: scale(1.2);
        /* Scales the image by 1.2 times */
    }

    .social-icons a {
        display: inline-block;
        transition: transform 0.3s ease;
        /* Zoom effect */
    }

    .social-icons a:hover {
        transform: scale(1.2);
        /* Increase size on hover */
    }

    .social-icons li {
        list-style: none;
        display: inline-block;
    }
</style>
<footer class="footer widget-footer bg-img11  ttm-bg ttm-bgimage-yes clearfix"
    style="background-attachment: fixed;background-size: cover;margin-top: 23px;background-image: linear-gradient(rgba(0, 0, 0, 1.00), #000000ad), url(images/bw.jpg);">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="second-footer">
        <div class="container">
            <div class="second-footer-inner">
                <div class="row">
                    <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-out-link clearfix">
                            <div class="company-info">
                                <div class="company-logo">
                                    <img src="images/jh (1).png" alt="company-logo" class="zoom" style="width: 145px; margin-top: -10px; margin-bottom: 11px;">

                                    <p style="    color: #fff;line-height: 19px;">
                                    Founded in year 2005 and has been rapidly growing since then. Bluebell is Mumbai based corporate event management and entertainment production
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-social-link-wrapper">
                        </div>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget_nav_menu clearfix">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul class="menu-footer-services">
                                <li><a href="index.php" class="active">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="eventservice.php">Services</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="client.php">Testimonial</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>

                        </div>
                    </div>



                    <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-out-link clearfix">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="widget-contact">
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:bluebelleventorg@gmail.com">bluebelleventorg@gmail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+919322276051">Phone: +91 9322276051</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+919920710769">+91 9920710769</a>
                                </li>
                                <li>
                                    <i class="fa fa-map-signs"></i>
                                    <span>Oshiwara Park, Vishal Chs Ltd, New Link Rd, Oshiwara, Andheri, Mumbai, Maharashtra 400102, India</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-out-link clearfix">
                            <h4 class="widget-title">Social Media Icons</h4>
                            <ul class="social-icons" style="text-align: center;">
                                <a href="https://www.facebook.com/pg/BluebellGlobal-532823637132823/">
                                    <li><i class="fab fa-facebook" style="font-size: 25px; color: #3b5998; margin-left: -50px;"></i></li>
                                </a>
                                <a href="https://www.instagram.com/bluebell.entertainment/">
                                    <li><i class="fab fa-instagram" style="font-size: 25px; background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); -webkit-background-clip: text; color: transparent;"></i></li>
                                </a>
                                <a href="https://twitter.com/bluebell_global">
                                    <li><i class="fab fa-twitter" style="margin-left: 16px; font-size: 25px; color: #1da1f2;"></i></li>
                                </a>
                                <a href="https://www.youtube.com/channel/YOUR_CHANNEL_ID">
                                    <li><i class="fab fa-youtube" style="font-size: 25px; color: #ff0000; margin-left: 16px;"></i></li>
                                </a>
                            </ul>
                        </div>
                    </div>


                    <!-- <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-out-link clearfix">
                            <h4 class="widget-title">Social Media Icons</h4>
                            <ul class="social-icons" style="text-align: center;">
                                <li><i class="fab fa-facebook" style="font-size: 20px;color: #1877F2;margin-left: -50px;"></i></li>

                                <li><i class="fab fa-instagram"style="font-size: 20px;color: #C13584;"></i></li>


                                <li><i class="fab fa-twitter"style="margin-left: 16px;font-size: 20px;color:#1DA1F2;"></i></li>
                                <li><i class="fab fa-youtube" style="margin-left: 16px; font-size: 20px; color: #FF0000;"></i></li>


                            </ul>

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 ttm-footer2-left">
                    <div class="copyright">
                        <p class="text-center" style="font-size: 15px;color:#fff;">
                            Website Design-Development and Maintenance by
                            <a href="https://www.swapratechnologies.com/" style="color: #FC5A1B;">
                                <strong>Swapra Technologies</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>