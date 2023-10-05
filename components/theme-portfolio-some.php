<?php $portfolio = new WP_Query( array(
    "post_type" => "portfolio", 
    "posts_per_page" => 2, 
    "status" => "publish",
) ) ?>

<h2 class="text-title text-center">
    Zrealizowane projekty
</h2>


<?php if ($portfolio->have_posts()) : ?>

<div class="portfolio--grid mt-20">
    <?php while ($portfolio->have_posts()): $portfolio->the_post(); ?>

    <?php get_template_part( CMP, "portfolio-item", array(
            "title_prefix" => get_field("arch_prefix"), 
            "title" => get_the_title(),
            "desc" => get_field("arch_desc"),
            "img" => get_post_thumbnail_id(), // wp img id
            "link" => get_the_permalink()  
    ) ) ?>

    <?php endwhile; ?>
</div>

<?php endif; wp_reset_postdata(); ?>

<div class="mt-20">
    <?php get_template_part( CMP, "button", array(
        "type" => "link",
        "style" => "default",
        "url" => "/portfolio/", 
        "content" => "Zobacz portfolio", 
        "icon" => null,
        "class" => "xl:text-lg mx-auto",   
    ) ) ?>
</div>