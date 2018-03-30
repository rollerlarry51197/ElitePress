<?php
function theme_data_setup()
{	$slider_image = WEBRITI_TEMPLATE_DIR_URI . "/images/slider.jpg";
	$service_image = WEBRITI_TEMPLATE_DIR_URI . "/images/service.jpg";
	$portfolio_image = WEBRITI_TEMPLATE_DIR_URI . "/images/portfolio.jpg";
	return $theme_options=array(
			//Logo and Fevicon header
			'custom_background_enabled'=>'off',
			'upload_image_favicon'=>'',
			'webrit_custom_css'=>'',
			'layout_selector' => 'wide',
			'webriti_stylesheet' => 'default.css',
			'header_column_layout' => 3,
			
			
			//Slider
			'animation' => 'slide',
			'animationSpeed' => '1500',
			'slide_direction' => 'horizontal',
			'slideshowSpeed' => '2500',
			'slider_list'=>'',
			'total_slide'=>'',
			
			
			
			'home_banner_enabled'=>true,
			'slider_total' => 4,
			'slider_radio' => 'demo',
			'slider_options'=> 'slide',
			'slider_transition_delay'=> '2000',
			'slider_select_category' => 'Uncategorized',
			'featured_slider_post' => '',
			
			// Social media links
			'header_social_media_enabled'=> true,
			'facebook_media_link_target'=> true,
			'twitter_media_link_target'=> true,
			'google_media_link_target'=> true,
			'linkedin_media_link_target'=> true,
			'skype_media_link_target'=> true,
			'dribble_media_link_target'=> true,
			'youtube_media_link_target'=> true,
			'viemo_media_link_target'=> true,
			'pagelines_media_link_target'=> true,
			'social_media_facebook_link' => "#",
			'social_media_twitter_link' => "#",
			'social_media_googleplus_link' => "#",
			'social_media_linkedin_link' => "#",
			'social_media_skype_link' => "#",
			'social_media_dribbble_link' => "#",
			'social_media_youtube_link' => "#",
			'social_media_vimeo_link' => "#",
			'social_media_pagelines_link' => "#",
			
			//Contact Address Settings
			'contact_address_settings' => true,
			'contact_phone_number' => '+48-0987-654-321',
			'contact_email' => 'info@elitepresstheme.com',
			
			
			
			//header logo setting
			'logo_section_settings' => true,
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'250',
			'text_title'=>true,
			
			//header search Bar setting
			'header_search_bar_enabled' => true,
			
			//Home Top Call Out Area
			'header_call_out_title'=> __('Want to say hey or find out more?','elitepress'),
			'header_call_out_description'=> 'Reprehen derit in voluptate velit cillum dolore eu fugiat nulla pariaturs  sint occaecat proidentse.',
			'header_call_out_btn_text'=> __('Read More','elitepress'),
			'header_call_out_btn_link'=>'',
			'header_call_out_btn_link_target'=>true,
			
			
			//Footer Copyright custmization
			'footer_copyright_text' => '<p>'.__('©2017 All Rights Reserved - Webriti. - Designed and Developed by','elitepress').'<a href="http://www.webriti.com/" target="_blank">'.__('Webriti','elitepress').'</a></p>',
			
			//Footer Menu bar Setting			
			'footer_menu_bar_enabled' => true,
			
			//portfolio
			'portfolio_section_enabled' => 'on',
			
			'front_portfolio_title' => __('Latest projects','elitepress'),
			'front_portfolio_description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit...',
			
			'portfolio_one_title' => __('Growing your business','elitepress'),
			'portfolio_one_description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras 	mattis consectetur purus sit...',
			'portfolio_one_image' => $portfolio_image,

			'portfolio_two_title' => __('Functional elegance','elitepress'),
			'portfolio_two_description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit...',
			'portfolio_two_image' => $portfolio_image,
			
			'portfolio_three_title' => __('Planning your next move','elitepress'),
			'portfolio_three_description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit...',
			'portfolio_three_image' => $portfolio_image,
			
			
			// service
			'service_section_enabled' => true,
			'service_title' => __('Our services','elitepress'),
			'service_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			/** Service One Setting **/
			'service_one_icon' => 'fa fa-shield',
			'service_one_title' => __('Responsive design','elitepress'),
			'service_one_description' => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
			/** Service Two Setting **/
			'service_two_icon' => 'fa fa-tablet',
			'service_two_title' => __('Twitter Bootstrap 3.2.0','elitepress'),
			'service_two_description' => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
			/** Service Three Setting **/
			'service_three_icon' => 'fa fa-edit',
			'service_three_title' => __('Exclusive support','elitepress'),
			'service_three_description' =>'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
			/** Service Four Setting **/
			'service_four_icon' => 'fa fa-star-half-o',
			'service_four_title' => __('Incredibly flexible','elitepress'),
			'service_four_description' => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.',
			
			//Latest news
			'blog_title' => __('Latest news','elitepress'),
			'blog_description' => 'Lorem ipsum dolor sit ametconsectetuer adipiscing elit.',
			
			//Banner Heading
			'banner_title_category' => __('Title','elitepress'),
			'banner_description_category' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
			
			'banner_title_archive' => __('Title','elitepress'),
			'banner_description_archive' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
			
			'banner_title_author' => __('Title','elitepress'),
			'banner_description_author' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
			
			'banner_title_404' => __('404 title','elitepress'),
			'banner_description_404' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
								
			'banner_title_tag' => __('Title','elitepress'),
			'banner_description_tag' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
								
			'banner_title_search' => __('Title','elitepress'),
			'banner_description_search' => 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.',
			
			);
}
?>