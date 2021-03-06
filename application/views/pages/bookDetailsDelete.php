<!DOCTYPE html>
<html>
    <head>
        <title>E-Library - Book Details</title>
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
        <style>
             /* The snackbar - position it at the bottom and in the middle of the screen */
            #snackbar {
                visibility: hidden; /* Hidden by default. Visible on click */
                min-width: 250px; /* Set a default minimum width */
                margin-left: -125px; /* Divide value of min-width by 2 */
                background-color: #333; /* Black background color */
                color: #fff; /* White text color */
                text-align: center; /* Centered text */
                border-radius: 2px; /* Rounded borders */
                padding: 16px; /* Padding */
                position: fixed; /* Sit on top of the screen */
                z-index: 1; /* Add a z-index if needed */
                left: 50%; /* Center the snackbar */
                bottom: 30px; /* 30px from the bottom */
            }

            /* Show the snackbar when clicking on a button (class added with JavaScript) */
            #snackbar.show {
                visibility: visible; /* Show the snackbar */

            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
                -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
                animation: fadein 0.5s, fadeout 0.5s 2.5s;
            }

            /* Animations to fade the snackbar in and out */
            @-webkit-keyframes fadein {
                from {bottom: 0; opacity: 0;}
                to {bottom: 30px; opacity: 1;}
            }

            @keyframes fadein {
                from {bottom: 0; opacity: 0;}
                to {bottom: 30px; opacity: 1;}
            }

            @-webkit-keyframes fadeout {
                from {bottom: 30px; opacity: 1;}
                to {bottom: 0; opacity: 0;}
            }

            @keyframes fadeout {
                from {bottom: 30px; opacity: 1;}
                to {bottom: 0; opacity: 0;}
            } 
        </style>     
        
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
                                    else{
                                        
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
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Delete Book</h1>
                            <div class="hs-line-4 font-alt black">
                                <!-- Choose the best products in our shop -->
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Shop</a>&nbsp;/&nbsp;<span>Single</span>
                            </div>
                            
                        </div> -->
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Product Content -->
                    <div class="row mb-60 mb-xs-30">
                        
                        <!-- Product Images -->
                        <div class="col-md-4 mb-md-30">
                            
                            <div class="post-prev-img">
                            
                                <a href="<?php echo $buku[0]->imgUrl; ?>" class="lightbox-gallery-3 mfp-image"><img src="<?php echo $buku[0]->imgUrl; ?>" alt="" /></a>
                                <!-- <div class="intro-label">
                                    <span class="label label-danger bg-red">Sale</span>
                                </div> -->
                            </div>
                            
                            <div class="row">
                                
                                <!-- <div class="col-xs-3 post-prev-img">
                                    <a href="images/shop/shop-prev-2.jpg" class="lightbox-gallery-3 mfp-image"><img src="images/shop/shop-prev-2.jpg" alt="" /></a>
                                </div>
                                
                                <div class="col-xs-3 post-prev-img">
                                    <a href="images/shop/shop-prev-3.jpg" class="lightbox-gallery-3 mfp-image"><img src="images/shop/shop-prev-3.jpg" alt="" /></a>
                                </div>
                                
                                <div class="col-xs-3 post-prev-img">
                                    <a href="images/shop/shop-prev-4.jpg" class="lightbox-gallery-3 mfp-image"><img src="images/shop/shop-prev-4.jpg" alt="" /></a>
                                </div> -->
                                
                            </div>
                            
                        </div>
                        <!-- End Product Images -->
                        
                        <!-- Product Description -->
                        <div class="col-sm-8 col-md-8 mb-xs-40">
                            
                            <h3 class="mt-0"><?php echo $buku[0]->title; ?></h3>
                            
                            <hr class="mt-0 mb-30"/>
                            
                            <div class="mb-30">
                                <form method="post" action="<?php echo base_url('index.php/MainController/actionDeleteBook'); ?>" class="form">
                                    <!-- <input type="number" class="input-lg round" min="1" max="100" value="1" />
                                    <a href="#" class="btn btn-mod btn-large btn-round">Add to Cart</a>  -->
                                    <label>Title</label>
                                    <input type="text" class="form-control input-lg" id="title" name="title" value="<?php echo $buku[0]->title; ?>" placeholder="Title" readonly>
                                    <input type="hidden" name="asin" value="<?php echo $buku[0]->ASIN; ?>">
                                    <br><br>
                                    <label>Author</label>
                                    <input type="text" class="form-control input-lg" id="author" name="author" value="<?php echo $buku[0]->author; ?>" placeholder="Author" readonly>
                                    <br><br>
                                    <label>Genre</label>
                                    <input type="text" class="form-control input-lg" id="genre" name="genre" value="<?php echo $buku[0]->genre; ?>" placeholder="Genre" readonly>
                                    <br><br>
                                    <input type="submit" style="width: 200px;" name="cancel" id="cancel" class="btn btn-mod btn-border btn-large btn-round" value="Cancel">
                                    <input onclick="myFunction()" type="submit" style="width: 200px;"name="delete" id="delete" class="btn btn-mod btn-border btn-large btn-round" value="Delete">
                                    <div id="snackbar">Deleted Successfully</div>
                                </form>
                            </div>
                            
                            <hr class="mt-0 mb-30"/> 
                            
                        </div>
                        <!-- End Product Description -->
                        
                        
                    </div>
                    <!-- End Product Content -->
                
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                    <a href="#top"><img src="<?php echo base_url('assets/images/logo-footer.png'); ?>" width="78" height="36" alt="" /></a>
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
        <script>
            function myFunction() {
            // Get the snackbar DIV
            var x = document.getElementById("snackbar");

            // Add the "show" class to DIV
            x.className = "show";

            // After 3 seconds, remove the show class from DIV
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        } 
        </script>
        <?php 
            echo $js;
        ?>
        
    </body>
</html>
