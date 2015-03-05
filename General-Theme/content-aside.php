<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
		if ( !post_password_required() && !is_attachment() && has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
	?>

	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<p class="entry-format">
			<a href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>">
				<?php echo get_post_format_string( 'aside' ); ?>
			</a>
		</p>

		<?php if ( is_single( ) ) : ?>
		<ul class="entry-meta">
			<li><?php _e( 'Author: ', 'generaltheme' ); ?><?php the_author_posts_link(); ?></li>
			<li><?php _e( 'Category: ', 'generaltheme' ); ?><?php the_category( ', ' ); ?></li>
			<li><?php _e( 'Date: ', 'generaltheme' ); ?><?php the_time( 'F jS, Y' ) ?></li>
		</ul>
		<?php endif; ?>
	</header>
	<!-- /.entry-header -->

	<?php if ( is_single() ) : ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>

	<?php else : ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	
	<?php endif; ?>

</article>