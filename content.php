<?php $elitepress_lite_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), $elitepress_lite_options ); ?>
<?php if(is_page_template('blog-left-sidebar.php')) {?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-right'); ?>>
<?php } elseif(is_page_template('blog-full-width.php')) { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
<?php } else { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-left'); ?>>
<?php } if(has_post_thumbnail()){ 
$defalt_arg =array('class' => "img-responsive"); ?>
<figure class="post-thumbnail">
				<?php if(is_active_sidebar('sidebar_primary')){ the_post_thumbnail('', $defalt_arg); } ?>
				<div class="entry-date"><h2><?php echo get_the_date('j'); ?></h2><span><?php echo get_the_date('M'); ?></span></div>
	</figure><?php } ?>	
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="blog-seprator"></div>
	</header>
<?php elitepress_post_meta_content(); ?>
	<div class="entry-content"><?php the_content( __('Read More','elitepress' ) ); ?></div>
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __('Page', 'elitepress' ), 'after' => '</div>' ) ); ?>
</article>