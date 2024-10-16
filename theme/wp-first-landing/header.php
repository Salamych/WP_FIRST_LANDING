<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="headerBox">
            <div class="headerLeft">
                <img src="<?echo WPLAND_DIR_IMG?>/logo.png" alt="logo" class="headerLeft__logo">
                <div class="headerLeft__logoName1">wegy</div>
                <div class="headerLeft__logoName2">joomla theme</div>
            </div>
            <div class="headerRight">
                 <nav class="navMenu">
                    <div class="navMenu__hide">Menu</div>
                    <ul class="navMenu__block">
                        <?php wp_nav_menu([
                            'theme_location' => 'header',
                            'container' => false,
                            'items_wrap' => '%3$s'
                        ]) ?>
                        <li class="navMenu__list navMenu__list--search">
                            <form action="<?php echo home_url( '/' ) ?>" method="get" class="navMenu__form">
                                <input class="navMenu__formInput" 
                                type="text" 
                                placeholder="what are we looking for?" 
                                name="s"
                                value="<?php echo get_search_query() ?>">
                            </form><i class="fa fa-search" aria-hidden="true"></i>
                        </li>
                    </ul>
                </nav> 
            </div>
        </div>
    </div>
</header>