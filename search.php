<?php
get_header();
?>

    <div class="container">
        <main id="primary" class="site-main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h3 class="page-title">
                        <?php
                            printf( esc_html__( 'Результаты поиска для "%s"', 'kruf' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h3>
                </header>

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'search' );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main>
    </div>

<?php
get_sidebar();
get_footer();
