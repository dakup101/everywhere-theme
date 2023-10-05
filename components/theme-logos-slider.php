<?php 
$query_args = array(
    "post_type" => "logo",
    "posts_per_page" => -1
);
$logos_1 = array();
$logos_2 = array();
$counter = 1;
$events = new WP_Query($query_args);
if ($events->have_posts()){
    while($events->have_posts()){
        $events->the_post();
        if ($counter % 2 == 0) array_push($logos_1, array(get_the_id(), get_the_title()));
        else array_push($logos_2, array(get_the_id(), get_the_title()));
        $counter++;
    }
}
?>

<div class="logos-slider logos-slider-1">
    <div class="swiper-wrapper">
        <?php foreach($logos_1 as $el): ?>
        <div class="swiper-slide">
            <div class="flex items-center justify-center">
                <img src="<?php echo get_field("logo", $el[0]) ?>"
                     alt="<?php echo $el[1] ?>"
                     class="max-w-full w-full">
            </div>
        </div>
        <?php endforeach; ?>
        <?php foreach($logos_1 as $el): ?>
        <div class="swiper-slide">
            <div class="flex items-center justify-center">
                <img src="<?php echo get_field("logo", $el[0]) ?>"
                     alt="<?php echo $el[1] ?>"
                     class="max-w-full w-full">
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="logos-slider logos-slider-2"
     dir="rtl">
    <div class=" swiper-wrapper">
        <?php foreach($logos_2 as $el): ?>
        <div class="swiper-slide">
            <div class="flex items-center justify-center">
                <img src="<?php echo get_field("logo", $el[0]) ?>"
                     alt="<?php echo $el[1] ?>"
                     class="max-w-full w-full">
            </div>
        </div>
        <?php endforeach; ?>
        <?php foreach($logos_2 as $el): ?>
        <div class="swiper-slide">
            <div class="flex items-center justify-center">
                <img src="<?php echo get_field("logo", $el[0]) ?>"
                     alt="<?php echo $el[1] ?>"
                     class="max-w-full w-full">
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>