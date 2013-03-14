<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title('|',1,'right'); bloginfo('name') ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content>
        <meta name="author" content>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/cdi-style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" /><!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <?php wp_head(); ?>

    </head>
    <body cz-shortcut-listen="true" <?php body_class(); ?>>
        <div class='container'>
            <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            <div id="cdi_header" class="navbar">
                <div class="navbar-inner">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'topmenu',
                        'container'       => false,
                        'menu_id'      => 'top-nav',
                        'items_wrap'      => '<ul class="nav">%3$s</ul>') ); ?>
                </div>
            </div>
        <!-- /.navbar -->
    </div>