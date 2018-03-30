<?php 
function elitepress_home_callout_customizer( $wp_customize ){
$wp_customize->add_panel( 'home_callout_setting', array(
		'priority'       => 400,
		'capability'     => 'edit_theme_options',
		'title'      => __('Home header callout setting', 'elitepress'),
	) );
//Home top callout
$wp_customize->add_section(
        'header_home_callout',
        array(
            'title' => __('Home header callout setting','elitepress'),
           'priority'    => 4,
			'panel' => 'home_callout_setting',
        )
    );
	
	//Header Top Call Out Title
	$wp_customize->add_setting(
	'elitepress_lite_options[header_call_out_title]', array(
        'default'        => __('Want to say hey or find out more?','elitepress'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	$wp_customize->add_control('elitepress_lite_options[header_call_out_title]', array(
        'label'   => __('Title', 'elitepress'),
        'section' => 'header_home_callout',
        'type'    => 'text',
    ));
	
	
	//Header Top Call Out Description
	$wp_customize->add_setting(
	'elitepress_lite_options[header_call_out_description]', array(
        'default'        => 'Reprehen derit in voluptate velit cillum dolore eu fugiat nulla pariaturs  sint occaecat proidentse.',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	$wp_customize->add_control('elitepress_lite_options[header_call_out_description]', array(
        'label'   => __('Description', 'elitepress'),
        'section' => 'header_home_callout',
        'type'    => 'textarea',
    ));
	
	//Home callout read more button
	$wp_customize->add_setting(
	'elitepress_lite_options[header_call_out_btn_text]', array(
        'default'        => __('Read More','elitepress'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	$wp_customize->add_control('elitepress_lite_options[header_call_out_btn_text]', array(
        'label'   => __('Button Text', 'elitepress'),
        'section' => 'header_home_callout',
        'type'    => 'text',
    ));
	
	//Home callout read more button link
	$wp_customize->add_setting(
	'elitepress_lite_options[header_call_out_btn_link]', array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	$wp_customize->add_control('elitepress_lite_options[header_call_out_btn_link]', array(
        'label'   => __('Button Link', 'elitepress'),
        'section' => 'header_home_callout',
        'type'    => 'text',
    ));
	
	//Home callout read more button link target
	$wp_customize->add_setting(
	'elitepress_lite_options[header_call_out_btn_link_target]', array(
        'default'        => true ,
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	$wp_customize->add_control('elitepress_lite_options[header_call_out_btn_link_target]', array(
        'label'   => __('Open link in new tab', 'elitepress'),
        'section' => 'header_home_callout',
        'type'    => 'checkbox',
    ));
	
	}
	add_action( 'customize_register', 'elitepress_home_callout_customizer' );
	?>