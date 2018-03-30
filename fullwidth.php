<?php 
//Template Name:Fullwidth 
get_header();
get_template_part('index', 'banner');
?>
<section class="blog-section">
	<div class="container">
		<div class="row">
			<!--Blog Area-->
			<div class="col-md-12">
				<div class="site-content">
					<div id="post-<?php the_ID(); ?>" <?php post_class('blog-full'); ?>>
					<div class="entry-content"><?php the_post(); the_content( __('Read More','elitepress' ) ); ?></div>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __('Page', 'elitepress' ), 'after' => '</div>' ) ); ?>
					</div>
				</div>
			</div>
			<!--/Blog Area-->
		</div>	
	</div>
</section>
<!-- /Blog Full Width Section -->
<?php get_footer(); ?>