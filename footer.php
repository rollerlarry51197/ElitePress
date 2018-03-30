<?php $elitepress_lite_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options ); 
if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
<!-- Footer Section -->
<footer class="site-footer">
	<div class="container">
		<!-- Footer Widget -->	
		<div class="row">
		<?php  dynamic_sidebar( 'footer_widget_area' );	 ?>
		</div>
		<!-- /Footer Widget -->	
	</div>
</footer>
<!-- /Footer Section -->
<?php } ?>
<!-- Footer Copyright Section -->
<footer class="site-info">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="footer-copyright">
					<?php echo $current_options['footer_copyright_text'];?>
				</div>
			</div>
			<div class="col-md-5">
			<?php if($current_options['footer_menu_bar_enabled'] == true ) { ?>	
			<?php
			wp_nav_menu( array(  
					'theme_location' => 'footer_menu',
					'container'  => 'nav-collapse collapse navbar-inverse-collapse',
					'menu_class' => 'footer-menu-links',
					'fallback_cb' => 'webriti_fallback_page_menu',
					'walker' => new webriti_nav_walker()
					)
				);	
			?>
			<?php } ?>
			</div>
		</div> 
	</div>
</footer>
<!-- /Footer Copyright Section -->
</div><!-- /Close of wrapper -->  

<!--Scroll To Top--> 
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
<script>
jQuery(document).ready(function(){jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>100){jQuery('.hc_scrollup').fadeIn();}else{jQuery('.hc_scrollup').fadeOut();}});jQuery('.hc_scrollup').click(function(){jQuery("html, body").animate({scrollTop:0},600);return false;});});
</script>
<?php wp_footer(); ?>
	</body>
</html>