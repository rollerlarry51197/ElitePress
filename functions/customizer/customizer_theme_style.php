<?php
function elitepress_theme_style_customizer( $wp_customize ) {
	
//Theme color
class WP_color_Customize_Control extends WP_Customize_Control {
public $type = 'new_menu';

       function render_content()
       
	   {
	   echo '<h3>'.__('Theme Color','elitepress').'</h3>';
		  $name = '_customize-color-radio-' . $this->id; 
		  foreach($this->choices as $key => $value ) {
            ?>
               <label>
				<input type="radio" value="<?php echo $key; ?>" name="<?php echo esc_attr( $name ); ?>" data-customize-setting-link="<?php echo esc_attr( $this->id ); ?>" <?php if($this->value() == $key){ echo 'checked="checked"'; } ?>>
				<img <?php if($this->value() == $key){ echo 'class="color_scheem_active"'; } ?> src="<?php echo get_template_directory_uri(); ?>/images/bg-patterns/<?php echo $value; ?>" alt="<?php echo esc_attr( $value ); ?>" />
				</label>
				
            <?php
		  }
		  ?>
		  <script>
			jQuery(document).ready(function($) {
				$("#customize-control-elitepress_lite_options-webriti_stylesheet label img").click(function(){
					$("#customize-control-elitepress_lite_options-webriti_stylesheet label img").removeClass("color_scheem_active");
					$(this).addClass("color_scheem_active");
				});
			});
		  </script>
		  <?php
       }

}
$wp_customize->add_section( 'header_image' , array(
		'title'      => __('Theme style setting', 'elitepress'),
		'priority'   => 190,
   	) );
	
	$wp_customize->add_setting(
    'elitepress_lite_options[layout_selector]',
    array(
        'default' => __('wide','elitepress'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'elitepress_lite_options[layout_selector]',
    array(
        'type' => 'select',
        'label' => __('Theme Layout','elitepress'),
        'section' => 'header_image',
		'sanitize_callback' => 'sanitize_text_field',
		'choices' => array('wide'=>'wide', 'boxed'=>'boxed'),
	));
	
    $wp_customize->add_setting(
	'elitepress_lite_options[webriti_stylesheet]', array(
        'default'        => 'default.css',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    
	$wp_customize->add_control(new WP_color_Customize_Control($wp_customize,'elitepress_lite_options[webriti_stylesheet]',
	array(
        'label'   => 'Theme Color Schemes',
        'section' => 'header_image',
		'type' => 'radio',
		'choices' => array(
			'default.css' => 'blue.png',
			'bittersweet.css' => 'default.png',
    )
	)));
	}
	add_action( 'customize_register', 'elitepress_theme_style_customizer' );
?>