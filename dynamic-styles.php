<?php
function themetest_customize_css()
{
    ?>
         <style type="text/css">
               #masthead div ul li a {
                color: <?php echo get_theme_mod('header_textcolor', '#000000'); ?>;
            }
         </style>
    <?php
}
add_action( 'wp_head', 'themetest_customize_css');