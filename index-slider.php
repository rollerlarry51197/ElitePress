<?php
$slide_options = get_theme_mod('elitepress_slider_content');

if(empty($slide_options))
{
	$lite_slider_data = get_option('elitepress_lite_options');
	
	if(!empty($lite_slider_data))
	{
		
		$elitepress_lite_options=theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options ); 
		$query_args =array( 'category__in' =>$current_options['slider_select_category'],'ignore_sticky_posts' => 1 );
		$slider = new WP_Query( $query_args ); 
		if( $slider->have_posts() )
			{
				while ( $slider->have_posts() ) : $slider->the_post();
				
				if( strpos( wp_strip_all_tags(get_the_excerpt()), 'Read More' ) !== false ) $button_text = 'Read More';
					$pro_slider_data_old[] = array(
						'title'      => get_the_title(),
						'text'       => rtrim(wp_strip_all_tags(get_the_excerpt()),'Read More'),
						'button_text'      => $button_text,
						'link'       => '#',
						'image_url'  => get_the_post_thumbnail_url(),
						'open_new_tab' => false,
						'id'         => 'customizer_repeater_56d7ea7f40b50',
				);
				endwhile; 
				$slide_options = json_encode($pro_slider_data_old);
			}
				
	}
	
}

$elitepress_lite_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options );
$settings= array();
$settings=array('animation'=>$current_options['animation'],'animationSpeed'=>$current_options['animationSpeed'],'slide_direction'=>$current_options['slide_direction'],'slideshowSpeed' =>$current_options['slideshowSpeed']);
 
wp_register_script('elitepress-slider',get_template_directory_uri().'/js/front-page/slider.js',array('jquery'));
wp_localize_script('elitepress-slider','slider_settings',$current_options);
wp_enqueue_script('elitepress-slider');
?>
<?php if($current_options['home_banner_enabled'] == true) { ?>
<!-- Slider -->
<section class="homepage-mycarousel">

		<div class="flexslider">
		 <div class="flex-viewport">
			<ul class="slides">
			<?php 
				$slide_options = json_decode($slide_options);
				if( $slide_options!='' )
				{
					foreach($slide_options as $slide_iteam){?>
				<li>
					<?php if($slide_iteam->image_url!=''){ ?>
					<img alt="img" class="img-responsive" src="<?php echo $slide_iteam->image_url; ?>" draggable="false">
					
					<?php
					}
					$img_description =  $slide_iteam->text;
					$readmorelink = $slide_iteam->link;
					$readmore_button = $slide_iteam->button_text;
					$open_new_tab = $slide_iteam->open_new_tab;
					?>
					
					<div class="container flex-slider-center">
						<?php if($slide_iteam->title != '') { ?>
						<div class="slide-text-bg1"><h1><?php echo $slide_iteam->title; ?></h1></div>
						<?php }?>
						<?php  
							if($img_description !=''){?>
							<div class="slide-text-bg2">
							<h3><?php echo $img_description ?></h3>
							</div>
							<?php } ?>
						
						<?php if($readmore_button != '') {?>
						<div class="flex-btn-div">
							<a href="<?php echo $readmorelink ?>" <?php if($open_new_tab== 'yes') { echo "target='_blank'"; } ?> class="btn1 flex-btn"><?php echo $readmore_button ?></a>
						</div>	
						<?php }?>						
                    </div>
				</li>	
				<?php } 
				} else {
						
					$slider_default_title = array(__('Welcome to the ElitePress WordPress Theme','elitepress'), __('Boost your site today!','elitepress'), __('Let us help you make your website amazing!','elitepress'),);
						for($i=1; $i<=3; $i++) 
						{  ?>
						<li>
							<img class="img-responsive" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/slide/slide<?php echo $i; ?>.jpg">
							<div class="container flex-slider-center">
								<div class="slide-text-bg1"><h1><?php echo $slider_default_title[$i-1]; ?></h1>
								</div>
								<div class="slide-text-bg2"><h3><?php echo 'Lorem ipsum dolor sit amet consectetuer adipiscing elit.'; ?></h3></div>
								<div class="flex-btn-div"><a class="btn1 flex-btn" href="#"><?php _e('Read More', 'elitepress'); ?></a></div>
							</div>
						</li>
				<?php }
				}?>
			</ul>
		</div>
		</div>
</section>
<?php } ?>
<!-- /Slider -->