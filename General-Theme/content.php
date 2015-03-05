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
	<footer class="entry-footer">
		<ul class="entry-meta">
			
			<?php if ( has_tag() ) : ?>
			<li><?php the_tags(); ?></li>
			<?php endif; ?>

			<?php if ( !post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<li><?php comments_popup_link(); ?></li>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'generaltheme' ), '<li>', '</li>' ); ?>

		</ul>
	</footer>

	<?php else : ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>

	<?php endif; ?>

</article>