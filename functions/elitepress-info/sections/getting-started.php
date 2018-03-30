<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
?>

<div id="getting_started" class="elitepress-tab-pane active">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="elitepress-info-title text-center"><?php echo __('About ElitePress','elitepress'); ?><?php if( !empty($elitepress['Version']) ): ?> <sup id="elitepress-theme-version"><?php echo esc_attr( $elitepress['Version'] ); ?> </sup><?php endif; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
				<p><?php esc_html_e( "ElitePress is a WordPress theme developed for corporate business. It provides a simple and elegant look. Thousands of users are loving it, as it's perfect for multiple businesses, like digital agencies, freelancers, bloggers, startups, portfolios, corporate or any other type of activity. The theme is developed using Bootstrap 3 CSS framework, making it friendly to all the devices (mobiles, tablets, laptops etc.). ElitePress Lite features sections like Header, Slider, CTA, Services, Portfolios and 3 column Widgetized Footer. You can also show your social and contact information in the header section, for a more effective web presence. Theme comes with two page templates one is homepage and the second is full-width page template.","elitepress");?></p>
				<p>
				<?php esc_html_e( 'The premium version, ElitePress PRO, offers more enhancements and features. Like a boxed layout with background patterns, 7 predefined color schemes plus the opportunity to create your own color, an eye-catching Slider, a Layout Manager, and unlimited Services, Testimonials, Portfolios, Clients/Sponsors, Blog, and Latest News. You will also get many page templates: About, Service, Portfolio, Blog, and Contact Us. The theme supports popular plugins like WPML, Polylang and the JetPack Gallery Extensions. Just navigate to Appearance/Customize to start personalising your theme. You can see the premium version, ElitePress PRO at https://webriti.com/demo/wp/elitepress.', 'elitepress' ); ?>
				</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/functions/elitepress-info/img/elitepress.png'; ?>" alt="<?php esc_html_e( 'Appointment Blue Child Theme', 'elitepress' ); ?>" />
				</div>
			</div>	
		</div>
	
	
		 <div class="row">
		 
			<div class="elitepress-tab-center">

				<h1><?php esc_html_e( "Useful Links", 'elitepress' ); ?></h1>

			</div>
			
			<div class="col-md-6"> 
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">

					<a href="<?php echo 'https://webriti.com/demo/wp/lite/elitepress/'; ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
					<p class="info-text"><?php echo __('Lite Demo','elitepress'); ?></p></a>
					
					<a href="<?php echo 'http://webriti.com/demo/wp/elitepress'; ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
					<p class="info-text"><?php echo __('Pro Demo','elitepress'); ?></p></a>
					
					<a href="<?php echo 'http://webriti.com/help/category/themes/elitepress/'; ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-sos info-icon"></div>
					<p class="info-text"><?php echo _e('Premium Theme Support','elitepress'); ?></p></a>
					
				</div>
			</div>
			
			<div class="col-md-6">	
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
					
					<a href="<?php echo 'http://webriti.com/elitepress'; ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
					<p class="info-text"><?php echo _e('Premium Theme Details','elitepress'); ?></p></a>
					
					<a href="<?php echo 'https://wordpress.org/support/view/theme-reviews/elitepress'; ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-smiley info-icon"></div>
					<p class="info-text"><?php echo _e('Your feedback is valuable to us','elitepress'); ?></p></a>
				</div>
			</div>
			
		</div>	
	</div>
</div>	