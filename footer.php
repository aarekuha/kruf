    <div class="container-fluid footer">
        <div class="container pt-3 pb-3">
            <div class="row justify-content-md-center">

                <div class="col col-xs-12 mt-3 footer-logo">
                    <a class="navbar-brand" href="<?php echo get_home_url() ?>">
                        <?php get_template_part('template-parts/logo') ?>
                    </a>
                    <div class="footer-rights mt-2">
                        © Круф.ру 2020. Все права защищены
                    </div>
                </div>

                <div class="col-md col-sm-12 mt-3 footer-central-block">
                    <ul class="navbar-nav">
                        <li>Новостное агентство «Круф.ру»</li>
                        <li>Главный редактор: <a href="https://vk.com/kzhigalova94"><b>Ксения Жигалова</b></a></li>
                        <li class="mt-3 social"><?php get_template_part('template-parts/social') ?></li>
                    </ul>
                </div>

                <div class="col mt-3 footer-contacts ml-3">
                    <?php get_template_part('template-parts/contacts') ?>
                </div>

            </div>
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>
