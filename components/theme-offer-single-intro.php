<?php $cmp = wp_parse_args( $args, array(
    "intro_title" => "I am title", 
    "intro_text" => "I am text", 
    "intro_img_1" => get_field("global_no_img", "options"),
    "intro_img_2" => get_field("global_no_img", "options"),
    "intro_img_3" => get_field("global_no_img", "options"),
) ) ?>


<div class="single-offer--intro">
    <h3 class="text-title"><?php echo $cmp["intro_title"] ?></h3>
    <div class="mt-5 typo !text-lg xl:!text-2xl">
        <?php echo $cmp["intro_text"] ?>
    </div>

    <?php if (!empty($img_1 = $cmp["intro_img_1"]) && !empty($img_2 = $cmp["intro_img_2"]) && !empty($img_3 = $cmp["intro_img_3"])) : ?>
    <figure class="rounded-2xl overflow-hidden block mt-10">
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
</div>