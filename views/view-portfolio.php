<?php /* Template Name: Portfolio (Pojedyncza) */ ?>

<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo", array(
        "with_arrow" => false,
        "title" => "Everywhere - Portfolio", 
        "with_logo" => false, 
        "big" => "Nasze realizacje"
    )) ?>
</section>

<section class="container mt-10">
    <?php get_template_part(CMP, "breadcrumbs") ?>
</section>

<?php if (have_posts()) : ?>

<section class="container portfolio--grid mt-10 mb-20">
    <?php while (have_posts()): the_post(); ?>

    <?php get_template_part( CMP, "portfolio-item", array(
            "title_prefix" => get_field("arch_prefix"), 
            "title" => get_the_title(),
            "desc" => get_field("arch_desc"),
            "img" => get_post_thumbnail_id(), // wp img id
            "link" => get_the_permalink()  
    ) ) ?>

    <?php endwhile; ?>
</section>

<?php endif; ?>


<?php get_footer(); ?>