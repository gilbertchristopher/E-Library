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

            if(isset($this->session->userdata['logged_user'])){
                $nim = ($this->session->userdata['logged_user']['nim']);
                $pw = ($this->session->userdata['logged_user']['password']);
                $email = ($this->session->userdata['logged_user']['email']);
                $salt = ($this->session->userdata['logged_user']['nim']);
            }
        ?>      
        
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
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
            <section class="page-section bg-dark-alfa-30 parallax-3" data-background="<?php echo base_url('assets/images/full-width-images/section-bg-21.jpg'); ?>">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Admin Page</h1>
                        </div>
                        
                        <div class="col-md-4 mt-30">
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
                            
                            <!-- Portfolio Section -->
                            <section> <!--class="page-section"-->
                                <div class="container relative">
                                    
                                    <!-- Works Filter -->                    
                                    <div class="works-filter font-alt align-center">
                                        <!-- Form -->
                                        <form method="post" action="<?php echo base_url('index.php/MainController/adminPageFilter'); ?>" id="form" role="form" class="form">
                                            <div class="col-md-12" align="center">
                                                <div class="col-md-6 col-md-offset-2">
                                                    <select class="input-md form-control" style="height: 48px;" name="search_bos">
                                                        <?php
                                                            for($i = 0; $i < count($genress); $i++){
                                                                echo "<option value=".$genress[$i]->genre.">".$genress[$i]->genre."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="submit" name="search_submit" id="search_submit" class="btn btn-mod btn-border btn-large btn-round" value="Search"> 
                                                </div>
                                            </div>    
                                                                     
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                    <br><br>                    
                                    <!-- End Works Filter -->

                                    <div class="row">
  
                                        <!-- Content Book List -->
                                        <div class="col-sm-12">
                                    
                                            <!-- Works Grid -->
                                            <ul class="works-grid work-grid-gut clearfix font-alt hover-white" id="work-grid">
                                                
                                                <!-- Work Item (Lightbox) -->
                                                <?php
                                                //count($searchres) --> sementara di komen
                                                for($i = 0;$i < 20;$i++){ //sementara maks tampil 20, pagination blm jalan soale
                                                    echo '<div class="col-md-3 col-lg-3 mb-60 mb-xs-40">';
                                                        echo '<div class="post-prev-img">';
                                                        ?>
                                                        
                                                        <a href="<?php echo $searchres[$i]->imgUrl; ?>" class="lightbox-gallery-3 mfp-image"><img style="width: 350px; height: 365px" src="<?php echo $searchres[$i]->imgUrl; ?>" alt="" /></a>
                                                            <?php
                                                            //echo '<a href="$searchres[$i]->imgUrl;"><img class="lightbox-gallery-3 mfp-image" style="width: 350px; height: 365px;" src=".$searchres[$i]->imgUrl." alt="" /></a>';
                                                        echo '</div>';
                                                        
                                                ?>
                                                    <!-- Form Button delete edit -->
                                                    <form method="POST" action="<?php echo base_url('index.php/MainController/adminEditOrDelete'); ?>" id="form" role="form" class="form">
                                                        <input type="hidden" name="asin" value="<?php echo $searchres[$i]->ASIN; ?>"> 
                                                        <div class="intro-label">
                                                            <button name="btnEditBook" id="btnEditBook" class="btn btn-success" type="submit">
                                                                <i class="fa fa-pencil" style="color: black;"></i>
                                                            </button>
                                                            <button name="btnDeleteBook" id="btnDeleteBook" class="btn btn-danger" type="submit">
                                                                <i class="fa fa-close" style="color: black;"></i>
                                                            </button>
                                                        </div>                           
                                                    </form>
                                                    <!-- End Form -->  

                                                <?php
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
                                                ?>
                                                <!-- End Work Item -->
                                                
                                            </ul>
                                            <!-- End Works Grid -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End Portfolio Section -->

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
                        <!-- End Service Item -->
                        
                        <!-- Service Item -->
                        
                        
                        <div class="tab-pane fade col-md-4 col-md-offset-4" id="add">

                        <?php
                            $attributes = array(
                                'class' => 'form contact-form',
                                'id' => 'contact_form'
                            );
                            echo form_open('MainController/actionAdd', $attributes);
                        ?>
                        
                        <!--ASIN-->
                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'ASIN',
                                                    'id'            => 'ASIN',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'ASIN',
                                                    'pattern'       => '.{3,100}'
                                                );
                                                echo form_input($data);
                                                echo form_error('asin');
                                            ?>
                            </div>
                            
                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'title',
                                                    'id'            => 'title',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Title',
                                                    'pattern'       => '.{3,100}'
                                                );
                                                echo form_input($data);
                                                echo form_error('title');
                                            ?>
                            </div>

                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'author',
                                                    'id'            => 'author',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Author',
                                                    'pattern'       => '.{3,100}'
                                                );
                                                echo form_input($data);
                                                echo form_error('email_login');
                                            ?>
                            </div>

                            <div class="form-group">
                                <select class="input-md form-control" style="height: 48px;" name="search_bos">
                                    <?php
                                        for($i = 0; $i < count($genress); $i++){
                                            echo "<option value=".$genress[$i]->genre.">".$genress[$i]->genre."</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <form id="form1" runat="server">
                                <img id="blah" src="#" alt="your image" />
                                <input type='file' onchange="readURL(this);" />   
                            </form>

                            <div class="pt-10">
                                        <?php
                                            $data = array(
                                                'id'            => 'add-btn',
                                                'class'         => 'submit_btn btn btn-mod btn-medium btn-round btn-full',
                                                'value'       => 'add'
                                            );
                                            echo form_submit($data);
                                        ?>
                            </div>
                                <?php
                                    echo form_close();
                                ?>
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
