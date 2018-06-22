<!DOCTYPE html>
<html>
    <head>
        <title>E-Library - User Page</title>
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
                            <img src="<?php echo base_url('assets/images/logo-dark.png'); ?>" alt="" />
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
                                <a href="#" class="mn-has-sub">Pages</a>
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
                                <a href="#" class="mn-has-sub active">Shop</a>
                            </li>
                            <!-- End Item With Sub -->
                            
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
            
            <section class="page-section bg-dark-alfa-30" data-background="<?php echo base_url('assets/images/full-width-images/section-bg-10.jpg'); ?>">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Shop</h1>
                            <div class="hs-line-4 font-alt">
                                Choose the best products in our shop
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Shop</a>&nbsp;/&nbsp;<span>Columns</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->

                            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">

                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Book List Search
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
                            <form method="post" action="#" id="form" role="form" class="form">

                                <div class="mb-20 mb-md-10">
                                    <!-- Search box -->
                                    <input type="text" name="searchBookList" id="searchBookList" class="input-md form-control" placeholder="Title / Author / Keyword" maxlength="300">
                                </div>
                                
                                <div class="mb-20 mb-md-10 align-center">
                                    <input type="button" name="btnSearchBookList" id="btnSearchBookList" class="btn btn-mod btn-border btn-large btn-round" value="Search">
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
                   
                    <div class="row">
  
                        <!-- Content Book List -->
                        <div class="col-sm-12">
                            
                            <!-- Shop options -->
                            <div class="clearfix mb-40">
                                
                                <div class="left section-text mt-10">
                                    <!-- tar ini otomtis dari DB di count dr hasil select -->
                                    Showing 1–4 of 23 results
                                </div>
                                
                                <div class="right">
                                    <form method="post" action="#" class="form">
                                        <select class="input-md round">
                                            <option>Default sorting</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- End Shop options -->
                            
                            <div class="row multi-columns-row">
                        
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-1.jpg'); ?>" alt="" /></a>
                                        
                                    </div>
                                    <!-- nama buku  -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">G-Star Polo Applique Jersey</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-2.jpg'); ?>" alt="" /></a>
                                    </div>
                                    
                                    <!-- nama buku  -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">Only & Sons Pique Polo Shirt</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-3.jpg'); ?>" alt="" /></a>
                                    </div>
                                    
                                    <!-- ini jadi nama buku tar -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">Longline Long Sleeve</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-4.jpg'); ?>" alt="" /></a>
                                    </div>
                                    <!-- nama buku -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">Polo Shirt With Floral Sleeves</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                            </div>
                            
                            <!-- Pagination -->
                            <div class="pagination">
                                <a href=""><i class="fa fa-angle-left"></i></a>
                                <a href="" class="active">1</a>
                                <a href="">2</a>
                                <a href="">3</a>
                                <a class="no-active">...</a>
                                <a href="">9</a>
                                <a href=""><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!-- End Pagination -->
                            
                        </div>
                        <!-- End Content Book List-->

                    </div>

                        
                    <!-- Divider -->
                    <br><br>
                    <!-- End Divider -->

                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Wait List Search
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
                            <form method="post" action="#" id="form" role="form" class="form">

                                <div class="mb-20 mb-md-10">
                                    <!-- Search box -->
                                    <input type="text" name="searchWaitList" id="searchWaitList" class="input-md form-control" placeholder="Title / Author / Keyword" maxlength="300">
                                </div>
                                
                                <div class="mb-20 mb-md-10 align-center">
                                    <input type="button" name="btnSearchWaitList" id="btnSearchWaitList" class="btn btn-mod btn-border btn-large btn-round" value="Search">
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

                    <div class="row">

                        <!-- Content Wait List -->
                        <div class="col-sm-12">
                            
                            <!-- Shop options -->
                            <div class="clearfix mb-40">
                                
                                <div class="left section-text mt-10">
                                    <!-- tar ini otomtis dari DB di count dr hasil select -->
                                    Showing 1–4 of 23 results
                                </div>
                                
                                <div class="right">
                                    <form method="post" action="#" class="form">
                                        <select class="input-md round">
                                            <option>Default sorting</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- End Shop options -->
                            
                            <div class="row multi-columns-row">
                        
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-5.jpg'); ?>" alt="" /></a>
                                        
                                    </div>
                                    <!-- nama buku  -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">G-Star Polo Applique Jersey</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-6.jpg'); ?>" alt="" /></a>
                                    </div>
                                    
                                    <!-- nama buku  -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">Only & Sons Pique Polo Shirt</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-7.jpg'); ?>" alt="" /></a>
                                    </div>
                                    
                                    <!-- ini jadi nama buku tar -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">Longline Long Sleeve</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                                <!-- Shop Item -->
                                <div class="col-md-3 col-lg-3 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="shop-single.html"><img src="<?php echo base_url('assets/images/shop/shop-prev-8.jpg'); ?>" alt="" /></a>
                                    </div>
                                    <!-- nama buku -->
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="shop-single.html">Polo Shirt With Floral Sleeves</a>
                                    </div>
                                    
                                </div>
                                <!-- End Shop Item -->
                                
                            </div>
                            
                            <!-- Pagination -->
                            <div class="pagination">
                                <a href=""><i class="fa fa-angle-left"></i></a>
                                <a href="" class="active">1</a>
                                <a href="">2</a>
                                <a href="">3</a>
                                <a class="no-active">...</a>
                                <a href="">9</a>
                                <a href=""><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!-- End Pagination -->
                            
                        </div>
                        <!-- End Content Wait List-->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0"/>
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
