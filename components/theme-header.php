<header>
    <nav class="header">
        <div class="flex">
            <a class="header--logo"
               href="<?php echo get_home_url(); ?>">
                <img src="<?php echo IMG . "evrwhr.svg" ?>"
                     alt="Home">
            </a>
            <ul class="header--menu">
                <li>
                    <a href="/o-nas/"
                       class="<?php if (get_the_ID() == 62) echo "active" ?>">O nas</a>
                </li>
                <li>
                    <a href="/portfolio/"
                       class="<?php if (is_singular( 'porftolio' ) || is_post_type_archive( 'portfolio' )) echo "active" ?>">Portfolio</a>
                </li>
                <li>
                    <a href="/oferta/"
                       class="<?php if (is_singular( 'offer' ) || is_post_type_archive( 'offer' )) echo "active" ?>">Oferta</a>
                </li>
                <li>
                    <a href="/kontakt/"
                       class="<?php if (get_the_ID() == 86) echo "active" ?>">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
</header>