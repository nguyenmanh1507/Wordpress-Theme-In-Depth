<?php get_header(); ?>

<div class="page-content">
	
	<?php if ( have_posts() ) : ?>

		<h1>
			<?php 
			_e( 'Search Results:', 'generaltheme' );
			echo get_search_query();
			?>
		</h1>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>
		<?php get_template_part( 'navigation' ); ?>
	<?php else: ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>

</div>
<!-- /.page-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>