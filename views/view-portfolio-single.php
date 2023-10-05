<?php /* Template Name: Portfolio (Archiwum) */ ?>

<?php get_header(); ?>

<section class="container mt-8">
    <?php get_template_part(CMP, "intro-logo", array(
        "with_arrow" => false,
        "title" => "Realizacja dla " . get_the_title()
    )) ?>
</section>

<section class="container mt-10">
    <?php get_template_part(CMP, "breadcrumbs") ?>
</section>

<section class="container mt-10">
    <h2 class="text-title-lg">
        <?php echo get_field("intro") ?>
    </h2>
    <div class="typo mt-10">
        <?php echo get_field("intro_text") ?>
    </div>
    <?php if (!empty($link = get_field("intro_link")) && !empty($img_1 = get_field("intro_img_1")) && !empty($img_2 = get_field("intro_img_2")) && !empty($img_3 = get_field("intro_img_3"))) : ?>
    <figure class="rounded-2xl overflow-hidden block mt-10 portfolio--link">
        <picture>
            <source media="(max-width: 768px)"
                    srcset="<?php echo $img_3 ?>" />

            <source media="(max-width: 1024px)"
                    srcset="<?php echo $img_2 ?>" />

            <img class="w-full"
                 src="<?php echo $img_1 ?>"
                 alt="<?php echo get_the_title() ?>" />
        </picture>
    </figure>
    <?php endif; ?>
</section>


<section class="container mt-20 portfolio--case-study">
    <div class="grid grid-cols-12 gap-y-10 items-center">
        <div class="col-span-12 md:col-span-7">
            <div class="portfolio--item__top">
                <h2 class="portfolio--item__title text-title">
                    <span class="special"><span><?php echo get_the_title() ?></span></span>
                </h2>
                <h3 class="portfolio--item__prefix text-title-prefix">
                    Case study
                </h3>
            </div>
            <div class="typo mt-5">
                <?php echo get_field("case_study") ?>
            </div>
            <div class="mt-5">
                <?php get_template_part( CMP, "button", array(
                "type" => "link",
                "style" => "default",
                "url" =>  get_field("intro_link"), 
                "content" => "Odwiedź WWW", 
                "icon" => null,
                "class" => "xl:text-lg mt-10 uppercase",   
            ) ) ?>
            </div>
        </div>
        <?php
        $case_1_full = wp_get_attachment_image_src(get_field("case_study_img_1"), "full")[0];
        $case_1_cropped = wp_get_attachment_image_src(get_field("case_study_img_1"), "case-study")[0];
        
        ?>
        <div class="col-span-12 md:col-start-9 md:col-span-4">
            <figure data-galery="case-study"
                    class="portfolio--case-study__img lightbox">
                <img class="w-full"
                     src="<?php echo $case_1_cropped ?>"
                     alt="<?php echo get_the_title() ?>" />
            </figure>
        </div>
        <?php
        $case_2_full = wp_get_attachment_image_src(get_field("case_study_img_2"), "full")[0];
        $case_2_cropped = wp_get_attachment_image_src(get_field("case_study_img_2"), "case-study")[0];
        
        ?>
        <div class="col-span-12 md:col-span-4">
            <figure data-galery="case-study"
                    class="portfolio--case-study__img lightbox">
                <img class="w-full"
                     src="<?php echo $case_2_cropped ?>"
                     alt="<?php echo get_the_title() ?>" />
            </figure>
        </div>
        <?php
        $case_3_full = wp_get_attachment_image_src(get_field("case_study_img_3"), "full")[0];
        $case_3_cropped = wp_get_attachment_image_src(get_field("case_study_img_3"), "case-study")[0];
        
        ?>
        <div class="col-span-12 md:col-span-7 md:col-start-6">
            <figure data-galery="case-study"
                    class="portfolio--case-study__img lightbox">
                <img class="w-full"
                     src="<?php echo $case_3_cropped ?>"
                     alt="<?php echo get_the_title() ?>" />
            </figure>
        </div>

    </div>
</section>

<section class="container mt-20">
    <h2 class="text-title">
        <?php echo get_field("end_title") ?>
    </h2>
    <div class="typo mt-10">
        <?php echo get_field("end_content") ?>
    </div>
    <?php if (!empty($link = get_field("intro_link")) && !empty($img_1 = get_field("intro_img_1")) && !empty($img_2 = get_field("intro_img_2")) && !empty($img_3 = get_field("intro_img_3"))) : ?>
    <figure class="rounded-2xl portfolio--big-img overflow-hidden block mt-10 lightbox">
        <picture>
            <img class="w-full"
                 src="<?php echo get_field("end_img") ?>"
                 alt="<?php echo get_the_title() ?>" />
        </picture>
    </figure>
    <?php endif; ?>
</section>

<section class="container mt-20 mb-20">
    <?php get_template_part(CMP, "offer-single-contact") ?>
</section>

<?php get_footer(); ?>