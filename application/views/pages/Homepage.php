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
                                <a href="#" class="mn-has-sub">Home <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub Multilevel -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">Multi Page</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="mp-index.html">Main Demo</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-01.html">Image Parallax 1</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-02.html">Image Parallax 2</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-03.html">Image Parallax 3</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-04.html">Image Parallax 4</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-06.html">Image Parallax 5</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-12.html">Fullwidth Image</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-05.html">Text Rotator</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-07.html">Slider Fullscreen</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-08.html">Slider Zoom Effect</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-09.html">Slider Fullwidth</a>
                                            </li>
                                            
                                            
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->
                                    
                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">&nbsp;</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="mp-index-10.html">Slider Background</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-17.html">Slider Revolution 1</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-18.html">Slider Revolution 2</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-20.html">Content Slider</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-11.html">With Play Button</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-13.html">BG Video Fullwidth</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-14.html">BG Video Fullscreen 1</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-15.html">BG Video Fullscreen 2</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-19.html">BG HTML5 Video (local)</a>
                                            </li>
                                            <li>
                                                <a href="mp-index-16.html">Agency Header</a>
                                            </li>
                                            <li>
                                                <a href="intro.html#special-demos">Special Demos <span class="label-new round">New</span></a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->
                                    
                                    
                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">One Page</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="index.html">Main Demo</a>
                                            </li>
                                            <li>
                                                <a href="index-01.html">Image Parallax 1</a>
                                            </li>
                                            <li>
                                                <a href="index-02.html">Image Parallax 2</a>
                                            </li>
                                            <li>
                                                <a href="index-03.html">Image Parallax 3</a>
                                            </li>
                                            <li>
                                                <a href="index-04.html">Image Parallax 4</a>
                                            </li>
                                            <li>
                                                <a href="index-06.html">Image Parallax 5</a>
                                            </li>
                                            <li>
                                                <a href="index-12.html">Fullwidth Image</a>
                                            </li>
                                            <li>
                                                <a href="index-05.html">Text Rotator</a>
                                            </li>
                                            <li>
                                                <a href="index-07.html">Slider Fullscreen</a>
                                            </li>
                                            <li>
                                                <a href="index-08.html">Slider Zoom Effect</a>
                                            </li>
                                            <li>
                                                <a href="index-09.html">Slider Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->
                                    
                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">&nbsp;</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="index-10.html">Slider Background</a>
                                            </li>
                                            <li>
                                                <a href="index-17.html">Slider Revolution 1</a>
                                            </li>
                                            <li>
                                                <a href="index-18.html">Slider Revolution 2</a>
                                            </li>
                                            <li>
                                                <a href="index-20.html">Content Slider</a>
                                            </li>
                                            <li>
                                                <a href="index-11.html">With Play Button</a>
                                            </li>
                                            <li>
                                                <a href="index-13.html">BG Video Fullwidth</a>
                                            </li>
                                            <li>
                                                <a href="index-14.html">BG Video Fullscreen 1</a>
                                            </li>
                                            <li>
                                                <a href="index-15.html">BG Video Fullscreen 2</a>
                                            </li>
                                            <li>
                                                <a href="index-19.html">BG HTML5 Video (local)</a>
                                            </li>
                                            <li>
                                                <a href="index-16.html">Agency Header</a>
                                            </li>
                                            <li>
                                                <a href="intro.html#special-demos">Special Demos <span class="label-new round">New</span></a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->
                                    
                                </ul>
                                <!-- End Sub Multilevel -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub active">Pages <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub Multilevel -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">Group 1</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="pages-about-1.html">About Us 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-about-2.html">About Us 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-about-3.html">About Us 3</a>
                                            </li>
                                            <li>
                                                <a href="pages-services-1.html">Services 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-services-2.html">Services 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-services-3.html">Services 3</a>
                                            </li>
                                            <li>
                                                <a href="pages-clients.html">Clients</a>
                                            </li>
                                            <li>
                                                <a href="pages-landing.html">Landing Page</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">Group 2</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="pages-team-1.html">Team 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-team-2.html">Team 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-faq-1.html">FAQ 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-faq-2.html">FAQ 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-pricing-1.html">Pricing 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-pricing-2.html">Pricing 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-contact-1.html">Contact 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-contact-2.html">Contact 2</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        <a class="mn-group-title">Group 3</a>
                                        
                                        <ul>
                                            <li>
                                                <a href="pages-gallery-1col.html">Gallery Col 1</a>
                                            </li>
                                            <li>
                                                <a href="pages-gallery-2col.html">Gallery Col 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-gallery-3col.html">Gallery Col 3</a>
                                            </li>
                                            <li>
                                                <a href="pages-gallery-4col.html">Gallery Col 4</a>
                                            </li>
                                            <li>
                                                <a href="pages-gallery-6col.html">Gallery Col 6</a>
                                            </li>
                                            <li>
                                                <a href="pages-account.html">Login / Register</a>
                                            </li>
                                            <li>
                                                <a href="pages-under-construction.html">Under Construction</a>
                                            </li>
                                            <li>
                                                <a href="pages-404.html">Error 404</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                
                                </ul>
                                <!-- End Sub Multilevel -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Elements <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub Multilevel -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <li class="mn-sub-multi">
                                        
                                        <ul>
                                            <li>
                                                <a href="elements-accordions.html"><i class="fa fa-plus-circle fa-sm"></i> Accordions</a>
                                            </li>
                                            <li>
                                                <a href="elements-bars.html"><i class="fa fa-tachometer fa-sm"></i> Bars (Progress)</a>
                                            </li>
                                            <li>
                                                <a href="elements-buttons.html"><i class="fa fa-link fa-sm"></i> Buttons</a>
                                            </li>
                                            <li>
                                                <a href="elements-features.html"><i class="fa fa-th-large fa-sm"></i> Features Box</a>
                                            </li>
                                            <li>
                                                <a href="elements-forms.html"><i class="fa fa-align-justify fa-sm"></i> Form Fields</a>
                                            </li>
                                            <li>
                                                <a href="elements-grid.html"><i class="fa fa-th fa-sm"></i> Grid</a>
                                            </li>
                                            <li>
                                                <a href="elements-icons-et.html"><i class="fa fa-heart-o fa-sm"></i> Icons Et-line</a>
                                            </li>
                                            <li>
                                                <a href="elements-icons-fe.html"><i class="fa fa-heart fa-sm"></i> Icons Font Awesome</a>
                                            </li>
                                            <li>
                                                <a href="elements-messages.html"><i class="fa fa-comment fa-sm"></i> Messages</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        
                                        <ul>
                                            <li>
                                                <a href="elements-page-titles.html"><i class="fa fa-header fa-sm"></i> Page Titles</a>
                                            </li>
                                            <li>
                                                <a href="elements-sliders.html"><i class="fa fa-chevron-circle-right fa-sm"></i> Sliders</a>
                                            </li>
                                            <li>
                                                <a href="elements-tabs.html"><i class="fa fa-columns fa-sm"></i> Tabs</a>
                                            </li>
                                            <li>
                                                <a href="elements-typography.html"><i class="fa fa-font fa-sm"></i> Typography</a>
                                            </li>
                                            <li>
                                                <a href="elements-video-sound.html"><i class="fa fa-youtube-play fa-sm"></i> Video / Sound</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-dark.html"><i class="fa fa-header fa-sm"></i> Header Dark</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-dark-transparent.html"><i class="fa fa-header fa-sm"></i> Header Dark Transp</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-white.html"><i class="fa fa-header fa-sm"></i> Header White</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-white-transparent.html"><i class="fa fa-header fa-sm"></i> Header White Transp</a>
                                            </li>
                                        </ul>
                                    </li>
                                
                                </ul>
                                <!-- End Sub Multilevel -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Portfolio <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Boxed <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-boxed-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Boxed (Gutter) <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-boxed-gutter-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-gutter-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-gutter-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-gutter-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-gutter-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Boxed (Titles) <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-boxed-titles-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-titles-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-titles-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-titles-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-boxed-titles-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Wide <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-wide-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Wide (Gutter) <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-wide-gutter-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-gutter-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-gutter-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-gutter-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-gutter-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Wide (Titles) <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-wide-titles-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-titles-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-titles-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-titles-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-wide-titles-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Masonry <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-masonry-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-masonry-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-masonry-4col.html">4 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-masonry-5col.html">5 Columns</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-masonry-blackhover.html">Black Hovers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="portfolio-single-1.html">Single 1</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-single-2.html">Single 2</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-single-3.html">Single 3</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-single-4.html">Single 4</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-single-5.html">Single 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="portfolio-parallax.html">Parallax</a>
                                    </li>
                                    
                                    <li>
                                        <a href="portfolio-promo.html">Promo</a>
                                    </li>
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Blog <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Classic <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-classic-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="blog-classic-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="blog-classic-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Columns <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-columns-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-columns-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-columns-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Masonry <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-masonry-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-single-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Shop <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub to-left">
                                    
                                    <li>
                                        <a href="shop-columns-2col.html">2 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-columns-3col.html">3 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-columns-4col.html">4 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-single.html">Single Product</a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">Shopping Cart</a>
                                    </li>
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                            
                            <!-- Search -->
                            <li>
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
                                
                            </li>
                            <!-- End Search -->
                            
                            <!-- Cart -->
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i> Cart(0)</a>
                            </li>
                            <!-- End Cart -->
                            
                            <!-- Languages -->
                            <li>
                                <a href="#" class="mn-has-sub">Eng <i class="fa fa-angle-down"></i></a>
                                
                                <ul class="mn-sub">
                                    
                                    <li><a href="">English</a></li>
                                    <li><a href="">France</a></li>
                                    <li><a href="">Germany</a></li>
                                    
                                </ul>
                                
                            </li>
                            <!-- End Languages -->
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-30 parallax-3" data-background="images/full-width-images/section-bg-23.jpg">
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
            
            
            <!-- Alternative Services Section -->
            <section class="page-section" id="start">
                <div class="container relative">
                    
                    <!-- Section Headings -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 align-center">
                            
                            <h3 class="font-alt mb-70 mb-sm-40">We provide best digital services</h3>
                            
                            <div class="section-text mb-80 mb-xs-40">
                                Curabitur eu adipiscing lacus, a iaculis diam. Nullam placerat blandit auctor. Nulla accumsan ipsum et nibh rhoncus, eget tempus sapien ultricies. Donec mollis lorem vehicula.
                            </div>
                                                     
                        </div>
                    </div>
                    <!-- End Section Headings -->
                    
                    <!-- Service Grid -->
                    <div class="alt-service-grid">
                        <div class="row">
                            
                            
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">                                
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-gift"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Branding</h3>
                                        Lorem ipsum dolor sit amet,  elit. Vitae gravida nibh. Morbi dignissim nunc at risus convallis.
                                    </div>
                                    
                                </div>
                                <!-- End Service Item -->
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-desktop"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Web Design</h3>
                                        Vivamus neque orci, ultricies blandit ultricies vel, semper interdum elit, non placerat suscipit.
                                    </div>
                                    
                                    
                                </div>
                                <!-- End Service Item -->
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-bug"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Logo Design</h3>
                                        Lorem ipsum dolor sit amet,  elit. Vitae gravida nibh. Morbi dignissim nunc at risus convallis.
                                    </div>
                                    
                                    
                                </div>
                                <!-- End Service Item -->
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Illustrations</h3>
                                        Semper interdum ultricies elit, non placerat nisi suscipit nunc at risus convallis.
                                    </div>
                                    
                                </div>
                                <!-- End Service Item -->
                                
                            </div>
                            
                            
                            <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                                
                                <div class="alt-services-image">
                                    <img src="images/promo-2.png" alt="" />
                                </div>
                                
                            </div>
                            
                            
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Development</h3>
                                        Morbi dignissim nunc at risus convallis. Semper interdum ultricies elit, non placerat nisi suscipit.
                                    </div>
                                    
                                </div>
                                <!-- End Service Item -->
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-camera"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Photography</h3>
                                        Lorem ipsum dolor sit amet,  elit. Vitae gravida nibh. Morbi dignissim nunc at risus convallis.
                                    </div>
                                    
                                    
                                </div>
                                <!-- End Service Item -->
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Marketing</h3>
                                        Neque orci, ultricies blandit ultricies vel, semper interdum ultricies elit, non placerat nisi suscipit.
                                    </div>
                                    
                                    
                                </div>
                                <!-- End Service Item -->
                                
                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item">
                                        <div class="alt-service-icon">
                                            <i class="fa fa-life-ring"></i>
                                        </div>
                                        <h3 class="alt-services-title font-alt">Support</h3>
                                        Lorem ipsum dolor sit amet,  elit. Vitae gravida nibh dignissim nunc risus convallis.
                                    </div>
                                    
                                    
                                </div>
                                <!-- End Service Item -->
                                
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- End Service Grid -->
                    
                </div>
            </section>
            <!-- End Alternative Services Section -->            
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-md-7 mb-sm-40">
                            
                            <!-- Gallery -->
                            <div class="work-full-media mt-0 white-shadow">
                                <ul class="clearlist work-full-slider owl-carousel">
                                    <li>
                                        <img src="images/promo-3.png" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/portfolio/full-project-2.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- End Gallery -->
                            
                        </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1">
                            
                            <!-- About Project -->
                            <div class="text">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">Creative Project</h3>
                                
                                <p>
                                    Phasellus facilisis mauris vel velit molestie pellentesque. Donec rutrum, tortor ut elementum venenatis, purus magna bibendum nisl, ut accumsan ipsum erat eu sapien. 
                                </p>
                                
                                <div class="mt-40">
                                    <a href="#" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">View online</a>
                                </div>
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-md-5 col-lg-4 mb-sm-40">
                            
                            <!-- About Project -->
                            <div class="text">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">Creative Project</h3>
                                <p>
                                    Phasellus facilisis mauris vel velit molestie pellentesque. Donec rutrum, tortor ut elementum venenatis, purus magna bibendum nisl, ut accumsan ipsum erat eu sapien. 
                                </p>
                                
                                <div class="mt-40">
                                    <a href="#" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">View online</a>
                                </div>
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                        
                        <div class="col-md-7 col-lg-offset-1">
                            
                            <!-- Work Gallery -->
                            <div class="work-full-media mt-0 white-shadow">
                                <ul class="clearlist work-full-slider owl-carousel">
                                    <li>
                                        <img src="images/promo-4.png" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/portfolio/full-project-4.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- End Work Gallery -->
                            
                        </div>
                        
                     </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            
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
            <section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="images/full-width-images/section-bg-2.jpg">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            
                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <h3 class="banner-heading font-alt">Looking for exclusive digital services?</h3>
                                    <div class="banner-decription">
                                        Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. 
                                        Integer non dapibus diam, ac eleifend lectus.
                                    </div>
                                    <div class="local-scroll">
                                        <a href="#contact" class="btn btn-mod btn-w btn-medium btn-round">Lets talk</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-6 banner-image wow fadeInUp">
                            <img src="images/promo-1.png" alt="" />
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <a href="#top"><img src="images/logo-footer.png" width="78" height="36" alt="" /></a>
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links -->  
                    
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