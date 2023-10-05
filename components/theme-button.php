<?php $cmp = wp_parse_args( $args, array(
    "type" => "link",
    "style" => "default",
    "url" => "#", 
    "content" => "I am button", 
    "icon" => IMG . "arrow-top-right.svg",
    "class" => null,
) ) ?>

<?php if ($cmp["type"] == "link") : ?>

<a href="<?php echo $cmp["url"] ?>"
   class="btn btn--<?php echo $cmp["style"] ?> <?php echo $cmp["class"] ?>">
    <span>
        <?php echo $cmp["content"] ?>
    </span>
    <?php if (!empty($cmp["icon"])) : ?>

    <?php echo file_get_contents($cmp["icon"]) ?>

    <?php endif; ?>
</a>

<?php endif; ?>