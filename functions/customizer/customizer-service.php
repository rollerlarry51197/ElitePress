<?php
function elitepress_service_customizer( $wp_customize ) {
 
	//Service section panel
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service settings', 'elitepress'),
		'priority'       => 500,
   	) );
	
	
	//Hide Index Service Section
	
	$wp_customize->add_setting(
    'elitepress_lite_options[service_section_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[service_section_enabled]',
    array(
        'label' => __('Enable Service section on front page','elitepress'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'elitepress_lite_options[service_title]',
    array(
        'default' =>__('Our services','elitepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[service_title]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'elitepress_lite_options[service_description]',
    array(
        'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[service_description]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);	
	
	if ( class_exists( 'Elitepress_Repeater' ) ) {
			$wp_customize->add_setting( 'elitepress_service_content', array(
			'sanitize_callback' => 'elitepress_repeater_sanitize',
			) );

			$wp_customize->add_control( new Elitepress_Repeater( $wp_customize, 'elitepress_service_content', array(
				'label'                             => esc_html__( 'Service Content', 'elitepress' ),
				'section'                           => 'service_section_head',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Service', 'elitepress' ),
				'item_name'                         => esc_html__( 'Service', 'elitepress' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}

}
add_action( 'customize_register', 'elitepress_service_customizer' );
?>