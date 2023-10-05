<?php /* Template Name: Oferta (Pojedyncza) */ ?>



<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo", array("with_arrow" => false, "title" => get_the_title())) ?>
</section>

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, natus!

<section class="container mt-10">
    <?php get_template_part(CMP, "breadcrumbs") ?>
</section>

<article class="container mt-10 mb-20 single-offer">

    <h2 class="text-title-lg text-center">
        <?php echo get_field("main_title") ?>
    </h2>

    <section class="mt-10 lg:text-center">
        <?php get_template_part(CMP, "offer-single-intro", get_field("intro_1")) ?>

    </section>

    <section class="mt-20">
        <?php get_template_part(CMP, "offer-single-list", get_field("list")) ?>
    </section>

    <section class="mt-20">
        <?php get_template_part(CMP, "offer-single-intro", get_field("intro_2")) ?>
    </section>

    <section class="mt-10">
        <?php get_template_part(CMP, "offer-single-gallery-2") ?>
    </section>

    <section class="mt-20">
        <?php get_template_part(CMP, "why-us", get_field("global_why_us", "options")) ?>
    </section>

    <section class="mt-20">
        <?php get_template_part(CMP, "portfolio-some") ?>
    </section>

    <section class="mt-20">
        <?php get_template_part(CMP, "offer-single-contact") ?>
    </section>
</article>



<?php get_footer(); ?>