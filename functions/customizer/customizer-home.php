<?php
function elitepress_header_customizer( $wp_customize ) {

/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 200,
		'capability'     => 'edit_theme_options',
		'title'      => __('Header settings', 'elitepress'),
	) );
	
	
	/* favicon option */
    $wp_customize->add_section( 'elitepress_favicon' , array(
      'title'       => __('Site favicon', 'elitepress' ),
      'priority'    => 300,
	  'panel'  => 'header_options',
    ) );
    
    $wp_customize->add_setting('elitepress_lite_options[upload_image_favicon]', array(
      'sanitize_callback' => 'esc_url_raw',
	   'capability'     => 'edit_theme_options',
	   'type' => 'option', 
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'elitepress_lite_options[upload_image_favicon]', array(
      'label'    => __('Site favicon', 'elitepress' ),
      'section'  => 'elitepress_favicon',
    ) ) );
	
	
	//Header logo setting
	$wp_customize->add_section( 'header_logo' , array(
		'title'      => __('Header logo settings', 'elitepress'),
		'panel'  => 'header_options',
		'priority'   => 400,
   	) );
	$wp_customize->add_setting(
		'elitepress_lite_options[upload_image_logo]'
		, array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'elitepress_lite_options[upload_image_logo]',
			   array(
				   'label'          => __('Upload logo','elitepress' ),
				   'section'        => 'header_logo',
				   'priority'   => 50,
			   )
		   )
	);
	
	//Enable/Disable logo text
	$wp_customize->add_setting(
    'elitepress_lite_options[text_title]',array(
	'default'    => true,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'elitepress_lite_options[text_title]',
    array(
        'type' => 'checkbox',
        'label' => __('Show Logo text','elitepress'),
        'section' => 'header_logo',
		'priority'   => 100,
    )
	);
	
	
	//Logo width
	
	$wp_customize->add_setting(
    'elitepress_lite_options[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 100,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'elitepress_lite_options[width]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo width','elitepress'),
        'section' => 'header_logo',
		'priority'   => 400,
    )
	);
	
	//Logo Height
	$wp_customize->add_setting(
    'elitepress_lite_options[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 50,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'elitepress_lite_options[height]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Height','elitepress'),
        'section' => 'header_logo',
		'priority'   =>410,
    )
	);
	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => __('Custom CSS', 'elitepress'),
		'panel'  => 'header_options',
		'priority'   => 100,
   	) );
	$wp_customize->add_setting(
	'elitepress_lite_options[webrit_custom_css]'
		, array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'elitepress_lite_options[webrit_custom_css]', array(
        'label'   => __('Custom CSS', 'elitepress'),
        'section' => 'custom_css',
        'type' => 'textarea',
		'priority'   => 100,
    )); 	
	
	//Header Search bar

	$wp_customize->add_section(
        'header_search_bar',
        array(
            'title' => 'Search Bar ',
           'priority'    => 400,
			'panel' => 'header_options',
        )
    );
	
	
	//Show and hide Header Search Bar
	$wp_customize->add_setting(
	'elitepress_lite_options[header_search_bar_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[header_search_bar_enabled]',
    array(
        'label' => __('Enable search bar on header','elitepress'),
        'section' => 'header_search_bar',
        'type' => 'checkbox',
    )
	);

	
	}
	add_action( 'customize_register', 'elitepress_header_customizer' );
	?>