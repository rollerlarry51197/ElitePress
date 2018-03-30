<?php
// Adding customizer home page settings
function elitepress_header_widget_customizer( $wp_customize ){
//Header widget section
	$wp_customize->add_section('header_widget_settings' , array(
	'title'      => __('Header widget section', 'elitepress'),
	'priority'   => 300,
	) );
	
		// Site Intro Column Layout
		$wp_customize->add_setting('elitepress_lite_options[header_column_layout]',array(
		'default' => 3,
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control('elitepress_lite_options[header_column_layout]',array(
		'type' => 'select',
		'label' => __('Select column layout','elitepress'),
		'section' => 'header_widget_settings',
		'choices' => array(1=>'1',2=>'2',3=>'3',4=>'4'),
		) );
		
	//Header widget
	class WP_header_widget_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/widgets.php" class="button"  
	target="_blank"><?php _e('Click here to add a header widget','elitepress'); ?></a>
    <?php
    }
	}

	$wp_customize->add_setting(
		'header_widget',
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_header_widget_Customize_Control( $wp_customize, 'header_widget', array(	
			'section' => 'header_widget_settings',
			'priority'   => 500,
		))
	);
}
add_action( 'customize_register', 'elitepress_header_widget_customizer' );	