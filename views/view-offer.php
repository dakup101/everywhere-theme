<?php /* Template Name: Oferta (Archiwum) */ ?>

<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo", array(
        "with_arrow" => false,
        "with_logo" => false,
        "big" => "Poznaj naszą ofertę"
    )) ?>
</section>

<section class="container mt-10">
    <?php get_template_part(CMP, "breadcrumbs") ?>
</section>

<section class="container mt-10 mb-20">
    <?php get_template_part(CMP, "offer-grid") ?>
</section>


<?php get_footer(); ?>