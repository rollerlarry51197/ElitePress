<?php get_header();
get_template_part('banner','header'); ?>
<!-- Blog Full Width Section -->
<div class="blog-section">
	<div class="container">
		<div class="row">
			<!--Blog Area-->
			<div class="<?php elitepress_post_layout_class(); ?>" >
				<div class="site-content">
				<?php if ( have_posts() ) { ?>
				<h1 class="archive-title">
				<?php printf( __("Search results for %s",'elitepress'), '<span>' . get_search_query() . '</span>' ); ?>
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
				<?php } else { ?>
				<div class="search_error">
					<div class="search_err_heading"><h2><?php _e( "Nothing Found", 'elitepress' ); ?></h2> </div>
					<div class="elegent_searching">
						<p><?php _e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'elitepress' ); ?></p>
					</div>
				</div>
			<?php get_search_form();
			} ?>
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