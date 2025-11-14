<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arch-shop</title>
    <?php wp_head()?>
</head>
<body>
    <div class="home-page">
        <div class="container">
            <div class="home-page__inner">
                <div class="home-page__banner-logo">
                    <div class="banner-logo__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/ARCHXSTORE.png" alt="logo-banner">
                    </div>
                </div>
                <div class="home-page__banner">
                        <!-- В админке WordPress здесь будет блок изображения -->
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/banner-available-now.jpg" alt="#"">
                        <p>Available now.</p>
                </div>
                <div class="navbar">
                    <ul>
                        <li>SHOP</li>
                        <li>CATALOG</li>
                        <li>ABOUT</li>
                        <li>TRACKING</li>
                    </ul>
                </div>
                <div class="social-links">
                    <div class="social-links__list">
                        <a href="#"> 
                            <div class="social-links__item">
                               <img src="<?php bloginfo('template_url'); ?>/assets/images/tiktok-svgrepo-com 1.svg" alt="">     
                            </div>
                        </a>
                        <a href="#"> 
                            <div class="social-links__item">
                               <img src="<?php bloginfo('template_url'); ?>/assets/images/telegram-svgrepo-com 2.svg" alt="">     
                            </div>
                        </a>
                        <a href="#"> 
                            <div class="social-links__item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram-svgrepo-com 1.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                    <div class="social_links__contact-us">
                        <h3>CONTACT</h3>
                        <p>0/979/066/064</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/telegram-svgrepo-com 2.svg" alt="">
                        <p>@oldiss</p>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>