<?php
define('THEME_DIR', trailingslashit(get_template_directory()));
define('THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
// Components & Assets
define('IMG', trailingslashit(esc_url(get_template_directory_uri() . '/dist/img/')));

define('FUN', THEME_DIR . "/inc/");
define('CMP', 'components/theme');
define('VIEW', 'views/view');
define('MAIL', 'mail/mail');


// WP General

require_once(FUN . "scripts-styles.php");
require_once(FUN . "disable-guthenberg.php");
require_once(FUN . "register-menus.php");
require_once(FUN . "supports.php");
require_once(FUN . "allow-svg.php");
require_once(FUN . "scripts-to-footer.php");
require_once(FUN . "image-sizes.php");

// Custom Functions

require_once(FUN . "get-menu.php");

// Taxonomies

// Post Types

require_once(FUN . "post-type-offer.php");
require_once(FUN . "post-type-portfolio.php");
require_once(FUN . "post-type-logos.php");

// ACF

require_once(FUN . "acf-options.php");

// Ajax

// Filters
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});