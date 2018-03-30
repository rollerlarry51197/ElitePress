<?php
function elitepress_scripts()
{	
	$elitepress_lite_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options );
	wp_enqueue_style('elitepress-bootstrap', WEBRITI_TEMPLATE_DIR_URI . '/css/bootstrap.css');
	wp_enqueue_style('elitepress-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome-min', WEBRITI_TEMPLATE_DIR_URI . '/css/font-awesome/css/font-awesome.min.css');
	
	if(get_option('elitepress_lite_options')!='')
	{
	$class=$current_options['webriti_stylesheet'];
	wp_enqueue_style('default', WEBRITI_TEMPLATE_DIR_URI . '/css/'.$class);
	
	}
	else
	{
	wp_enqueue_style('elitepress-default', WEBRITI_TEMPLATE_DIR_URI . '/css/default.css');
	}
	wp_enqueue_style('elitepress-theme-menu', WEBRITI_TEMPLATE_DIR_URI . '/css/theme-menu.css');
	wp_enqueue_style('elitepress-media-responsive', WEBRITI_TEMPLATE_DIR_URI . '/css/media-responsive.css');	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('elitepress-menu', WEBRITI_TEMPLATE_DIR_URI .'/js/menu/menu.js',array('jquery'));
	wp_enqueue_script('elitepress-custom', WEBRITI_TEMPLATE_DIR_URI .'/js/front-page/custom.js');
	wp_enqueue_script('bootstrap', WEBRITI_TEMPLATE_DIR_URI .'/js/bootstrap.min.js');
	wp_enqueue_style('elitepress-flexslider', WEBRITI_TEMPLATE_DIR_URI . '/css/flexslider/flexslider.css');
	wp_enqueue_script('elitepress-jquery-flexslider', WEBRITI_TEMPLATE_DIR_URI .'/js/flexslider/jquery.flexslider.js');	
	wp_enqueue_script('jquery-flex-element', WEBRITI_TEMPLATE_DIR_URI .'/js/flexslider/flexslider-element.js');	
	
}
add_action('wp_enqueue_scripts', 'elitepress_scripts');

if ( is_singular() ){ wp_enqueue_script( "comment-reply" );	}

// Adding custom enqueue scripts
function custom_scripts(){
	
	$current_options = wp_parse_args( get_option('elitepress_lite_options',array()),theme_data_setup());
  ?>
	<style>
	<?php echo $current_options['webrit_custom_css']; ?>
	</style>
	<?php
 }
add_action( 'wp_head', 'custom_scripts' ); 

function elitepress_custmizer_style()
 {
		wp_enqueue_style('elitepress-customizer-css',WEBRITI_TEMPLATE_DIR_URI.'/css/cust-style.css');
}
add_action('customize_controls_print_styles','elitepress_custmizer_style');

?>