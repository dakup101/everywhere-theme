<?php /* Template Name: O nas */ ?>

<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo", array(
        "with_arrow" => true,
        "arrow_text" => "Jesteśmy małą agencją<br><strong>która na rynku jest od 2009 roku.</strong>",
        "with_logo" => false,
        "big" => "Dowiedz się<br>więcej o nas"
    )) ?>
</section>

<section class="container mt-10">
    <?php get_template_part(CMP, "breadcrumbs") ?>
</section>

<section class="container mt-10 mb-20">
    <?php get_template_part(CMP, "offer-grid") ?>
</section>

<section class="container mt-20">
    <h2 class="text-title-lg text-center">
        Specjalizujemy się w tworzeniu<br>użytecznych stron www i sklepów<br>on-online opartych na<br>
        <span class="special"><span>WordPress</span></span>'ie.
    </h2>

    <div class="max-w-4xl mx-auto mt-10 typo text-center">
        Wszystkie projekty są unikalne i projektowane od podstaw pod Klienta.
    </div>
</section>

<section class="container mt-20">
    <?php get_template_part(CMP, "cta") ?>
</section>

<section class="container overflow-hidden mt-20">
    <h2 class="text-title text-center mb-5">
        Zaufali nam
    </h2>
    <?php get_template_part(CMP, "logos-slider") ?>
</section>

<section class="container mt-20 mb-20">
    <?php get_template_part(CMP, "offer-single-contact") ?>
</section>

<?php get_footer(); ?>