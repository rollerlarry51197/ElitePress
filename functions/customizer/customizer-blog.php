<?php // Adding customizer home page settings
function elitepress_blog_customizer( $wp_customize ){
	

	$wp_customize->add_section(
        'blog_setting',
        array(
            'title' => __('Latest News Settings','elitepress'),
			'priority'       => 800,)
    );	
	
$wp_customize->add_setting(
    'elitepress_lite_options[blog_title]',
    array(
        'default' => __('Latest news','elitepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));	
	$wp_customize->add_control( 'elitepress_lite_options[blog_title]',array(
    'label'   => __('Title','elitepress'),
    'section' => 'blog_setting',
	 'type' => 'text',));
	
	$wp_customize->add_setting(
    'elitepress_lite_options[blog_description]',
    array(
        'default' =>  'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui official deserunt mollit anim id est laborum.',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));	
	$wp_customize->add_control( 'elitepress_lite_options[blog_description]',array(
    'label'   =>  __('Description','elitepress'),
    'section' => 'blog_setting',
	 'type' => 'textarea',));
	 
}
add_action( 'customize_register', 'elitepress_blog_customizer' );
?>	 