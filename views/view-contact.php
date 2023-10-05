<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo", array(
        "with_arrow" => true,
        "title" => "Kontakt",
        "arrow_text" => "Jesteśmy małą agencją<br><strong>która na rynku jest od 2009 roku.</strong>",
        "with_logo" => false,
        "big" => "Let's get in touch"
    )) ?>
</section>

<section class="container mt-10">
    <?php get_template_part(CMP, "breadcrumbs") ?>
</section>

<div class="container mt-10 mb-20">
    <div class="grid grid-cols-12 gap-y-10 md:gap-8 lg:gap-16">
        <div class="text-center md:text-left col-span-11 md:col-span-3">
            <figure class="theme-intro__logo !w-full !ml-0">
                <img src="<?php echo IMG . "evrwhr.svg" ?>"
                     alt="Everywhere">
                <div class="theme-intro__hello--wrap">
                    <span class="theme-intro__hello">
                        Cześć !
                    </span>
                </div>
            </figure>

            <style>
            @media(max-width: 768px) {
                .theme-intro__logo {
                    max-width: 160px;
                    margin: 0 auto !important;
                }
            }
            </style>

            <div class="typo mt-10">
                <p>
                    <strong>Zadzwoń do nas</strong><br>
                    <a href="tel:+48502655457">+48 502 655 457</a>
                </p>
            </div>
            <div class="typo mt-10">
                <p>
                    <strong>Odwiedź nas</strong><br>
                    Everywhere<br>ul. Złoty Róg 29a/3,<br>30-095 Kraków, Polska
                </p>
            </div>
        </div>
        <div class="col-span-12 md:col-span-8 md:col-start-5">
            <div class="typo">
                <p>
                    Nie możemy się doczekać, aby porozmawiać o Twoich pomysłach, celach, potrzebach i marzeniach. Umówmy
                    się na rozmowę.
                </p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="9829f9f" title="Kontakt"]') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>