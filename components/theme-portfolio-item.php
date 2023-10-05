<?php $cmp = wp_parse_args( $args, array(
    "title_prefix" => "Title prefix", 
    "title" => "I am portfolio item",
    "desc" => "<p>I am portfolio item short description</p><p><a href='#'>Test link</a></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo facere accusamus voluptatum illo eligendi commodi illum nulla ut sint tenetur!</p>",
    "img" => get_field( "global_no_img", "options" ), // wp img id
    "link" => "#"  
) ) ?>


<article class="portfolio--item">
    <div class="portfolio--item__content">
        <div class="portfolio--item__top">
            <h3 class="portfolio--item__title text-title">
                <?php echo $cmp["title"] ?>
            </h3>
            <h4 class="portfolio--item__prefix text-title-prefix">
                <?php echo $cmp["title_prefix"] ?>
            </h4>
        </div>
        <div class="portfolio--item__desc typo">
            <?php echo $cmp["desc"] ?>
        </div>

        <?php get_template_part( CMP, "button", array(
                "type" => "link",
                "style" => "text",
                "url" => $cmp["link"], 
                "content" => "Zobacz projekt", 
                "icon" => null,
                "class" => "portfolio--item__link",
        ) ) ?>
    </div>
    <a class="portfolio--item__thumb"
       href="<?php echo $cmp["link"] ?>">
        <picture>
            <source media="(max-width: 576px)"
                    srcset="<?php echo wp_get_attachment_image_src($cmp["img"], "offer-thumb-sm")[0] ?>" />

            <source media="(max-width: 768px)"
                    srcset="<?php echo wp_get_attachment_image_src($cmp["img"], "offer-thumb-md")[0] ?>" />

            <img src="<?php echo wp_get_attachment_image_src($cmp["img"], "offer-thumb")[0] ?>"
                 alt="<?php echo get_the_title() ?>" />
        </picture>
    </a>
</article>