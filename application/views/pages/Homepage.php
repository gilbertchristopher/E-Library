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
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Home</a>    
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub active">Pages</a>
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Elements</a>
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Portfolio</a>
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Blog</a>
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Shop</a>
                            </li>
                            <!-- End Item With Sub -->
                            
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
            <section class="page-section bg-dark-alfa-30 parallax-3" data-background="assets/images/full-width-images/section-bg-23.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Landing Page</h1>
                            <div class="hs-line-4 font-alt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Landing Page</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Text Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-text align-center">
                                <blockquote>
                                    <p>
                                        Curabitur eu adipiscing lacus, a iaculis diam. Nullam placerat blandit auctor. 
                                        Nulla accumsan ipsum et nibh rhoncus, eget tempus sapien ultricies. Donec mollis 
                                        lorem vehicula.
                                    </p>
                                </blockquote>
                                
                                <div class="local-scroll">
                                    <a href="#start" class="btn btn-mod btn-border btn-medium btn-round mb-10">See More</a>
                                    <span class="hidden-xs">&nbsp;</span>
                                    <a href="http://themeforest.net/user/theme-guru/portfolio" class="btn btn-mod btn-medium btn-round mb-10">Buy Now</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Text Section -->
            
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