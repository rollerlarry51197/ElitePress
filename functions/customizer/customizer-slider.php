<?php
$repeater_path = trailingslashit( get_template_directory() ) . '/functions/customizer-repeater/functions.php';
if ( file_exists( $repeater_path ) ) {
require_once( $repeater_path );
}
function elitepress_slider_customizer( $wp_customize ) {

// list control categories	
if ( ! class_exists( 'WP_Customize_Control' ) ) return NULL;

 class Category_Dropdown_Custom_Control extends WP_Customize_Control
 {
    private $cats = false;
	
    public function __construct($wp_customize, $id, $args = array(), $options = array())
    {
        $this->cats = get_categories($options);
        parent::__construct( $wp_customize, $id, $args );
    }

    public function render_content()
       {
            if(!empty($this->cats))
            {
                ?>
                    <label>
                      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                      <select multiple="multiple" <?php $this->link(); ?>>
                           <?php
                                foreach ( $this->cats as $cat )
                                {
                                    printf('<option value="%s" %s>%s</option>', $cat->term_id, selected($this->value(), $cat->term_id, false), $cat->name);
                                }
                           ?>
                      </select>
                    </label>
                <?php
            }
       }
 }
// list contro categories

	//slider Section 
	$wp_customize->add_panel( 'elitepress_slider_setting', array(
		'priority'       => 400,
		'capability'     => 'edit_theme_options',
		'title'      => __('Slider settings', 'elitepress'),
	) );
	
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Slider settings','elitepress'),
            'panel'  => 'elitepress_slider_setting',)
    );
	
	//Hide slider
	
	$wp_customize->add_setting(
    'elitepress_lite_options[home_banner_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[home_banner_enabled]',
    array(
        'label' => __('Enable home banner','elitepress'),
		'priority'   => 1,
        'section' => 'slider_section_settings',
        'type' => 'checkbox',
    )
	);
	 
	 
	if ( class_exists( 'Elitepress_Repeater' ) ) {
			$wp_customize->add_setting( 'elitepress_slider_content', array(
			'sanitize_callback' => 'elitepress_repeater_sanitize',
			) );

			$wp_customize->add_control( new Elitepress_Repeater( $wp_customize, 'elitepress_slider_content', array(
				'label'                             => esc_html__( 'Slider Content', 'elitepress' ),
				'priority'   => 2,
				'section'                           => 'slider_section_settings',
				'add_field_label'                   => esc_html__( 'Add new slide', 'elitepress' ),
				'item_name'                         => esc_html__( 'Slide', 'elitepress' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}
	 
	 //Slider Animation duration

	$wp_customize->add_setting(
    'elitepress_lite_options[animationSpeed]',
    array(
        'default' => '1500',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'elitepress_lite_options[animationSpeed]',
    array(
        'type' => 'select',
        'label' => __('Animation speed','elitepress'),
        'section' => 'slider_section_settings',
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000'=>'2.0','2500'=>'2.5','3000'=>'3.0','3500'=>'3.5','4000'=>'4.0','4500'=>'4.5','5000'=>'5.0','5500'=>'5.5'),
		
		));
		
	//Slide Show Speed
	$wp_customize->add_setting(
    'elitepress_lite_options[slideshowSpeed]',
    array(
        'default' => '2500',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'elitepress_lite_options[slideshowSpeed]',
    array(
        'type' => 'select',
        'label' => __('Slideshow speed','elitepress'),
        'section' => 'slider_section_settings',
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000'=>'2.0','2500'=>'2.5','3000'=>'3.0','3500'=>'3.5','4000'=>'4.0','4500'=>'4.5','5000'=>'5.0','5500'=>'5.5'),
		
		));	
		}
	add_action( 'customize_register', 'elitepress_slider_customizer' );
	
	function elitepress_slider_sanitize_layout( $value ) {
    if ( ! in_array( $value, array( 'Uncategorized','category_slider' ) ) )    
    return $value;
	}
	?>