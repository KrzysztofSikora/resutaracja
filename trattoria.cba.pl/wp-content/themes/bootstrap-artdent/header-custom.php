<html
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- todo clear -->
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' ?>"
          rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/lumos/css/lumos.css' ?>" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' ?>"
          rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>"/>


    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

<div class="header-wrapper">
<div class="container-fluid custom-header-bar hidden-md-down">

    <div class="row ">
        <div class="col-md-2">
        </div>
        <div class="col-md-3">
            <img class="logo" width=254 height="56" src="<?php //echo get_stylesheet_directory_uri() . '/img/logo.png' ?>" alt="image">

        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <ul class="telephone-list">
                <li>Lorem ipsum dolor sit</li>
                <li>00 000 00 00</li>
                <li>000 000 000</li>


            </ul>


        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light custom-nav absolute-top" role="navigation">
    <div class="container">

        <img class="logo hidden-lg-up photo-ipad" width=254 height="56" src="<?php //echo get_stylesheet_directory_uri() . '/img/logo.png' ?>" alt="Second">
        <ul class="telephone-list hidden-sm-down hidden-lg-up">
            <li>Lorem SECOND dolor sit</li>
            <li>00 000 00 00</li>
            <li>000 000 000</li>
        </ul>



        <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>






        <?php
        wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => "navbarResponsive",
                'menu_class' => 'nav navbar-nav navbar-right',
                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',


                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker())
        );
        ?>

    </div>
</nav>

</div>
<!-- Header -->
<header class="intro-header" id="header">
    <div class="container">

    </div>
</header>


<!-- Navigation -->


<!-- Wrapper -->
<div class="container-full-height">

    <!-- Header -->
