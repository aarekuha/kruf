<?php
    $posts_array = get_posts(array(
        'numberposts' => 2,
        // 'tag' => '%d0%b2%d0%b0%d0%b6%d0%bd%d0%b0%d1%8f-%d0%bd%d0%be%d0%b2%d0%be%d1%81%d1%82%d1%8c',  // Важная новость
        'tag' => 'vazhnaya-novost',  // Важная новость
    ));
?>
<div class="col-xl-4 col-lg-12">
    <div class="row">
        <?php foreach( $posts_array as $post ) : ?>
            <a class="col-xl-12 col-md-6 mt-2 news-important" href="<?php echo get_permalink($post) ?>">
                <div >
                    <img class="news-important-thumbnail" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" />
                    <div class="article-description news-faded" style="">
                        <span><?php echo $post->post_title ?></span>
                        <div>
                            <small><?php the_excerpt() ?></small>
                            <?php get_template_part('template-parts/date') ?> <?php echo get_the_date() ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
