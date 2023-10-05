<?php $cmp = wp_parse_args( $args, array(
    "arrow_text" => "<strong>Lorem Ipsum</strong>"
) ) ?>

<div class="theme-intro__arrow">
    <div class="theme-intro__moto">
        <?php echo $cmp["arrow_text"] ?>
    </div>
    <img src="<?php echo IMG . "arrow-down.svg" ?>"
         alt="Scrolluj dalej"
         class="theme-intro__arrow--img">
</div>