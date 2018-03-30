<?php get_header();
get_template_part('index', 'banner');
?>
<!-- Blog Full Width Section -->
<div class="blog-section">
	<div class="container">
		<div class="row">
		
			<!--Blog Area-->
			<div class="<?php elitepress_post_layout_class(); ?>" >
				<div class="site-content">
					<div id="post-<?php the_ID(); ?>" <?php post_class('blog-left'); ?>>
					<div class="entry-content"><?php the_post(); the_content( __('Read More','elitepress' ) ); ?></div>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __('Page', 'elitepress' ), 'after' => '</div>' ) ); ?>
					</div>
					<?php comments_template('',true); ?>
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