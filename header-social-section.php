<!-- Header social & Contact Info -->
<?php $elitepress_lite_options=theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options ); 
		$pro_slider_data1 = get_option('elitepress_lite_options');
	if(!isset($pro_slider_data1['contact_email']))
	{
?>
<div class="header-info">	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div id="top-header-sidebar-left">
					<?php if( is_active_sidebar('home-header-sidebar_left') ) { ?>
					<?php  dynamic_sidebar( 'home-header-sidebar_left' ); ?>
					<?php } ?>				
				</div>
			</div>
			<div class="col-md-6">
				<div id="top-header-sidebar-right">
					<?php if( is_active_sidebar('home-header-sidebar_right') ) { ?>
					<?php  dynamic_sidebar( 'home-header-sidebar_right' ); ?>
					<?php } ?>
				</div>
			</div>
		</div>		
	</div>
</div>
<?php } else { if((is_active_sidebar('home-header-sidebar_left') || (is_active_sidebar('home-header-sidebar_right') )))
	{ ?>
	<div class="header-info">	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div id="top-header-sidebar-left">
					<?php  dynamic_sidebar( 'home-header-sidebar_left' ); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div id="top-header-sidebar-right">
					<?php  dynamic_sidebar( 'home-header-sidebar_right' ); ?>
				</div>
			</div>
		</div>		
	</div>
</div>
	<?php 
	}
	else {
?>
<div class="header-info">
<div class="container">
		<div class="row">
		<?php 
		if($current_options['header_social_media_enabled']==true) { ?>
			<div class="col-md-6">
				<ul class="head-contact-social">
					<?php if($current_options['social_media_facebook_link']!='') { ?>
					<li class="facebook"><a href="<?php echo esc_url($current_options['social_media_facebook_link']); ?>" <?php if($current_options['facebook_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-facebook"></i></a></li>
					<?php }
					if($current_options['social_media_twitter_link']!='') { ?>
					<li class="twitter"><a href="<?php echo esc_url($current_options['social_media_twitter_link']); ?>" <?php if($current_options['twitter_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-twitter"></i></a></li>
					<?php }
					if($current_options['social_media_googleplus_link']!='') { ?>
					<li class="googleplus"><a href="<?php echo esc_url($current_options['social_media_googleplus_link']); ?>" <?php if($current_options['google_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-google-plus"> </i></a></li>
					<?php }
					if($current_options['social_media_linkedin_link']!='') { ?>
					<li class="linkedin"><a href="<?php echo esc_url($current_options['social_media_linkedin_link']); ?>" <?php if($current_options['linkedin_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-linkedin"></i></a></li>
					<?php }
					if($current_options['social_media_skype_link']!='') { ?>
					<li class="skype"><a href="<?php echo esc_url($current_options['social_media_skype_link']); ?>" <?php if($current_options['skype_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-skype"></i></a></li>
					<?php }
					if($current_options['social_media_dribbble_link']!='') { ?>
					<li class="dribbble"><a href="<?php echo esc_url($current_options['social_media_dribbble_link']); ?>" <?php if($current_options['dribble_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-dribbble"></i></a></li>
					<?php }
					if($current_options['social_media_youtube_link']!='') { ?>
					<li class="youtube"><a href="<?php echo esc_url($current_options['social_media_youtube_link']); ?>" <?php if($current_options['youtube_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-youtube"></i></a></li>
					<?php }
					if($current_options['social_media_vimeo_link']!='') { ?>
					<li class="vimeo"><a href="<?php echo esc_url($current_options['social_media_vimeo_link']); ?>" <?php if($current_options['viemo_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-vimeo-square"></i></a></li>
					<?php }
					if($current_options['social_media_pagelines_link']!='') { ?>
					<li class="pagelines"><a href="<?php echo esc_url($current_options['social_media_pagelines_link']); ?>" <?php if($current_options['pagelines_media_link_target']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-pagelines"></i></a></li>
					<?php } ?>
				</ul>				
			</div>
			<?php } ?>
			<div class="col-md-6">
				<div class="clear"></div>
			<?php if($current_options['contact_address_settings']==true) { ?>
				<ul class="head-contact-info">
					<?php if($current_options['contact_email']){ ?>
					<li><a href="mailto:<?php echo $current_options['contact_email'];?>"><?php echo $current_options['contact_email'];?><i class="fa fa-envelope"></i></a></li>
					<?php } ?>
					<?php if(($current_options['contact_email']) && ($current_options['contact_phone_number'])){ ?>
					<li><span class="line"><?php echo '&#124'; ?></span></li>
					<?php } ?>
					<?php if($current_options['contact_phone_number']){ ?>
					<li><i class="fa fa-phone"></i><?php echo $current_options['contact_phone_number']; ?></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>	
		</div>		
	</div>
</div>	
<?php } }?>	