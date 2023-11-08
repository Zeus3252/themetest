<?php



//* Add custom sections and setting to the Admin Customizer


function themetest_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'header_textcolor' , array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));
    
     $wp_customize->add_setting( 'header_backgroundcolor' , array(
        'default'   => '#FF0000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));

     $wp_customize->add_setting( 'header_backgroundcolor2' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));

     $wp_customize->add_setting( 'header_backgroundcolorDirection' , array(
        'default'   => '45',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_key'
        
     ));

     $wp_customize->add_setting( 'header_borderSize' , array(
        'default'   => 'small',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_key',
        
     ));

     $wp_customize->add_setting( 'header_borderColor' , array(
        'default'   => '#0000FF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));

     $wp_customize->add_setting( 'header_fontSize' , array(
        'default'   => '30',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_key'
     ));

    $wp_customize->add_section('themetest_header_settings', array(
        'title'      => __( 'Header Settings', 'themetest' ),
        'priority'   => 1,
    ));
    
    

   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
        'label'      => __( 'Header Text Color', 'themetest' ),
        'section'    => 'themetest_header_settings',
        'settings'   => 'header_textcolor',
      
    )));

    

    


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_backgroundcolor', array(
        'label'      => __( 'Header Background Color', 'themetest' ),
        'section'    => 'themetest_header_settings',
        'settings'   => 'header_backgroundcolor',
       
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_backgroundcolor2', array(
        'label'      => __( 'Header Background Color 2', 'themetest' ),
        'section'    => 'themetest_header_settings',
        'settings'   => 'header_backgroundcolor2',
     
    )));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_backgroundcolorDirection', array(
        'label'    => __( 'Gradient Direction', 'themetest' ),
        'section'  => 'themetest_header_settings',
        'settings' => 'header_backgroundcolorDirection',
        'type'     => 'number',
        'input_attrs' => array(
            'min'  => 1,
            'max'  => 360,
            'step' => 1,
        
        ),
        'description' => __( 'Enter a number between 1 and 360 for gradient direction. Default is 45 degrees.', 'themetest' ),
    ) ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_borderSize', array(
        'label'      => __( 'Header Border Size', 'themetest' ),
        'section'    => 'themetest_header_settings',
        'settings'   => 'header_borderSize',
        'type' => 'select',
        'choices' => array(
            0 => __( 'None', 'themetest' ),
            5 => __( 'Very small', 'themetest' ),
            10 => __( 'Small', 'themetest' ),
            20 => __( 'Medium', 'themetest' ),
            30 => __( 'Large', 'themetest' ),
        ),

     
    )));

       

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_borderColor', array(
        'label'      => __( 'Header Border Color', 'themetest' ),
        'section'    => 'themetest_header_settings',
        'settings'   => 'header_borderColor',
       
    )));
   
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_fontSize', array(
        'label'      => __( 'Header Font Size', 'themetest' ),
        'section'    => 'themetest_header_settings',
        'settings'   => 'header_fontSize',
        'type' => 'select',
        'choices' => array(
            10 => __( 'Very small', 'themetest' ),
            15 => __( 'Small', 'themetest' ),
            20 => __( 'Medium', 'themetest' ),
            30 => __( 'Large', 'themetest' ),
            40 => __( 'Very large', 'themetest' ),
        ),

       
    )));

    $wp_customize->add_setting( 'footer_textcolor' , array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));

     $wp_customize->add_setting( 'footer_backgroundcolor' , array(
        'default'   => '#2d2d2d',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex',
     ));

    $wp_customize->add_section('themetest_footer_settings', array(
        'title'      => __( 'Footer Settings', 'themetest' ),
        'priority'   => 2,
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_textcolor', array(
        'label'      => __( 'Footer Text Color', 'themetest' ),
        'section'    => 'themetest_footer_settings',
        'settings'   => 'footer_textcolor',
        'priority'   => 1,
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_backgroundcolor', array(
        'label'      => __( 'Footer Background Color', 'themetest' ),
        'section'    => 'themetest_footer_settings',
        'settings'   => 'footer_backgroundcolor',
        'priority'   => 2,
    )));

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