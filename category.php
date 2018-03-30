<?php 
get_header(); ?>
<!-- Page Title Section -->
<?php get_template_part('banner','header'); ?>
<div class="clearfix"></div>
<!-- /Page Title Section -->
	
<!-- Blog Full Width Section -->
<div class="blog-section">
	<div class="container">
		<div class="row">
			<!--Blog Area-->
			<div class="<?php elitepress_post_layout_class(); ?>" >
				<div class="site-content">
					<h1 class="archive-title">
					<?php  _e( "Category  Archive", 'elitepress' ); echo ' '; echo single_cat_title( '', false ); ?>
					</h1>
					<?php 
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content','');
						endwhile;
					endif;?>
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
				<div class="col-md-4">
					<div class="sidebar-section-right">
					<?php get_sidebar(); ?>
					</div>
				</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog Full Width Section -->
<div class="clearfix"></div>	