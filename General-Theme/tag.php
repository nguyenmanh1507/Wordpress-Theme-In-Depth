<?php get_header(); ?>

<div class="page-content">
	
	<?php if ( have_posts() ) : ?>

		<h1>
			<?php 
			_e( 'Tag Archives: ', 'generaltheme' );
			single_tag_title();
			?>
		</h1>

		<?php 
		$term_description = term_description();
		if ( !empty( $term_description ) ) {
			echo '<div class="tag-description">';
			echo $term_description;
			echo '</div>';
		}
		?>

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