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
        <link rel="shortcut icon" href="images/favicon.png">

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
                        <a href="<?php echo base_url('index.php/MainController/index'); ?>" class="logo">
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
            <section class="small-section bg-gray-lighter team-banner">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0 white">Team</h1>
                            <!-- <div class="hs-line-4 font-alt black">
                                Extraordinary web developer &&nbsp;creative minimalism lovers
                            </div> -->
                        </div>
                        
                        <!-- <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Team</span>
                            </div>
                            
                        </div> -->
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    
                    <h1 class="section-title font-alt mb-70 mb-sm-40">
                        Meet our creative team
                    </h1>
                    
                    
                    <!-- <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-text align-center mb-70 mb-xs-40">
                                Curabitur eu adipiscing lacus, a iaculis diam. Nullam placerat blandit auctor. Nulla accumsan ipsum et nibh rhoncus, eget tempus sapien ultricies. Donec mollis lorem vehicula.
                            </div>
                        </div>
                    </div> -->
                   
                    
                    <div class="row multi-columns-row">
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30 wow fadeInUp">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/Andy.png'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Andy Santoso</h4>
                                        
                                        <p>
                                            00000012373 
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Andy Santoso
                                    </div>
                                    
                                    <div class="team-item-role">
                                        00000012373
                                    </div>
                                    
                                </div> -->
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/Gilbert.png'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Gilbert Christopher</h4>
                                        
                                        <p>
                                            00000012175
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Gilbert Christopher
                                    </div>
                                    
                                    <div class="team-item-role">
                                        00000012175
                                    </div>
                                    
                                </div> -->
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/Nathaniel.png'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Nathaniel</h4>
                                        
                                        <p>
                                            00000011634
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Nathaniel
                                    </div>
                                    
                                    <div class="team-item-role">
                                        00000011634
                                    </div>
                                    
                                </div> -->
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-md-30 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php echo base_url('assets/images/Yohandy.png'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">Yohandy Chiawanda</h4>
                                        
                                        <p>
                                            00000011461
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        Yohandy Chiawanda
                                    </div>
                                    
                                    <div class="team-item-role">
                                        00000011461
                                    </div>
                                    
                                </div> -->
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0"/>
            <!-- End Divider -->
            
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
                            <a href="http://umn.ac.id" target="_blank">&copy; E-LIBRARY 2018</a>.
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
