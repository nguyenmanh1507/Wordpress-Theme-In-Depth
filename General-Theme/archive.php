<?php get_header(); ?>

<div class="page-content">
	
	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1>
				<?php 
				if ( is_day() ) : 

					_e( 'Daily Archives:', 'generaltheme' );
					the_time( 'l, F j, Y' );

				elseif ( is_month() ) :

					_e( 'Monthly Archives:', 'generaltheme' );
					the_time( 'F Y' );

				elseif ( is_year() ) :

					_e( 'Yearly Archives:', 'generaltheme' );
					the_time( 'Y' );

				else : 

					_e( 'Archives:', 'generaltheme' );

				endif;

				?>
			</h1>
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