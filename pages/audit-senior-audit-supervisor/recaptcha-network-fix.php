<?php
// WPCode snippet 9157: use Google's supported alternate endpoint on this vacancy only.
add_filter( 'wpcf7_use_recaptcha_net', function ( $use_net ) {
    return is_page( 9094 ) ? true : $use_net;
} );
