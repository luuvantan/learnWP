<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important;">

<!-- Mirrored from codenpixel.com/demo/foodpicky/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 03:25:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animsition.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">

    <?php wp_head(); ?>
    <?php
        $main_menu = menuItem();
    ?>
 </head>

<body >
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="site-wrapper">
            <!--header starts-->
            <header id="header" class="header-scroll top-header headrom">
                <!-- .navbar -->
                <nav class="navbar navbar-dark">
                    <div class="container">
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                        <a class="navbar-brand" href=""> <img class="img-rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/food-picky-logo.png" alt=""> </a>
                        <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                            <ul class="nav navbar-nav">
                                <?php
                                foreach($main_menu[0] as $menu): ?>
                                    <?php $current = ( $menu->object_id == get_queried_object_id() ) ? 'active' : '';?>
                                    <?php if(!$main_menu[$menu->ID]): ?>                                        
                                        <li class="nav-item"> <a class="nav-link <?php echo $current?>"href="<?php echo $menu->url;?>"><?php echo $menu->title;?></a> </li>
                                    <?php else: ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle <?php echo $current?>" data-toggle="dropdown" href="<?php echo $menu->url;?>"><?php echo $menu->title;?></a>
                                        <?php if($main_menu[$menu->ID]): ?>
                                            <div class="dropdown-menu"> 
                                            <?php foreach($main_menu[$menu->ID] as $itemMenu): ?> 
                                                <a class="dropdown-item" href="<?php echo $itemMenu->url;?>"><?php echo $itemMenu->title;?></a> 
                                            <?php endforeach;?>
                                            </div>                                                                                                          
                                        <?php endif;?>
                                        </li>
                                    <?php endif;?>
                               <?php endforeach;?>
                            </ul>
                        </div>  
                    </div>
                </nav>
                <!-- /.navbar -->
            </header>