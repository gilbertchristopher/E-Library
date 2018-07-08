<!DOCTYPE html>
<html>
    <head>
        <title>E-Library - User</title>
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
            
            <section class="page-section bg-dark-alfa-30" data-background="<?php echo base_url('assets/images/full-width-images/section-bg-10.jpg'); ?>">
                <div class="relative container align-left">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Hello, <?php echo $nim; ?></h1>
                            <!-- <div class="hs-line-4 font-alt">
                                Choose the best products in our shop
                            </div> -->
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

                        <!-- Form -->
                        <form method="post" action="<?php echo base_url('index.php/MainController/searchUserPage'); ?>" id="form" role="form" class="form">
                        
                            <!-- Col -->   
                            <div class="col-sm-6 mb-40">
                            
                                <div class="mb-20 mb-md-10">
                                    <!-- Search box -->
                                    <input type="text" name="searchBookList" id="searchBookList" style="height: 48px;" class="input-md form-control" placeholder="Title / Author / Keyword" maxlength="300">
                                </div>
                            
                            </div>
                            <!-- End Col -->
                        
                            <!-- Col -->
                            <div class="col-sm-2 mb-40">  
                                <div class="mb-20 mb-md-10 align-center">
                                    <input type="submit" name="btnSearchBookList" id="btnSearchBookList" class="btn btn-mod btn-border btn-large btn-round" value="Search">
                                </div>   
                            </div>
                            <!-- End Col -->

                        </form>
						<!-- End Form -->

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
                                     <?php 
                                        if($this->input->post('btnSearchBookList')){
                                            if(count($user) <= 20){
                                                echo 'Showing 1–"'.count($user).'" of "'.count($user).'" results';
                                            } 
                                            else{
                                                echo 'Showing 1–20 of '.count($user).'" results';
                                            }
                                        }
                                     ?>
                                     
                                </div>
                                
                                <!-- <div class="right">
                                    <form method="post" action="#" class="form">
                                        <select class="input-md round">
                                            <option>Default sorting</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div> -->
                                
                            </div>
                            <!-- End Shop options -->
                            
                            <div class="row multi-columns-row">
                        
                                <!-- Shop Item -->
                                <?php
                                    if($this->input->post('btnSearchBookList')){
                                        $no = $this->uri->segment('3') + 1;
                                        $tes = 0;
                                        foreach($user as $u){ 
                                            if (count($user) == $tes){
                                                break;
                                            }
                                            echo '<div class="col-md-3 col-lg-3 mb-60 mb-xs-40">';
                                                //Gambar Cover Buku
                                                echo '<div class="post-prev-img">';
                                                    echo "<a href='shop-single.html'><img style='width: 370px; height: 385px;' src='".$user[$tes]->imgUrl."' alt='' /></a>";
                                                echo '</div>';
                                                
                                                //Nama buku
                                                echo '<div class="post-prev-title font-alt align-center">';
                                                    $teks = "...";
                                                    if (strlen($user[$tes]->title) > 30) {
                                                        echo '<a title="'.$user[$tes]->title.'" href="shop-single.html">'.substr($user[$tes]->title,0,30).$teks.'</a>';
                                                    }
                                                    else {
                                                        echo '<a title="'.$user[$tes]->title.'" href="shop-single.html">'.$user[$tes]->title.$teks.'</a>';
                                                    }
                                                echo '</div>';
                                            echo '</div>';      
                                            
                                            $tes++;
                                        }
                                    }
                                    else {
                                        //count($searchres) --> sementara di komen
                                        for($i = 0;$i < 20;$i++){ //sementara maks tampil 20, pagination blm jalan soale
                                            echo '<div class="col-md-3 col-lg-3 mb-60 mb-xs-40">';
                                                echo '<div class="post-prev-img">';
                                                    echo '<a href="'.$searchres[$i]->imgUrl.'" class="lightbox-gallery-3 mfp-image"><img src="'.$searchres[$i]->imgUrl.'" alt="" style="width: 350px; height: 365px;"/></a>';
                                                    //echo "<a href='shop-single.html'><img class='image' style='width: 350px; height: 365px;' src='".$searchres[$i]->imgUrl."' alt='' /></a>";
                                                echo '</div>';
                                                        
                                                //Form Button delete edit
                                                echo '<form method="POST" action="'.base_url("index.php/MainController/adminEditOrDelete").'" id="form" role="form" class="form">';
                                                    echo '<input type="hidden" name="asin" value="'.$searchres[$i]->ASIN.'">';                         
                                                echo '</form>';
                                                //End Form

                                                        //NAMA BUKU
                                                        echo '<div class="post-prev-title font-alt align-center">';
                                                            $teks = "...";
                                                            if (strlen($searchres[$i]->title) > 30) {
                                                                echo '<a title="'.$searchres[$i]->title.'" href="shop-single.html">'.substr($searchres[$i]->title,0,30).$teks.'</a>';
                                                            }
                                                            else {
                                                                echo '<a title="'.$searchres[$i]->title.'" href="shop-single.html">'.$searchres[$i]->title.$teks.'</a>';
                                                    }
                                                echo '</div>';
                                            echo '</div>';
                                        }
                                    }
                                ?>
                                </div>
                                <!-- End Shop Item -->
                                
                            </div>
                            
                            <!-- Pagination -->
                            <div class="pagination">
                                <!-- <a href=""><i class="fa fa-angle-left"></i></a>
                                <a href="" class="active">1</a>
                                <a href="">2</a>
                                <a href="">3</a>
                                <a class="no-active">...</a>
                                <a href="">9</a>
                                <a href=""><i class="fa fa-angle-right"></i></a> -->
                                <?php 
                                    echo $this->pagination->create_links();
                                ?>
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
