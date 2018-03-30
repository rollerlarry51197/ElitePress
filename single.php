<?php get_header(); 	
get_template_part('banner','header');
 ?>
<!-- Blog Detail Section -->
<div class="blog-section">
	<div class="container">
		<div class="row">
			<!--Blog Detail Area-->
			<div class="<?php elitepress_post_layout_class(); ?>" >
				<div class="site-content">
				<?php 
					while(have_posts()) { the_post();
					 get_template_part('content',''); ?>
					<!--Blog Author Info-->
					<div class="author-info">
						
							<div class="author-avatar">
								<?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
							</div>
							
								<div class="author-description">
									<h5 class="author-title"><?php the_author_link(); ?></h5>
									<p class="author-bio"><?php the_author_meta( 'description' ); ?></p>
								</div>
							
							
					</div>
					<!--/Blog Author Info-->
				<!--Comment Section-->
				<?php comments_template('',true); ?>
				<!--/Comment Section-->
				<?php } ?>
				</div>
			</div>
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
<!-- Footer Section -->
<?php get_footer(); ?>
<!-- /Close of wrapper -->