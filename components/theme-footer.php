<footer>
    <div class="footer">
        <div class="footer--inner container">
            <div class="footer--left">
                <a href="<?php echo get_home_url() ?>"
                   class="footer--logo">
                    <img src="<?php echo IMG . "evrwhr_light.svg"  ?>"
                         alt="Everywhere">
                    <span>We're<br>Everywhere</span>
                </a>
                <!-- <div class="footer--social">
                    <a href="https://www.facebook.com/everywherepolska"
                       class="footer--social__item has-svg">
                        <?php echo file_get_contents( IMG . "fb.svg" ) ?>
                    </a>
                    <a href="https://www.facebook.com/everywherepolska"
                       class="footer--social__item has-svg">
                        <?php echo file_get_contents( IMG . "in.svg" ) ?>
                    </a>
                    <a href="https://www.facebook.com/everywherepolska"
                       class="footer--social__item has-svg">
                        <?php echo file_get_contents( IMG . "ig.svg" ) ?>
                    </a>
                </div> -->
            </div>
            <div class="footer--right">
                <div class="footer--contact text-white">
                    <div class="text-title mb-5">
                        Kontakt
                    </div>
                    <div class="typo opacity-80 mb-5">
                        <p>
                            Everywhere Polska<br>
                            ul. Złoty Róg 29A/3<br>
                            30-095 Kraków, Polska
                        </p>
                    </div>
                    <div class="typo opacity-80">
                        <p>
                            telefon: <a href="tel:+48502655457">+48 502 655 457</a><br>
                            mail: <a href="mailto:biuro@everywhere.pl">biuro@everywhere.pl</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer--copy">
            <span>Everywhere <?php echo date('Y') ?></span>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>