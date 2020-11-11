<?php
    $posts_array = get_posts(array(
        'numberposts' => 1,
        // 'tag' => '%d0%b3%d0%bb%d0%b0%d0%b2%d0%bd%d0%b0%d1%8f-%d0%bd%d0%be%d0%b2%d0%be%d1%81%d1%82%d1%8c'  // Главная новость
        'tag' => 'glavnaya-novost'  // Главная новость
    ));
?>


<div class="col-xl-8 col-lg-12 news-main">
    <div class="row">
    <?php foreach( $posts_array as $post ) : ?>
        <a href="<?php echo get_permalink($post) ?>">
            <div class="col-12 mt-2">
                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" class="news-important-thumbnail"/>
                    <div class="article-description news-faded">
                    <span><?php echo $post->post_title ?></span>
                    <div>
                        <?php the_excerpt() ?>
                        <?php get_template_part('template-parts/date') ?> <?php echo get_the_date() ?>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    </div>
</div>
