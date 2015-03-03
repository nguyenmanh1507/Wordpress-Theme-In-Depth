<?php get_header(); ?>

<div class="page-content">
	
	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1>
				<?php 
				if ( is_tax( 'post_format', 'post-format-aside' ) ) :
					_e( 'Asides', 'generaltheme' );

				elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
					_e( 'Images', 'generaltheme' );

				elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
					_e( 'Videos', 'generaltheme' );

				elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
					_e( 'Audio', 'generaltheme' );

				elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
					_e( 'Quotes', 'generaltheme' );

				elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
					_e( 'Links', 'generaltheme' );

				elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
					_e( 'Galleries', 'generaltheme' );

				else :
					_e( 'Archives', 'generaltheme' );

				endif;
				?>
			</h1>

			<?php 
			$term_description = term_description();
			if ( !empty( $term_description ) ) {
				echo '<div class="tax-description">';
				echo $term_description;
				echo '</div>';
			}
			?>
		</header>
		<!-- /.page-header -->

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