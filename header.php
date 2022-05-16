<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Manrope&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <header class="site-header">
        <div class="site-branding">
            <h1 class="site-name"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h4 class="site-description"><?php bloginfo('description'); ?></h4>
        </div>
        <nav class="site-menu">
            <?php wp_nav_menu( ['theme_location' => 'primary'] ) ?>
        </nav>
        <button class="hamburger">
            <span class="material-symbols-outlined">
                menu
            </span>
        </button>

    </header>

    <div class="main">