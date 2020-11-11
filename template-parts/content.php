<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <br/><a class="breadcrumbs-url" href="<?php echo home_url() ?>">❮ Назад к новостям</a>

    <a href="<?php the_permalink() ?>" class="article-header">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="article-thumbnail" />
    </a>

    <header class="entry-header">
        <a href="<?php the_permalink() ?>" class="article-header">
            <?php the_title() ?></a>
        </a>
    </header>

    <div class="social-colored mb-4 text-center">
        <?php get_template_part('template-parts/social-colored') ?>
    </div>

    <div class="entry-content">
        <?php 
        the_excerpt();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kruf' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div>

    <div class="mb-3 article-meta">
        <?php get_template_part('template-parts/date') ?>
        <?php echo get_the_date() ?>
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="social-colored mb-4 ">
                <div class="mr-3 d-inline"><b>Понравилась статья? Поделись: </b></div>
                <?php get_template_part('template-parts/social-colored') ?>
            </div>
        </div>

        <div class="col-xl-4">
            <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
        </div>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
