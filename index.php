<?php
get_header();
global $wp_query;
$postid = $wp_query->post->ID;
if( is_home() ){
$postid = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : get_the_ID() );
}
wp_reset_query();
if ( get_post_meta($postid, 'banner_chkbx', true) || get_post_meta($postid, 'banner_title', true) || get_post_meta($postid, 'banner_description', true) )
{
?>
<section class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title">
						<?php if( get_post_meta($postid, 'banner_title', true)) { ?>
						<h1><?php echo get_post_meta($postid, 'banner_title', true); ?></h1>
						<div class="page-title-seprator"></div>
						<?php } else { ?>
						<h1><?php the_title(); ?></h1>
						<?php } ?>
						<?php if( get_post_meta($postid, 'banner_description', true)) { ?>
						<p><?php echo get_post_meta($postid, 'banner_description', true); ?></p>
						<?php } else { ?>
						<p><?php echo 'Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.'; ?></p>
						<?php }  ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<!-- Blog Full Width Section -->
<div class="blog-section">
	<div class="container">
		<div class="row">
			<!--Blog Area-->
					<div class="<?php elitepress_post_layout_class(); ?>" >
						<div class="site-content">
					<?php 	
					while(have_posts()):the_post();
					global $more;
					$more = 0;
					get_template_part('content',''); 
					endwhile; ?>
					<div class="paginations">
					<?php
					// Previous/next page navigation.
					the_posts_pagination( array(
					'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
					'next_text'          => '<i class="fa fa-angle-double-right"></i>',
					) );
					?>
					</div>
					</div>
				</div>
			<!--/Blog Area-->
			<!--Sidebar Area-->
			<div class="col-md-4">
				<div class="sidebar-section-right">
				<?php get_sidebar(); ?>
				</div>
			</div>
			<!--Sidebar Area-->
		</div>	
		
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog Full Width Section -->