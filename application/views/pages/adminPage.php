<!DOCTYPE html>
<html>
    <head>
        <title>E-Library - Admin</title>
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
                            
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-30 parallax-3" data-background="<?php echo base_url('assets/images/full-width-images/section-bg-21.jpg'); ?>">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Admin Page</h1>
                            <div class="hs-line-4 font-alt">
                                We provide the best digital solutions
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Services</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Services Section -->
            <section class="page-section" id="services">
                <div class="container relative">
                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tpl-alt-tabs font-alt pb-30 pb-sm-0">
                        <li class="active">
                            <a href="#manage" data-toggle="tab">
                                Manage
                            </a>
                        </li>
                        <li>
                            <a href="#add" data-toggle="tab">
                                Add
                            </a>
                        </li>
                        
                    </ul>
                    <!-- End Nav tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-tabs-cont">
                        
                        <!-- Service Item -->
                        <div class="tab-pane fade in active" id="manage">
                            
                            <div class="section-text">
                                <div class="row">
                                    <div class="col-md-4 mb-md-40 mb-xs-30">
                                        <blockquote class="mb-0">
                                            <p>
                                                A&nbsp;brand for a&nbsp;company is&nbsp;like a&nbsp;reputation 
                                                for a&nbsp;person. You earn reputation by&nbsp;trying to&nbsp;do&nbsp;hard 
                                                things well.
                                            </p>
                                            <footer>
                                                Jeff Bezos
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum 
                                        volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. 
                                        In maximus ligula metus pellentesque mattis.  
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. 
                                        Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. 
                                        Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. 
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- End Service Item -->
                        
                        <!-- Service Item -->
                        <div class="tab-pane fade" id="add">
                            
                            <div class="section-text">
                                <div class="row">
                                    <div class="col-md-4 mb-md-40 mb-xs-30">
                                        <blockquote class="mb-0">
                                            <p>
                                                It&nbsp;doesn&rsquo;t matter how many times&nbsp;I have to&nbsp;click, as&nbsp;long 
                                                as&nbsp;each click is&nbsp;a&nbsp;mindless, unambiguous choice.
                                            </p>
                                            <footer>
                                                Steve Krug
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        Cras mi tortor, laoreet id ornare et, accumsan non magna. Maecenas vulputate accumsan velit. 
                                        Curabitur a nulla ex. Nam a tincidunt ante. Vitae gravida turpis. Vestibulum varius
                                        nulla non nulla scelerisque tristique.
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. 
                                        Nam varius at ipsum id dignissim. Nam a tincidunt ante lorem. Pellentesque suscipit ante
                                        at ullamcorper pulvinar neque porttitor. 
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- End Service Item -->
                        
                        
                    </div>
                    <!-- End Tab panes -->
                    
                </div>
            </section>
            <!-- End Services Section -->
            
            
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
