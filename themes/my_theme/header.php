<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="header__inner">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo home_url(); ?>">
                                HOME
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(6); ?>">
                                CATALOG
                            </a>
                        </li>
                        <li>
                            <a href="echo home_url();">
                                ABOUT
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>">
                                TRACKING
                            </a>         
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/user-profile.svg" alt="user-profile">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="logo">
                    <div class="logo__inner">
                        <div class="logo__imgs">
                            <div class="logo_banner">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/ARCHXSTORE.png" alt="">
                            </div>
                            <div class="logo__img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
                            </div>
                    </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </header>