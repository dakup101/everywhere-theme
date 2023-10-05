<div class="relative">
    <div class="single-offer--contact">
        <div class="single-offer--contact__left">
            <h2 class="text-title">
                <span class="special"><span>Porozmawiajmy</span></span><br>
                o projekcie
            </h2>

            <div class="typo mt-5 pr-10 sm:pr-0">
                <p>
                    Nie możemy się doczekać, aby porozmawiać o Twoich pomysłach, celach, potrzebach i marzeniach.
                </p>
                <p>
                    Umówmy się na rozmowę.
                </p>
            </div>
            <?php get_template_part( CMP, "button", array(
                "type" => "link",
                "style" => "default-accent",
                "url" => "/kontakt/", 
                "content" => "Skontaktuj się z nami", 
                "icon" => null,
                "class" => "xl:text-lg mt-10 uppercase",   
            ) ) ?>
        </div>
        <div class="single-offer--contact__right">

        </div>

    </div>
    <img src="<?php echo IMG . "flower.png" ?>"
         alt=""
         class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2">
</div>


<style>
.single-offer--contact {
    background-image: url('<?php echo IMG . "antek_desktop.gif" ?>');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;

}

.single-offer--contact__left {
    background: linear-gradient(90deg, rgb(0, 0, 0) 0%, rgba(51, 51, 51, 0.00) 100%);
}

@media(max-width: 648px) {
    .single-offer--contact {
        background-image: url('<?php echo IMG . "antek_mobile.gif" ?>');
    }

    .single-offer--contact__left {
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.00) 100%);
    }
}
</style>