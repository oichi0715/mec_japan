<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container header-inner">
            <h1 class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="Logo">
                </a>
            </h1>

            <nav class="main-nav">
                <button class="menu-toggle" aria-label="メニュー開閉">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'menu_class'     => 'nav-list', // クラス名は nav-list のままでOKです
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>

            <button class="hamburger" id="js-hamburger">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>