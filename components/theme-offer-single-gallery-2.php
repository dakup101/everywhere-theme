<div class="single-offer--gallery-2 mt-10">
    <?php foreach (get_field("gallery_2") as $slide) : ?>

    <figure class="single-offer--gallery-1__item lightbox">
        <picture>
            <source media="(max-width: 648px)"
                    srcset="<?php echo wp_get_attachment_image_src($slide["img"], "portfolio-thumb-sm")[0] ?>" />

            <source media="(max-width: 768px)"
                    srcset="<?php echo wp_get_attachment_image_src($slide["img"], "portfolio-thumb-md")[0] ?>" />

            <img src="<?php echo wp_get_attachment_image_src($slide["img"], "portfolio-thumb-sm")[0] ?>"
                 alt="<?php echo get_the_title() ?>" />
        </picture>

    </figure>
    <?php endforeach; ?>
</div>