<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://disqus.com
 * @since      1.0.0
 *
 * @package    Disqus
 * @subpackage Disqus/admin/partials
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="dsq-admin-wrapper">
    <div class="wrap">
        <a href="/" class="disqus-logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="102px" height="20px" viewBox="0 0 438 80" enable-background="new 0 0 438 80" xml:space="preserve">
                <g>
                    <path fill="#229CFF" d="M30.208,1.602H0.878v76.039h28.895c27.376,0,43.342-16.293,43.342-38.236v-0.219
                        C73.117,17.244,57.365,1.602,30.208,1.602z M51.499,39.73c0,12.272-8.364,19.227-20.964,19.227h-8.582V20.286h8.582
                        c12.6,0,20.964,7.06,20.964,19.226V39.73z M87.128,77.637h21.182V1.602H87.128V77.637z M157.193,30.279
                        c-10.538-2.391-13.145-3.911-13.145-7.385v-0.22c0-2.716,2.5-4.888,7.604-4.888c6.733,0,14.338,2.605,21.292,7.496l10.536-14.885
                        c-8.257-6.625-18.358-10.103-31.284-10.103c-18.25,0-29.438,10.21-29.438,24.332v0.218c0,15.644,12.492,20.207,28.676,23.896
                        c10.32,2.389,12.818,4.127,12.818,7.279v0.217c0,3.258-3.042,5.213-8.69,5.213c-8.798,0-17.163-3.148-24.657-9.123L119.173,66.34
                        c9.342,8.365,22.16,12.604,35.63,12.604c18.466,0,30.742-9.233,30.742-24.768v-0.217C185.544,39.73,174.68,34.082,157.193,30.279z
                         M277.766,39.622v-0.218c0-21.834-17.379-39.324-40.844-39.324c-23.462,0-41.06,17.708-41.06,39.542v0.216
                        c0,21.834,17.38,39.324,40.845,39.324c8.689,0,16.619-2.5,23.137-6.736l8.363,7.494l10.645-11.84l-7.819-6.623
                        C275.375,55.264,277.766,47.658,277.766,39.622z M256.368,40.055c0,2.607-0.435,5.105-1.304,7.385l-10.319-9.342L234.1,50.047
                        l10.537,9.018c-2.281,0.869-4.887,1.412-7.711,1.412c-11.621,0-19.443-9.666-19.443-20.639v-0.216
                        c0-10.972,7.712-20.532,19.225-20.532c11.733,0,19.664,9.668,19.664,20.748v0.216L256.368,40.055L256.368,40.055z M339.902,44.4
                        c0,10.643-5.543,15.639-14.016,15.639c-8.471,0-14.012-5.211-14.012-16.184V1.602h-21.398v42.69
                        c0,23.789,13.578,34.763,35.195,34.763S361.3,68.301,361.3,43.75V1.602h-21.398V44.4z M408.77,30.279
                        c-10.537-2.391-13.145-3.911-13.145-7.385v-0.22c0-2.716,2.5-4.888,7.607-4.888c6.731,0,14.338,2.605,21.289,7.496L435.059,10.4
                        c-8.254-6.625-18.355-10.103-31.281-10.103c-18.25,0-29.439,10.21-29.439,24.332v0.218c0,15.644,12.492,20.205,28.676,23.896
                        c10.32,2.391,12.818,4.129,12.818,7.281v0.215c0,3.258-3.043,5.215-8.691,5.215c-8.799,0-17.164-3.152-24.658-9.125
                        l-11.729,14.012c9.343,8.367,22.16,12.602,35.627,12.602c18.468,0,30.742-9.233,30.742-24.766v-0.219
                        C437.122,39.73,426.258,34.082,408.77,30.279z"/>
                </g>
            </svg>
        </a>
        <h2>
            <?php dsq_gettext_e( 'Welcome Back' ) ?>
<?php if ( null != $post_message ) { ?>
            <div class="notice notice-success inline">
                <p>
                    <?php echo $post_message ?>
                </p>
            </div>
<?php } ?>
        </h2>
<?php

if ( get_option( 'disqus_forum_url' ) ) {

    // This means the user has configured a shortname for this site and can view the options
    require_once plugin_dir_path( __FILE__ ) . 'disqus-admin-main-partial.php';

} else {

    // No shortname configured, and we're not posting any data, so show the login start page
    require_once plugin_dir_path( __FILE__ ) . 'disqus-admin-login-partial.php';
}

require_once plugin_dir_path( __FILE__ ) . 'disqus-admin-wpcomments-partial.php';

?>
    </div>
</div>
