<?php get_header(); ?>

<div class="page-content">
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'navigation' ); ?>
		<?php comments_template(); ?>

	<?php else: ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>

</div>
<!-- /.page-content -->
<?php get_footer(); ?>