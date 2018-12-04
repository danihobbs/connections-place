<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php bloginfo('name');?> <?php wp_title();?> </title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png">

    <?php wp_head();?>
</head>

<body <?php body_class();?> >



<!-- =================================================
================= Mobile Menu Area =============
=========================================================-->

<section class="wrapper mobile-menu-area">
    <section class="material-design-hamburger">  
        <button class="material-design-hamburger__icon">
            <span class="material-design-hamburger__layer"></span>
        </button>
    </section>

    <section class="menu menu--off">
        <div class="menu-mobilemenu">    

        <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile-menu',
                'menu_id' => 'mobile-menu',
                'depth' => 3,
                // 'container' => ''
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
        ?>    
            </div>
        </section>
    </section>


<!-- =================================================
================= Header Top Area =============
=========================================================-->

<div class="header-top-area">
    <div class="header-top-empty"></div>
    <div class="h-top-links-sec">
        <div class="h-s-text">
            <i class="fa fa-newspaper-o"></i><a class="trigger" data-toggle="modal" data-target="#newsletterModal" href="#">Subscribe to our newsletter</a>
        </div>
        <!-- Header Social Links -->
        <div class="social-links">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>

            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>

            <a href="#" class="envelope"><i class="fa fa-envelope"></i></a>
        </div>
        <!-- Header Social end -->

    </div>
    <div class="container">
        <div class="h-t-addres-sec">
            <!-- Header Top Contact Area -->
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-6">
                    <!-- Logo  Section-->
                    <div class="logo clearfix">
                        <!--<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>-->
                        <?php if (function_exists('the_custom_logo')) { 
                            the_custom_logo(); 
                        } ?>
                   </div>
                    <!-- Logo  Section End-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 address-column">

                    <!-- Header Top Address Section-->
                    <div class="h-address">
                        <p><a href="https://goo.gl/maps/EpdpDkyFsWp">3375 Oak street<br/>
                            <span>Victoria, BC  V8X 1R2</span></a></p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 contact-column">

                    <!-- Header Top Contact Section -->
                    <div class="h-contact">
                        <p><a href="tel:250-483-3748">(250)-483-3748</a><br/>
                            <a href="mailto:info@connectionsplace.org"><Span>info@connectionsplace.org</Span></a></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 donate-column">

                        <!-- Header Top Button Section -->
                        <div class="h-btn">
                           <a class="btn donate" href="#">Donate</a>
                        </div>
                    </div>
                </div>
                <!-- Header Top Contact Area End-->
            </div>
        </div>
    </div>  


<!-- =================================================
================= Header Area =============
=========================================================-->  

<header class="header-area">
    <div class="container clearfix">
        <div class="row">
            <div class="col-12">
                <div class="mainmenu clearfix">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu' => 'main_menu',
                            'menu_id' => 'main_menu'
                        ));
                        ?>
                   </div>
                </div>
            </div>
        </div>
    </header>    
<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="vidModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          <h3>Sign up to receive our Newsletter!</h3>
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]')?>
          </div>
        </div>
      </div>
</div>