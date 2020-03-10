<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://use.fontawesome.com/b6ae9fba98.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php the_title(); ?> | Cabot Cruises</title>
<meta name="description"
    content="Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacaMons including discounted cruises.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">



</head>

<body>
<section class="header">
    <div class="container">
        <div class="company">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-1x.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo-1x.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/logo-2x.jpg 2x, <?php echo get_template_directory_uri(); ?>/images/logo-3x.jpg 3x"  sizes="(min-width: 700) 20vw, 40vw" alt="light and dark blue cruises logo" />
            </div>
            <div class="name">
                <h2>Cabot Cruises</h2>
                <p>A Travel Agency</p>
            </div>
        </div>
        <div class="num">
            <a href="tel:18005551234">1-800-555-1234</a>
        </div>
    </div>
</section>

<section class="navigation">
    <div class="nav">
        <div class="container">
        <a id="hamburgerBtn" href="#"></a>
        <?php wp_nav_menu(array('menu_id' => 'main')); ?>
            <div class="search">
                <form type="POST" action="#">
                    <input type="search" placeholder="Search..." value="" />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>