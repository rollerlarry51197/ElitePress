<?php
$default_content = false;
$current_options = get_option('elitepress_lite_options');
$elitepress_service_content  = get_theme_mod( 'elitepress_service_content', $default_content );

if(!empty($current_options)){
if(empty($elitepress_service_content)){
	
			$old_theme_servives = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), theme_data_setup() );;
			if($old_theme_servives['service_one_icon']!= '' || $old_theme_servives['service_one_title']!= '' || $old_theme_servives['service_one_description']!= '' 
			|| $old_theme_servives['service_two_icon']!= '' || $old_theme_servives['service_two_title']!= '' || $old_theme_servives['service_two_description']!= '' 
			|| $old_theme_servives['service_three_icon']!= '' || $old_theme_servives['service_three_title']!= '' || $old_theme_servives['service_three_description']!= ''
			|| $old_theme_servives['service_four_four']!= '' || $old_theme_servives['service_four_title']!= '' || $old_theme_servives['service_four_description']!= '')
			{
			
					$elitepress_service_content = json_encode( array(
						array(
						'icon_value' => isset($old_theme_servives['service_one_icon'])? $old_theme_servives['service_one_icon']:'',
						'title'      => isset($old_theme_servives['service_one_title'])? $old_theme_servives['service_one_title']:'',
						'text'       => isset($old_theme_servives['service_one_description'])? $old_theme_servives['service_one_description']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b56',
						'color'      => '#e91e63',
						),
						array(
						'icon_value' => isset($old_theme_servives['service_two_icon'])? $old_theme_servives['service_two_icon']:'',
						'title'      => isset($old_theme_servives['service_two_title'])? $old_theme_servives['service_two_title']:'',
						'text'       => isset($old_theme_servives['service_two_description'])? $old_theme_servives['service_two_description']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b66',
						'color'      => '#00bcd4',
						),
						array(
						'icon_value' => isset($old_theme_servives['service_three_icon'])? $old_theme_servives['service_three_icon']:'',
						'title'      => isset($old_theme_servives['service_three_title'])? $old_theme_servives['service_three_title']:'',
						'text'       => isset($old_theme_servives['service_three_description'])? $old_theme_servives['service_three_description']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b86',
						'color'      => '#4caf50',
						),
						
						array(
						'icon_value' => isset($old_theme_servives['service_four_icon'])? $old_theme_servives['service_four_icon']:'',
						'title'      => isset($old_theme_servives['service_four_title'])? $old_theme_servives['service_four_title']:'',
						'text'       => isset($old_theme_servives['service_four_description'])? $old_theme_servives['service_four_description']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b96',
						'color'      => '#4caf50',
						),
					
					
						) );
			}
}
}

$elitepress_lite_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options );
?>
<!-- Service Section -->
<section class="service">
	<div class="container">
	
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-header">
				<?php if($current_options['service_title']) { ?>
				<h3 class="section-title"><?php echo esc_html($current_options['service_title']); ?></h3>
				<?php }
				if($current_options['service_description']) { ?>
				<p class="section-subtitle"><?php echo esc_html($current_options['service_description']); ?></p>
				<?php } ?>
				</div>
			</div>		
		</div>
		<!-- /Section Title -->
		
		<?php elitepress_service_content( $elitepress_service_content ); ?>
	
	</div>
</section>
<!-- End of Service Section -->	
		
<?php
/**
 * Get content for features section.
 *
 * @since 1.1.30
 * @access public
 * @param string elitepress_service_content Section content in json format.
 * @param bool   $is_callback Flag to check if it's callback or not.
 */
function elitepress_service_content( $elitepress_service_content, $is_callback = false ) {
	if ( ! $is_callback ) { ?>
		<div class="row">
	    <?php
	}
	if ( ! empty( $elitepress_service_content ) ) {
		$allowed_html = array(
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'b'      => array(),
		'i'      => array(),
		);
		$elitepress_service_content = json_decode( $elitepress_service_content );
		foreach ( $elitepress_service_content as $features_item ) :
			$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'elitepress_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
			$title = ! empty( $features_item->title ) ? apply_filters( 'elitepress_translate_single_string', $features_item->title, 'Features section' ) : '';
			$text = ! empty( $features_item->text ) ? apply_filters( 'elitepress_translate_single_string', $features_item->text, 'Features section' ) : '';
			$link = ! empty( $features_item->link ) ? apply_filters( 'elitepress_translate_single_string', $features_item->link, 'Features section' ) : '';
			$image = ! empty( $features_item->image_url ) ? apply_filters( 'elitepress_translate_single_string', $features_item->image_url, 'Features section' ) : '';
			$color = '';
			if ( is_customize_preview() && ! empty( $features_item->color ) ) {
				$color = $features_item->color;
			}
			?>
			<div class="col-md-6 col-sm-6">
				<div class="media service-area">
					<?php if ( ! empty( $image ) ) : ?>
						<div class="service-featured-img">
							<img class="img-responsive" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
						</div>	
					<?php endif; ?>
						<?php if ( ! empty( $icon ) ) :?>
							<div class="service-box">
									<i class="fa <?php echo esc_html( $icon ); ?>"></i>
							</div>
					<?php endif; ?>
					<div class="media-body">			
					<?php if ( ! empty( $title ) ) : ?>
					<h4 class="entry-title"><?php echo esc_html( $title ); ?></h4>
					<?php endif; ?>
					<?php if ( ! empty( $text ) ) : ?>
					<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
					<?php endif; ?>
					</div>		
				</div>
			</div>
			<?php
			endforeach;
			}
			else
			{
			$title = array (__('Responsive design','elitepress'), __('Twitter Bootstrap 3.2.0','elitepress'), __('Exclusive support','elitepress'), __('Incredibly flexible','elitepress'));
			$icon = array('fa fa-shield','fa fa-tablet','fa fa-edit','fa fa-star-half-o');
			for($i=0; $i<=3; $i++) { ?>
			<div class="col-md-6 col-sm-6">
				<div class="media service-area">
					<div class="service-box" style="color:<?php echo $colors[$i]; ?>">
						<i class="<?php echo $icon[$i]; ?>"></i>
					</div>
					<h4 class="entry-title"><?php echo $title[$i]; ?></h4>
				<p><?php echo 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.'; ?></p>	
				</div>
			</div>
			<?php } 
	}
	if ( ! $is_callback ) { ?>
		</div>
		<?php
	}
}

if ( function_exists( 'elitepress_features' ) ) {
	$section_priority = apply_filters( 'elitepress_section_priority', 10, 'elitepress_features' );
	add_action( 'elitpress_sections', 'elitepress_features', absint( $section_priority ) );
	add_action( 'after_setup_theme', 'elitepress_features_register_strings', 11 );
}
?>