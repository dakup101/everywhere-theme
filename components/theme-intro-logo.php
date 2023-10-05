<?php $cmp = wp_parse_args($args, array(
    "with_arrow" => true,
    "arrow_text" => "<strong>Projektujemy strony, sklepy i systemy on-line</strong><span>dla Twojego biznesu</span>",
    "title" => "Everywhere - cyfrowe studio", 
    "big" => "We are", 
    "with_logo" => true,
)) ?>

<div class="theme-intro logo">
    <h1 class="theme-intro__top">
        <?php echo $cmp["title"] ?>
    </h1>
    <div class="theme-intro__big">
        <span><?php echo $cmp["big"] ?></span>
        <?php if ($cmp["with_logo"]) :  ?>
        <figure class="theme-intro__logo">
            <img src="<?php echo IMG . "evrwhr.svg" ?>"
                 alt="Everywhere">
            <div class="theme-intro__hello--wrap">
                <span class="theme-intro__hello">
                    Cześć !
                </span>
            </div>
        </figure>
        <?php endif; ?>
    </div>
</div>

<?php if ($cmp["with_arrow"]) : ?>

<div class="mt-16">
    <?php get_template_part( CMP, "intro-arrow", array("arrow_text" => $cmp["arrow_text"]) ) ?>
</div>

<?php endif; ?>