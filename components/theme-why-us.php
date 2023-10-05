<?php $cmp = wp_parse_args( $args, array(
    // array(
    //     "img" => get_field("global_no_img", "options"),
    //     "text" => "I am text"
    // ),
) ) ?>

<h2 class="text-title text-center">
    Dlaczego warto wybrać nas?
</h2>

<div class="why-us mt-20">
    <?php foreach ($cmp as $el) : ?>
    <div class="why-us--item">
        <img class="why-us--item__img"
             src="<?php echo wp_get_attachment_image_src($el["img"], "thumbnail")[0] ?>"
             alt="Dlaczego my">
        <div class="typo mt-5">
            <?php echo $el["text"] ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>