<!DOCTYPE html>
<html>
    <head>
        <title>E-Library - Login Register</title>
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
                            
                            <!-- Languages -->
                            <!-- <li>
                                <a href="#" class="mn-has-sub">Eng <i class="fa fa-angle-down"></i></a>
                                
                                <ul class="mn-sub">
                                    
                                    <li><a href="">English</a></li>
                                    <li><a href="">France</a></li>
                                    <li><a href="">Germany</a></li>
                                    
                                </ul>
                                
                            </li> -->
                            <!-- End Languages -->
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="small-section bg-dark-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">My Account</h1>
                            <!-- <div class="hs-line-4 font-alt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </div> -->
                        </div>
                        
                        <!-- <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>My Account</span>
                            </div>
                            
                        </div> -->
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xxs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs">
                            
                            <li class="<?php echo $activeLogin; ?>">
                                <a href="#mini-one" data-toggle="tab">Login</a>
                            </li>
                            
                            <li class="<?php echo $activeRegister; ?>">
                                <a href="#mini-two" data-toggle="tab">Registration</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- End Nav Tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text">
                        
                        <div class="tab-pane fade in <?php echo $activeLogin; ?>" id="mini-one">
                            
                            <!-- Login Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
                                    <?php
                                        $attributes = array(
                                            'class' => 'form contact-form',
                                            'id' => 'contact_form'
                                        );
                                        
                                        if(isset($error_message_login2)){
                                            echo "<p><strong style='color:red'> $error_message_login2 </strong></p>";
                                        }
                                        echo form_open('MainController/actionLogin', $attributes);
                                    ?>
                                        <div class="clearfix">
                                            
                                            <!-- Username -->
                                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'email_login',
                                                    'id'            => 'email_login',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Email'
                                                );
                                                echo form_input($data);
                                                echo form_error('email_login');
                                            ?>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'password_login',
                                                    'id'            => 'password_login',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Password'
                                                );
                                                echo form_password($data);
                                                echo form_error('password_login');
                                            ?>
                                            </div>
                                                
                                        </div>

                                        <div class="pt-10">
                                        <?php
                                            $data = array(
                                                'id'            => 'login-btn',
                                                'class'         => 'submit_btn btn btn-mod btn-medium btn-round btn-full',
                                                'value'       => 'Login'
                                            );
                                            echo form_submit($data);
                                        ?>
                                        </div>
                                        
                                    <?php
                                        echo form_close();
                                    ?>
                                    
                                </div>
                            </div>
                            <!-- End Login Form -->
                            
                        </div>
                        
                        <div class="tab-pane fade in <?php echo $activeRegister; ?>" id="mini-two">
                            
                            <!-- Registry Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
                                    <?php
                                        $attributes = array(
                                            'class' => 'form contact-form',
                                            'id' => 'contact_form'
                                        );
                                        if(isset($error_message_register)){
                                            echo "<p><strong style='color:red'> $error_message_register </strong></p>";
                                        }
                                        echo form_open('MainController/actionRegister', $attributes);
                                    ?>
                                        <div class="clearfix">
                                            
                                            <!-- Email -->
                                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'email',
                                                    'id'            => 'email',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Email'
                                                );
                                                echo form_input($data);
                                                echo form_error('email');
                                            ?>
                                            </div>
                                            
                                            <!-- Username -->
                                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'nim',
                                                    'id'            => 'nim',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'NIM'
                                                );
                                                echo form_input($data);
                                                echo form_error('nim');
                                            ?>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 'password',
                                                    'id'            => 'password',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Password'
                                                );
                                                echo form_password($data);
                                                echo form_error('password');
                                            ?>
                                            </div>
                                            
                                            <!-- Re-enter Password -->
                                            <div class="form-group">
                                            <?php
                                                $data = array(
                                                    'name'          => 're-password',
                                                    'id'            => 're-password',
                                                    'class'         => 'input-md round form-control',
                                                    'placeholder'   => 'Re-enter Password'
                                                );
                                                echo form_password($data);
                                                echo form_error('re-password');
                                            ?>
                                            </div>
                                                
                                        </div>
                                        
                                        <!-- Send Button -->
                                        <div class="pt-10">
                                        <?php
                                            $data = array(
                                                'id'            => 'reg-btn',
                                                'class'         => 'submit_btn btn btn-mod btn-medium btn-round btn-full',
                                                'value'       => 'Register'
                                            );
                                            echo form_submit($data);
                                        ?>
                                        </div>
                                    <?php
                                        echo form_close();
                                    ?>    
                                </div>
                            </div>
                            <!-- End Registry Form -->
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            
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
        <?php 
            echo $js;
        ?>
        
    </body>
</html>
