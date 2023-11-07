<?php



//* Add custom sections and setting to the Admin Customizer


function themetest_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'header_textcolor' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));
    
    $wp_customize->add_section('themetest_new_section_name', array(
        'title'      => __( 'Header Text Color', 'themetest' ),
        'priority'   => 1,
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
        'label'      => __( 'Header Text Color', 'themetest' ),
        'section'    => 'themetest_new_section_name',
        'settings'   => 'header_textcolor',
    ) ) );
 }



 function sanitize_hex($color) {
    $color = trim($color, " \t\n\r\0\x0B#");

    if (preg_match('/^[a-fA-F0-9]{3}([a-fA-F0-9]{3})?$/', $color)) {
        return '#' . $color;
    } else {
        return '';
    }
}

add_action( 'customize_register', 'themetest_customize_register' );