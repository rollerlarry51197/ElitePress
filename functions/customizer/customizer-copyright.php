<?php
// Footer copyright section 
	function elitepress_copyright_customizer( $wp_customize ) {
	$wp_customize->add_panel( 'elitepress_copyright_setting', array(
		'priority'       => 900,
		'capability'     => 'edit_theme_options',
		'title'      => __('Footer copyright settings', 'elitepress'),
	) );
	
	$wp_customize->add_section(
        'copyright_section_one',
        array(
            'title' => __('Footer copyright settings','elitepress'),
            'priority' => 35,
			'panel' => 'elitepress_copyright_setting',
        )
    );
	
	
	$wp_customize->add_setting(
    'elitepress_lite_options[footer_copyright_text]',
    array(
       'default' => '<p>'.__('©2017 All Rights Reserved - Webriti. - Designed and Developed by','elitepress').'<a href="http://www.webriti.com/" target="_blank">'.__('Webriti','elitepress').'</a></p>',
		'type' =>'option',
		'sanitize_callback' => 'elitepress_copyright_sanitize_text'
		
    )
);
$wp_customize->add_control(
    'elitepress_lite_options[footer_copyright_text]',
    array(
        'label' => __('Copyright text','elitepress'),
        'section' => 'copyright_section_one',
        'type' => 'textarea',
    ));
	
	
	$wp_customize->add_setting(
    'elitepress_lite_options[footer_menu_bar_enabled]',
    array(
        'default' => true ,
		'type' =>'option',
		'sanitize_callback' => 'elitepress_copyright_sanitize_text'
		
    )
);
$wp_customize->add_control(
    'elitepress_lite_options[footer_menu_bar_enabled]',
    array(
        'label' => __('Enable Footer Menu Bar','elitepress'),
        'section' => 'copyright_section_one',
        'type' => 'checkbox',
    ));
	
	
	function elitepress_copyright_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

}
	
	function elitepress_copyright_sanitize_html( $input ) {

    return force_balance_tags( $input );

}
}
add_action( 'customize_register', 'elitepress_copyright_customizer' );
?>