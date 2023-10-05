<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo") ?>
</section>

<section class="container mt-16">
    <?php get_template_part(CMP, "offer-grid") ?>
</section>

<section class="container mt-20">
    <?php get_template_part(CMP, "bigger-text") ?>
</section>

<section class="container mt-20">
    <?php get_template_part(CMP, "cta") ?>
</section>

<section class="container mt-20 ">
    <?php get_template_part(CMP, "portfolio-some") ?>
</section>

<section class="container mt-20 mb-20">
    <?php get_template_part(CMP, "offer-single-contact") ?>
</section>

<?php get_footer(); ?>