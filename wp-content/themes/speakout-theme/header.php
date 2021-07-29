<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakOut</title>

    <?php wp_head();?>

</head>
<body <?php body_class();?>>

<header>

        <nav class="top-bar" id=top>

        <a href="http://speakout/" id="logo-link"><img src="<?php bloginfo('template_directory');?>/images/logo_black.svg" class="img-fluid logo"></a>

            <ul>

                <!--<li><a id="search" href="#" onclick="openSearchBar();return false;"><img src="<?php //bloginfo('template_directory');?>/images/top_bar_icons-02.svg"></a></li>-->

                <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/top_bar_icons-02.svg"></a></li>

                <li><a href="#account-modal" id="account-icon" data-bs-toggle="modal"><img src="<?php bloginfo('template_directory');?>/images/top_bar_icons-01.svg"></a></li>

                <li><a href ='#'><img src="<?php bloginfo('template_directory');?>/images/top_bar_icons-03.svg"></a></li>

            </ul>
    </nav>

    <hr id="header-divider">

    <?php wp_nav_menu(
        array(
            'theme_location' => 'mobile-nav-menu',
        )
    )
    ?>

</header>






