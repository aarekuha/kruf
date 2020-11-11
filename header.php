<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="container-fluid header sticky-top">
        <div class="container">
            <div class="row justify-content-lg-center">
                <nav class="navbar navbar-expand-md navbar-dark">

                    <a class="navbar-brand" href="<?php echo get_home_url() ?>">
                        <?php get_template_part('template-parts/logo') ?>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="d-none d-lg-block site-description nav-item">
                                <?php echo get_bloginfo('description', 'display') ?>
                            </li>

                            <li class="nav-item ml-3">
                                <form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php echo get_home_url() ?>">
                                    <input class="search-input" type="search" placeholder="Поиск" aria-label="Поиск" name="s" id="s">
                                    <button class="search-button" type="submit" id="searchsubmit">
                                        <?php get_template_part('template-parts/search') ?>
                                    </button>
                                </form>
                            </li>

                            <li class="nav-item social">
                                <?php get_template_part('template-parts/social'); ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid header-image"></div>

    <div class="container-fluid menu mb-3">
        <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'container' => null,
            'container' => 'div',
            'container_class' => 'container',
            )
        ) ?>
    </div>


