<?php echo doctype('html5');?>
<html>
<head>
    <title>E-Library</title>
    <?php echo meta('viewport','width=device-width, initial-scale=1.0, maximum-scale=1.0'); ?>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">

    <?php
        echo $css;
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
                            <img src="images/logo-dark.png" alt="" />
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
                                <a href="#" class="mn">Home</a>    
                            </li>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <li>
                                <a href="#" class="mn">Catalog</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li>
                                <a href="#" class="mn">About us</a>
                            </li>
                            <!-- End Item -->
                            
                            <!-- Item -->
                            <li>
                                <a href="<?php echo base_url('index.php/MainController/loginRegisterPage'); ?>" class="mn">Login / Register</a>
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
            <!-- <section class="page-section bg-dark-alfa-30 parallax-3" data-background="assets/images/full-width-images/section-bg-23.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">E-Library</h1>
                            <div class="hs-line-4 font-alt">
                                Search, Book, and get notified
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section> -->
            <!-- End Head Section -->

            <!-- Head Section -->
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">E-Library</h1>
                            <div class="hs-line-4 font-alt black">
                                Search, Book, and Notified
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->

            <!-- Search box -->

            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Search
                    </h2>
                    
                    <!-- Row -->
                    <div class="row">
                        
                        <!-- Col -->
                        
                        <div class="col-sm-2 mb-40">
                            
                            <!-- Kosongin aja -->
                            
                        </div>
                        
                        <!-- End Col -->
                        
                        <!-- Col -->
                        
                        <div class="col-sm-8 mb-40">
                            
                            <!-- Form -->
                            <form method="post" action="<?php echo base_url('index.php/MainController/searchMainpage'); ?>" id="form" role="form" class="form">
                                
                                <div class="mb-20 mb-md-10">
                                    <!-- Search box -->
                                    <input type="text" name="search_keywords" id="search_keywords" class="input-md form-control" placeholder="Title / Author / Keyword" maxlength="300">
                                </div>
                                
                                
                                <div class="mb-20 mb-md-10 align-center">
                                    <input type="button" name="search_submit" id="search_submit" class="btn btn-mod btn-border btn-large btn-round" value="Search">
                                </div>
                                                            
                            </form>
							<!-- End Form -->
                            
                        </div>
                        
                        <!-- End Col -->
                        
                        <!-- Col -->
                        
                        <div class="col-sm-2 mb-40">
                            
                            <!-- Kosongin aja -->
                            
                        </div>
                        
                        <!-- End Col -->
                        
                    </div>
                    <!-- End Row -->
                    
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
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
        <?php 
            echo $js;
        ?>
</body>
</html>