<style>
    /* Default hover style */
    .menu a:hover {
        color: #FF5733;
        /* Change this color to your desired hover color */
    }

    /* Active menu item style */
    .menu a.active {
        color: #FF5733;
        /* Change this color to your desired active color */
    }

    #site-header-menu #site-navigation .menu ul.dropdown>li.active>a,
    #site-navigation .menu>ul,
    .ttm-header-style-classic-box.ttm-header-overlay #site-header-menu #site-navigation .menu>ul>li.active>a,
    .ttm-header-style-classic-box.ttm-header-overlay #site-header-menu #site-navigation .menu>ul>li:hover>a,
    .ttm-header-style-classic #site-header-menu #site-navigation .menu>ul>li.active>a,
    .ttm-header-style-classic #site-header-menu #site-navigation .menu>ul>li:hover>a,
    #site-header-menu #site-navigation .menu ul>li:hover>a,
    .ttm-header-icons .ttm-header-cart-link a:hover {
      color: #f8a519 !important;
    }

    #site-header-menu #site-navigation .menu ul li>ul li.active>a,
    #site-header-menu #site-navigation .menu ul li>ul li>a:hover,
    #site-header-menu #site-navigation .menu>ul>li>a:before,
    #site-header-menu #site-navigation .menu>ul>li>a,
    #site-header-menu #site-navigation .menu ul.dropdown>li>a:before {
        background-color: #000 !important;
    }
</style>

<header id="masthead" class="header ttm-header-style-classic-overlay">
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header" style="background: #000;">
                    <div class="container">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <a class="home-link mobile-logo" href="#" title="Planwey" rel="home">
                                <img id="logo-img" class="img-center" src="images/jh (1).png" alt="logo-img">
                            </a>
                        </div>
                        <!-- site-branding end -->
                        <!-- header-icins -->
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown" style="background: #000">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li>
                                        <a href="service.php">Services</a>
                                        <ul>
                                            <li><a href="eventservice.php">Corporate Event Management</a></li>
                                            <li><a href="travelservice.php">Corporate Travel Management</a></li>
                                            <li><a href="serviceproduction.php">Entertainment Production</a></li>
                                        </ul>
                                    </li>
                                    <img id="none" style="width: 15%;margin-left: 23px;" src="images/jh (1).png" />
                                    <li>
                                        <a href="gallery.php">Gallery</a>
                                        <ul>
                                            <li><a href="gallery1.php">Corporate Event Management</a></li>
                                            <li><a href="gallery2.php">Corporate Travel Management</a></li>
                                            <li><a href="gallery3.php">Entertainment Production</a></li>
                                            <li><a href="gallery.php">All</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="client.php">Testimonials</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>

                        </div>

                        <!-- site-navigation end-->
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuLinks = document.querySelectorAll('#menu .menu a');

        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remove 'active' class from all links
                menuLinks.forEach(function(item) {
                    item.classList.remove('active');
                });

                // Add 'active' class to the clicked link
                link.classList.add('active');
            });
        });
    });
</script>


<!-- Add this script at the bottom of your HTML file, before the closing </body> tag -->