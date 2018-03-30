<?php if ( ! function_exists( 'elitpress_slider_default_customize_register' ) ) :
	
	function elitpress_slider_default_customize_register( $wp_customize ) {
		
			// Elitepress default slider data.
			
		 if(get_option('elitepress_lite_options')!='')
		 {
			$elitepress_slider_content_control = $wp_customize->get_setting( 'elitepress_slider_content' );
					if ( ! empty( $elitepress_slider_content_control ) ) {
						$elitepress_lite_options=theme_data_setup();
						$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options ); 
						$query_args =array( 'category__in' =>$current_options['slider_select_category'],'ignore_sticky_posts' => 1 );
						$slider = new WP_Query( $query_args ); 
						if( $slider->have_posts() )
							{	
								$elitepress_slider_content_control->default = json_encode( array() );
								while ( $slider->have_posts() ) : $slider->the_post();
								if( strpos( wp_strip_all_tags(get_the_excerpt()), 'Read More' ) !== false ) $button_text = 'Read More';
									$pro_slider_data[] = array(
									'title'      => get_the_title(),
									'text'       => rtrim(wp_strip_all_tags(get_the_excerpt()),'Read More'),
									'button_text'      => $button_text,
									'link'       => '#',
									'image_url'  => get_the_post_thumbnail_url(),
									'open_new_tab' => false,
									'id'         => 'customizer_repeater_56d7ea7f40b50',
								);
								endwhile; 
								$elitepress_slider_content_control->default = json_encode($pro_slider_data);
							}
					}
		 } else
				{
				$elitepress_slider_content_control = $wp_customize->get_setting( 'elitepress_slider_content' );
				if ( ! empty( $elitepress_slider_content_control ) ) {
				$elitepress_slider_content_control->default = json_encode( array(
				array(
				'title'      => esc_html__( 'ElitePress by webriti themes', 'elitepress' ),
				'text'       => esc_html__( 'With our themes, you can create a stunning website in no time.', 'elitepress' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/slide/slide1.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b96',
				),
				array(
				'title'      => esc_html__( 'A clean and fresh design', 'elitepress' ),
				'text'       => esc_html__( 'With our themes, you can create a stunning website in no time.', 'elitepress' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  => get_template_directory_uri().'/images/slide/slide2.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b97',
				),
				array(
				'title'      => esc_html__( 'ElitePress by webriti themes', 'elitepress' ),
				'text'       => esc_html__( 'With our themes, you can create a stunning website in no time.', 'elitepress' ),
				'button_text'      => 'Read more',
				'link'       => '#',
				'image_url'  =>  get_template_directory_uri().'/images/slide/slide3.jpg',
				'open_new_tab' => 'no',
				'id'         => 'customizer_repeater_56d7ea7f40b98',
				),
			) );

		} 
		 }
	}
	add_action( 'customize_register', 'elitpress_slider_default_customize_register' );
	
endif;

if ( ! function_exists( 'elitpress_service_default_customize_register' ) ) :
	
	function elitpress_service_default_customize_register( $wp_customize ) {

if(get_option('elitepress_lite_options')!='')
		 {	
			$old_theme_servives = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), theme_data_setup() );
			
			if($old_theme_servives['service_one_icon']!= '' || $old_theme_servives['service_one_title']!= '' || $old_theme_servives['service_one_description']!= '' 
			|| $old_theme_servives['service_two_icon']!= '' || $old_theme_servives['service_two_title']!= '' || $old_theme_servives['service_two_description']!= '' 
			|| $old_theme_servives['service_three_icon']!= '' || $old_theme_servives['service_three_title']!= '' || $old_theme_servives['service_three_description']!= ''
			 || $old_theme_servives['service_four_icon']!= '' || $old_theme_servives['service_four_title']!= '' || $old_theme_servives['service_four_description']!= '')
			 {
			 $elitepress_service_content_control = $wp_customize->get_setting( 'elitepress_service_content' );
				if ( ! empty( $elitepress_service_content_control ) ) {
					$elitepress_service_content_control->default = json_encode( array(
						array(
						 'icon_value' => isset($old_theme_servives['service_one_icon'])? $old_theme_servives['service_one_icon']:'',
						 'title'      => isset($old_theme_servives['service_one_title'])? $old_theme_servives['service_one_title']:'',
						'text'       => isset($old_theme_servives['service_one_description'])? $old_theme_servives['service_one_description']:'',
						'link'       => '',
						 'id'         => 'customizer_repeater_56d7ea7f40b56',
						 ),
						array(
						 'icon_value' => isset($old_theme_servives['service_two_icon'])? $old_theme_servives['service_two_icon']:'',
						 'title'      => isset($old_theme_servives['service_two_title'])? $old_theme_servives['service_two_title']:'',
						 'text'       => isset($old_theme_servives['service_two_description'])? $old_theme_servives['service_two_description']:'',
						 'link'       => '',
						 'id'         => 'customizer_repeater_56d7ea7f40b66',
						 ),
						 array(
						 'icon_value' => isset($old_theme_servives['service_three_icon'])? $old_theme_servives['service_three_icon']:'',
						 'title'      => isset($old_theme_servives['service_three_title'])? $old_theme_servives['service_three_title']:'',
						 'text'       => isset($old_theme_servives['service_three_description'])? $old_theme_servives['service_three_description']:'',
						 'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b86',
						),
						
						 array(
						 'icon_value' => isset($old_theme_servives['service_four_icon'])? $old_theme_servives['service_four_icon']:'',
						 'title'      => isset($old_theme_servives['service_four_title'])? $old_theme_servives['service_four_title']:'',
						 'text'       => isset($old_theme_servives['service_four_description'])? $old_theme_servives['service_four_description']:'',
						 'link'       => '',
						 'id'         => 'customizer_repeater_56d7ea7f40b96',
						),
					
					
						) );
		 }} }
			else {
			
			 $elitepress_service_content_control = $wp_customize->get_setting( 'elitepress_service_content' );
			if ( ! empty( $elitepress_service_content_control ) ) {
				$elitepress_service_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa fa-shield',
					'title'      => esc_html__( 'Responsive design', 'elitepress' ),
					'text'       => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
					'id'         => 'customizer_repeater_56d7ea7f40b56',
					'color'      => '#e91e63',
					),
					array(
					'icon_value' => 'fa fa-tablet',
					'title'      => esc_html__( 'Twitter Bootstrap 3.2.0', 'elitepress' ),
					'text'       => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
					'id'         => 'customizer_repeater_56d7ea7f40b66',
					'color'      => '#00bcd4',
					),
					array(
					'icon_value' => 'fa fa-edit',
					'title'      => esc_html__( 'Exclusive support', 'elitepress' ),
					'text'       => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
					'id'         => 'customizer_repeater_56d7ea7f40b86',
					'color'      => '#4caf50',
					),
					
					array(
					'icon_value' => 'fa fa-star-half-o',
					'title'      => esc_html__( 'Incredibly flexible', 'elitepress' ),
					'text'       => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
					'id'         => 'customizer_repeater_56d7ea7f40b96',
					'color'      => '#4caf50',
					),
					
					
				) );

			}
			
		}
}
	add_action( 'customize_register', 'elitpress_service_default_customize_register' );
	
endif;