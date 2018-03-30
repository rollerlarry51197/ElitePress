<?php add_action( 'widgets_init', 'elitepress_widgets_init');
function elitepress_widgets_init() {
$elitepress_lite_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options );
$header_column_layout = 12 / $current_options['header_column_layout'];
	/*sidebar*/
	register_sidebar( array(
			'name' => __( 'Sidebar widget area', 'elitepress' ),
			'id' => 'sidebar_primary',
			'description' => __( 'Sidebar widget area', 'elitepress' ),
			'before_widget' => '<aside class="sidebar-widget widget">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );

	/* Top header left sidebar */
		register_sidebar( array(
				'name' => __( 'Top header left area', 'elitepress' ),
				'id' => 'home-header-sidebar_left',
				'description' => __('Top header left area', 'elitepress' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			) );
	
		/* Top header right sidebar */
		register_sidebar( array(
			'name' => __( 'Top header right area', 'elitepress' ),
			'id' => 'home-header-sidebar_right',
			'description' => __( 'Top header right area', 'elitepress' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	
		/* Top header widget sidebar */
		register_sidebar( array(
				'name' => __( 'Top header widget area', 'elitepress' ),
				'id' => 'header_widget_area',
				'description' => __( 'Top header widget area', 'elitepress' ),
				'before_widget' => '<div id="%1$s" class="col-md-'.$header_column_layout.' col-sm-6 col-xs-6 widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		) );

		register_sidebar( array(
		'name' => __('Footer widget area', 'elitepress' ),
		'id' => 'footer_widget_area',
		'description' => __('Footer widget area', 'elitepress' ),
		'before_widget' => '<div class="col-md-4 col-sm-6 col-xs-12"><aside class="widget">',
				'after_widget' => '</aside></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
) );
}                     
?>