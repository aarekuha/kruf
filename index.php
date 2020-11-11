<?php get_header() ?>

	<main id="primary" class="site-main">
        <div class="container">
            <div class="row mt-3">
                <?php get_template_part('template-parts/post-main') ?>
                <?php get_template_part('template-parts/post-important') ?>
            </div>

            <?php get_template_part('template-parts/posts') ?>
        </div>
	</main>

<?php // get_sidebar() ?>
<?php get_footer() ?>

