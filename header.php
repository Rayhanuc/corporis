<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Corporis
 */

?>


<!DOCTYPE html>
<html class="html" <?php language_attributes(); ?> >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />

    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- inject:css -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <!--header start-->
    <header>
        <!-- Start Navigation -->
        <nav id="mainNav" style="background: <?php echo cs_get_option('header-bg-color');?>; color: <?php echo cs_get_option('header-bg-color');?>" class="navbar navbar-default navbar-fixed white bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./index.html">
                        <?php

                            $title = cs_get_option('title');
                            $title_color = cs_get_option('title-color');

                            
                            
                        ?>
                        <h3 class="u-Weight700 u-MarginTop10 u-MarginBottom0 u-sm-MarginTop0" style="color:<?php echo $title_color; ?>">
                            <!--<img src="assets/imgs/logo.png" class="logo logo-scrolled" alt="">-->
                            <?php

                                                

                            //$attachment = wp_get_attachment_image_src( $logo, 'full');

                           echo $title;
                            //var_dump($attachment);
                            ?><!-- codestar framework option -->
                        </h3>
                        <img src="<?php echo $attachment[0];?>" alt="">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <?php corporis_nav_menu();?>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->