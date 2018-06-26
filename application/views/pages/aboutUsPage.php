<!DOCTYPE html>
<html>
    <head>
        <title>E-Library - About Us</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">

        <!-- CSS -->
        <?php
            echo $css;

            if(isset($this->session->userdata['logged_user'])){
                $nim = ($this->session->userdata['logged_user']['nim']);
                $pw = ($this->session->userdata['logged_user']['password']);
                $email = ($this->session->userdata['logged_user']['email']);
                $salt = ($this->session->userdata['logged_user']['nim']);
            }
        ?>     
        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            <nav class="main-nav js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="mp-index.html" class="logo">
                            <img src="<?php echo base_url('assets/images/logo-footer.png'); ?>" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                            <!-- Item -->
                            <li>
                                <a href="<?php echo base_url('index.php/MainController/index'); ?>" class="mn">Home</a> 
                            </li>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <li>
                                <a href="#" class="mn">Catalog</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li>
                                <a href="<?php echo base_url('index.php/MainController/aboutUsPage'); ?>" class="mn">About us</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li>
                                <?php
                                    if($this->session->has_userdata('logged_user')){
                                        if($nim == '00000011461' || $nim == '00000011634' || $nim == '00000012175' || $nim == '00000012373'){
                                            echo "<a href='".base_url('index.php/MainController/adminPage')."' class='mn'>Admin Page</a>";
                                        }
                                        else{
                                            echo "<a href='".base_url('index.php/MainController/userPage')."' class='mn'>User Page</a>";
                                        }
                                    }
                                ?>
                            </li>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <li>
                                <?php 
                                    if($this->session->has_userdata('logged_user')){
                                        echo "<a href='".base_url('index.php/MainController/actionLogout')."' class='mn'>Logout</a>";
                                    }
                                    else{
                                        echo "<a href='".base_url('index.php/MainController/loginRegisterPage')."' class='mn'>Login / Register</a>";
                                    }
                                ?>
                            </li>
                            <!-- End Item -->
                            
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                            
                            <!-- Search -->
                            <!-- <li>
                                <a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Search</a>
                                
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <div class="mn-wrap">
                                            <form method="post" class="form">
                                                <div class="search-wrap">
                                                    <button class="search-button animate" type="submit" title="Start Search">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    <input type="text" class="form-control search-field" placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    
                                </ul>
                                
                            </li> -->
                            <!-- End Search -->
                            
                            <!-- Cart -->
                            <!-- <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i> Cart(0)</a>
                            </li> -->
                            <!-- End Cart -->
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0">About Us</h1>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- About Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    
                    <div class="section-text mb-60 mb-sm-40">
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
                            </div>
                            
                            <div class="col-md-4 col-sm-12 mb-sm-50 mb-xs-30">
                                 
                                <!-- Bar Item -->
                                <div class="progress tpl-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        Branding, % <span>90</span>
                                    </div>
                                </div>
                                <!-- End Bar Item -->
                                
                                <!-- Bar Item -->
                                <div class="progress tpl-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        Design, % <span>80</span>
                                    </div>
                                </div>
                                <!-- End Bar Item -->
                                
                                <!-- Bar Item -->
                                <div class="progress tpl-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Development, % <span>85</span>
                                    </div>
                                </div>
                                <!-- End Bar Item -->
                                 
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    <!-- Counters -->
                    <div class="count-wrapper">
                        <div class="row">
                            
                            <!-- Counter Item -->
                            <div class="col-xs-6 col-sm-3">
                                <div class="count-number">
                                    320
                                </div>
                                <div class="count-descr font-alt">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="count-title">Projects Done</span>
                                </div>
                            </div>
                            <!-- End Counter Item -->
                            
                            <!-- Counter Item -->
                            <div class="col-xs-6 col-sm-3">
                                <div class="count-number">
                                    150
                                </div>
                                <div class="count-descr font-alt">
                                    <i class="fa fa-heart"></i>
                                    <span class="count-title">Happy Clients</span>
                                </div>
                            </div>
                            <!-- End Counter Item -->
                            
                            <!-- Counter Item -->
                            <div class="col-xs-6 col-sm-3">
                                <div class="count-number">
                                    933
                                </div>
                                <div class="count-descr font-alt">
                                    <i class="fa fa-coffee"></i>
                                    <span class="count-title">Coffee Cups</span>
                                </div>
                            </div>
                            <!-- End Counter Item -->
                            
                            <!-- Counter Item -->
                            <div class="col-xs-6 col-sm-3">
                                <div class="count-number">
                                    975
                                </div>
                                <div class="count-descr font-alt">
                                    <i class="fa fa-lightbulb-o"></i>
                                    <span class="count-title">Great Ideas</span>
                                </div>
                            </div>
                            <!-- End Counter Item -->
                            
                        </div>
                    </div>
                    <!-- End Counters -->
                    
                </div>
            </section>
            <!-- End About Section -->
            
            
            <!-- Testimonials Section -->
            <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="images/full-width-images/section-bg-3.jpg">
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
            </section>
            <!-- End Testimonials Section -->
            
            
            <!-- Logotypes Section -->
            <section class="small-section pt-20 pb-20">
                <div class="container relative">
                    
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            
                            <div class="small-item-carousel black owl-carousel mb-0 animate-init" data-anim-type="fade-in-right-large" data-anim-delay="100">
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-1.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-2.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-3.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-4.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-5.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-6.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-1.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="<?php echo base_url('assets/images/clients-logos/client-2.png'); ?>" width="67" height="67" alt="" />
                                </div>
                                <!-- End Logo Item -->
                                
                            </div>
                                
                         </div>
                     </div>
                    
                 </div>
            </section>
            <!-- End Logotypes -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            
            <!-- Team Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Our Team
                    </h2>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-text align-center mb-70 mb-xs-40">
                                In&nbsp;auctor ex&nbsp;id&nbsp;urna faucibus porttitor. Lorem ipsum dolor sit amet, 
                                consectetur adipiscing elit. In&nbsp;maximus ligula semper metus pellentesque mattis.  
                                Maecenas volutpat, diam enim sagittis quam, id&nbsp;porta quam. Sed id&nbsp;dolor 
                                consectetur fermentum nibh volutpat, accumsan purus.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row multi-columns-row">
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30 wow fadeInUp">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/team/team-1.jpg'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Hello & Welcome!</h4>
                                        
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam. 
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Thomas Rhythm 
                                    </div>
                                    
                                    <div class="team-item-role">
                                        Art Director
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/team/team-2.jpg'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Nice to meet!</h4>
                                        
                                        <p>
                                            Curabitur augue, nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique porta.
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Marta Laning
                                    </div>
                                    
                                    <div class="team-item-role">
                                        Web engineer
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/team/team-3.jpg'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Whats Up!</h4>
                                        
                                        <p>
                                            Adipiscing elit curabitur eu&nbsp;adipiscing lacus eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam. 
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Steve ANDERS
                                    </div>
                                    
                                    <div class="team-item-role">
                                        Developer
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/team/team-4.jpg'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Hi to all!</h4>
                                        
                                        <p>
                                            Adipiscing elit curabitur eu&nbsp;adipiscing lacus eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam. 
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Emma Connor
                                    </div>
                                    
                                    <div class="team-item-role">
                                        Creative Director
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                    </div>
                        
                </div>
            </section>
            <!-- End Team Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            
            <!-- Features Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Why Choose Us?
                    </h2>
                    
                    <!-- Features Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-flag"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re Creative</h3>
                                <div class="alt-features-descr align-left">
                                    Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                    In maximus ligula semper metus pellentesque mattis. 
                                    Maecenas  volutpat, diam enim.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re Punctual</h3>
                                <div class="alt-features-descr align-left">
                                    Proin fringilla augue at maximus vestibulum. 
                                    Nam pulvinar vitae neque et porttitor. Praesent sed 
                                    nisi eleifend, lorem fermentum orci sit amet, iaculis libero.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-hotairballoon"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We have magic</h3>
                                <div class="alt-features-descr align-left">
                                    Curabitur iaculis accumsan augue, nec finibus mauris pretium eu. 
                                    Duis placerat ex gravida nibh tristique porta. Nulla facilisi. 
                                    Suspendisse ultricies eros blandit.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                    </div>
                    <!-- End Features Grid -->
                        
                </div>
            </section>
            <!-- End Features Section -->
            
            
            <!-- Call Action Section -->
            <section class="small-section bg-dark">
                <div class="container relative">
                    
                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Want to discuss your new project?</h3>
                        <div>
                            <a href="" class="btn btn-mod btn-w btn-medium btn-round">Lets tallk</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
            
            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">

                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        
                            <a href="#top">
                                <div class="image-footer">
                                </div>
                            </a>
                        
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Rhythm 2017</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Made with love for great people.
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <?php
            echo $js;
        ?>
        
    </body>
</html>
