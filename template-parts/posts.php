<?php while ( have_posts() ) : the_post(); ?>

    <div class="row article mt-3 mb-3">

        <a href="<?php the_permalink() ?>" class="article-header mb-3">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" class="article-thumbnail" />
        </a>

        <div class="col">
            <?php
                $posttags = get_the_tags();
                if( $posttags ){
                    foreach( $posttags as $tag ){
                        if (!in_array($tag->name, array("Главная новость", "Важная новость"))) {
                            echo '<a href="' . get_tag_link($tag->term_id) . '" class="article-rubric">' . $tag->name . '</a>';
                        }
                    }
                }
            ?>

            <a href="<?php the_permalink() ?>" class="article-header">
                <?php the_title() ?></a>
            </a>

            <div class="article-content mt-2"><?php the_excerpt() ?></div>

            <div class="article-meta">
                <span>
                    <?php get_template_part('template-parts/date') ?>
                    <?php echo get_the_date() ?>
                </span>
            </div>
        </div>

    </div>

<?php endwhile;

$prev_svg = '<svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.404222 9.95974L8.0766 17.5978C8.61488 18.1341 9.48901 18.1341 10.0269 17.5978C10.5659 17.0613 10.5659 16.1121 10.0269 15.5755L4.88179 10.3734L18.6207 10.3734C19.3824 10.3734 20 9.75857 20 9.00026C20 8.24194 19.3824 7.62712 18.6207 7.62712L4.53696 7.62712L9.98384 2.28422C10.5228 1.74801 10.5228 0.918634 9.98384 0.382423C9.71487 0.114317 9.36142 -4.09201e-07 9.00867 -3.93781e-07C8.65591 -3.78362e-07 8.30246 0.144182 8.0335 0.412286L0.404222 8.01263C-0.134741 8.54884 -0.134741 9.42353 0.404222 9.95974Z" fill="#B3B3B3"/> </svg> ';
$next_svg = '<svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19.5958 9.95974L11.9234 17.5978C11.3851 18.1341 10.511 18.1341 9.97306 17.5978C9.4341 17.0613 9.4341 16.1121 9.97306 15.5755L15.1182 10.3734L1.37931 10.3734C0.617585 10.3734 3.60244e-07 9.75857 3.93391e-07 9.00026C4.26538e-07 8.24194 0.617585 7.62712 1.37931 7.62712L15.463 7.62712L10.0162 2.28422C9.4772 1.74801 9.4772 0.918634 10.0162 0.382423C10.2851 0.114317 10.6386 -4.09201e-07 10.9913 -3.93781e-07C11.3441 -3.78362e-07 11.6975 0.144182 11.9665 0.412286L19.5958 8.01263C20.1347 8.54884 20.1347 9.42353 19.5958 9.95974Z" fill="#538A09"/> </svg> ';

the_posts_pagination(array(
	'show_all'     => true, // показаны все страницы участвующие в пагинации
	'end_size'     => 1,     // количество страниц на концах
	'mid_size'     => 1,     // количество страниц вокруг текущей
	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
	'prev_text'    => $prev_svg,
	'next_text'    => $next_svg,
	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
));

?>

