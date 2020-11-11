<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row justify-content-md-center mb-4">
        <div class="col-lg-3 col-md-4 mr-3 col-mb-12 col-mb-center mb-3">
                <a href="<?php the_permalink() ?>" class="article-header">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="article-thumbnail" />
                </a>
        </div>
        <div class="col">
            <header class="entry-header">
                <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
            </header>
            <?php the_excerpt(); ?>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
