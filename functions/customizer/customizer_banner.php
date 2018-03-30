<?php 

// Adding customizer home page settings

function elitepress_banner_page_customizer( $wp_customize ){

	/* Home Page Panel */
	$wp_customize->add_panel( 'banner_page', array(
		'priority'       => 900,
		'capability'     => 'edit_theme_options',
		'title'      => __('Banner settings', 'elitepress'),
	) );
	
	/* Category Banner */
	$wp_customize->add_section( 'category_banner' , array(
		'title'      => __('Category', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Category Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_category]',
    array(
        'default' => __('Category title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_category]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'category_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_category]',
    array(
        'default' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_category]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'category_banner',
        'type' => 'text',
    )
	);
	
	
	/* Archive Banner */
	$wp_customize->add_section( 'archive_banner' , array(
		'title'      => __('Archive', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Archive Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_archive]',
    array(
        'default' => __('Archive title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_archive]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'archive_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_archive]',
    array(
        'default' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_archive]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'archive_banner',
        'type' => 'text',
    )
	);
	
	
	/* Author Banner */
	$wp_customize->add_section( 'author_banner' , array(
		'title'      => __('Author', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Archive Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_author]',
    array(
        'default' => __('Author title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_author]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'author_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_author]',
    array(
        'default' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_author]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'author_banner',
        'type' => 'text',
    )
	);
	
	
	/* 404 page Banner */
	$wp_customize->add_section( 'banner_404_banner' , array(
		'title'      => __('404', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For 404 Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_404]',
    array(
        'default' => __('404 title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_404]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'banner_404_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_404]',
    array(
        'default' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_404]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'banner_404_banner',
        'type' => 'text',
    )
	);
	
	
	///* Tag Banner */
	$wp_customize->add_section( 'tag_banner' , array(
		'title'      => __('Tag', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Tag Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_tag]',
    array(
        'default' => __('Tag title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_tag]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'tag_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_tag]',
    array(
        'default' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_tag]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'tag_banner',
        'type' => 'text',
    )
	);
	
	
	
	
	///* Search Banner */
	$wp_customize->add_section( 'search_banner' , array(
		'title'      => __('Search', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Search Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_search]',
    array(
        'default' => __('Search title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_search]',
    array(
        'label' => __('Title','elitepress'),
        'section' => 'search_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_search]',
    array(
        'default' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_search]',
    array(
        'label' => __('Description','elitepress'),
        'section' => 'search_banner',
        'type' => 'text',
    )
	);
}
add_action( 'customize_register', 'elitepress_banner_page_customizer' );