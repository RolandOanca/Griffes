<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Griffers</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/style.css?ver='.microtime() ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/fontello.css?ver='.microtime() ?>"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
   
</head>

<header>
<div class="sticky-logo">
        <a href=""><img src="http://griffes.ro/wp-content/uploads/2016/10/logogf.png" alt="Griffes"></a>
    </div>
    
<nav class="desktop-nav"> 
              
    <?php 
        wp_nav_menu( array(
            'menu'   => 'primary-menu'
            
        ) );
    ?>
</nav>

    </header>
<body <?php body_class();?>>
    











