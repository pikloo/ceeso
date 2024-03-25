<?php
get_header();
?>
<header>
    <?php get_template_part('partials/secondary-nav', 'secondary-nav') ?>
    <?php get_template_part('partials/main-nav', 'main-nav') ?>
</header>
<main>
    <?php get_template_part('partials/home/start', 'start') ?>
    <?php get_template_part('partials/home/agenda', 'agenda') ?>
    <?php get_template_part('partials/home/ecole', 'ecole') ?>
    <?php get_template_part('partials/home/filiere', 'filiere') ?>
    <?php get_template_part('partials/home/faq', 'faq') ?>
</main>
<?php get_template_part('partials/footer', 'footer') ?>

<?php get_footer(); ?>