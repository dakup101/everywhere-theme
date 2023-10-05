<?php $cmp = wp_parse_args( $args, array(
    "img_1" => get_field("global_no_img", "options"),
    "img_2" => get_field("global_no_img", "options"),
    "desc" => array(
        array(
            "title" => "I am title", 
            "text" => "I am text", 
            "img" => get_field("global_no_img", "options"),
        ),
        array(
            "title" => "I am title", 
            "text" => "I am text", 
            "img" => get_field("global_no_img", "options"),
        )
    ),
) ) ?>

<div class="single-offer--list">
    <picture class="single-offer--list__img">
        <source media="(max-width: 768px)"
                srcset="<?php echo wp_get_attachment_image_src($cmp["img_2"], "full")[0] ?>" />

        <img src="<?php echo wp_get_attachment_image_src($cmp["img_1"], "full")[0] ?>"
             alt="<?php echo get_the_title() ?>" />
    </picture>
    <div class="single-offer--list__items">
        <?php foreach($cmp["desc"] as $desc) : ?>
        <div class="single-offer--list__item">
            <img src="<?php echo wp_get_attachment_image_src($desc["img"], "thumbnail")[0] ?>"
                 alt="<?php echo $desc["title"] ?>"
                 class="single-offer--list__item-img">
            <div class="single-offer--list__desc">
                <h3 class="text-title-sm">
                    <?php echo $desc["title"] ?>
                </h3>
                <div class="typo mt-3">
                    <?php echo $desc["text"] ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>