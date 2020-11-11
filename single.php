<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kruf
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container">

            <?php
            $is_single_post = TRUE;
            the_post();

            get_template_part( 'template-parts/content', 'single' );

            get_the_post_navigation();

            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

            <center style="font-size: 1.3rem;">Читайте также:</center>
            <div class="row mt-4">
                <?php
                    $posts_array = get_posts(array(
                        'order_by' => 'rand',
                        'numberposts' => 4,
                    ));
                ?>

                <?php foreach( $posts_array as $post ) : ?>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                    <a href="<?php echo get_permalink($post) ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" class="news-important-thumbnail"/>
                            <div class="article-description news-faded">
                                <span><?php echo $post->post_title ?></span>
                                <div>
                                    <?php get_template_part('template-parts/date') ?> <?php echo get_the_date() ?>
                                </div>
                            </div>
                    </a>
                        </div>
                <?php endforeach; ?>
            </div>

        </div>
	</main>

<?php
get_sidebar();
get_footer();
