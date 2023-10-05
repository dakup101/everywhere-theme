<?php $offer = new WP_Query( array( 
    "post_type" => "offer", 
    "posts_per_page" => -1, 
    "status" => "publish"
) ); if ( $offer->have_posts() ) : ?>

<div class="offer-grid">

    <?php while( $offer->have_posts() ) : $offer->the_post() ?>

    <article class="offer-grid--item__wrapper"">
        <div class="
             offer-grid--item">
        <div class="offer-grid--item__slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ( get_field( "home_slider" ) as $slide ) : ?>
                <a href="<?php echo get_the_permalink() ?>"
                   class="swiper-slide">
                    <picture>
                        <source media="(max-width: 648px)"
                                srcset="<?php echo wp_get_attachment_image_src($slide["img"], "offer-thumb-sm")[0] ?>" />

                        <source media="(max-width: 768px)"
                                srcset="<?php echo wp_get_attachment_image_src($slide["img"], "offer-thumb")[0] ?>" />

                        <img src="<?php echo wp_get_attachment_image_src($slide["img"], "offer-thumb-sm")[0] ?>"
                             alt="<?php echo get_the_title() ?>" />
                    </picture>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination">

            </div>
        </div>

        <div class="offer-grid--item__inner">
            <div>
                <h2 class="offer-grid--item__title">
                    <a href="<?php echo get_the_permalink() ?>">
                        <?php echo get_the_title() ?>
                    </a>
                </h2>
                <span class="offer-grid--item__text">
                    We're Everywhere
                </span>
            </div>
            <a class="offer-grid--item__link has-svg"
               href="<?php echo get_the_permalink() ?>">
                <?php echo file_get_contents(IMG . "arrow-top-right.svg") ?>
            </a>
        </div>
</div>
</article>

<?php endwhile; ?>

</div>

<?php endif; ?>