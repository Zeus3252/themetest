<?php
function themetest_customize_css()
{
    ?>
         <style type="text/css">
               #masthead {
                background: linear-gradient(<?php echo get_theme_mod('header_backgroundcolorDirection', '45'); ?>deg,
                <?php echo get_theme_mod('header_backgroundcolor'); ?>, 
                <?php echo get_theme_mod('header_backgroundcolor2'); ?>);  
                border-bottom: <?php echo get_theme_mod('header_borderSize'); ?>px solid
                <?php echo get_theme_mod('header_borderColor'); ?>;
                font-size: <?php echo get_theme_mod('header_fontSize', 'Large'); ?>px;
                 
               }
               #masthead div ul li a {
                color: <?php echo get_theme_mod('header_textcolor');?>;

            }
               footer {
                color: <?php echo get_theme_mod('footer_textcolor'); ?>;
                background-color: <?php echo get_theme_mod('footer_backgroundcolor'); ?>;
            }
         </style>
    <?php
}
add_action( 'wp_head', 'themetest_customize_css');
add_action( 'wp_footer', 'themetest_customize_css');