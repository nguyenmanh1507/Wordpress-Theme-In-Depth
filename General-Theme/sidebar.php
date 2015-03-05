<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="sidebar" class="widget-area">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div>

<?php else : ?>
	<div id="sidebar" class="sidebar">
		
		<?php if ( has_nav_menu( 'sidebar' ) ) : ?>
		<div class="widget nav-sidebar">
			<h2><?php _e( 'Sidebar Menu', 'generaltheme' ); ?></h2>
			<?php wp_nav_menu( array (
					'theme_location'   => 'sidebar',
					'container'        => false
			) ); ?>
		</div>

		<?php endif; ?>
	</div>

	<div class="widget widget-search">
		<h2><?php _e( 'Search', 'generaltheme' ); ?></h2>
		<?php get_search_form(); ?>
	</div>

	<div class="widget widget-pages">
		<h2><?php _e( 'Pages', 'generaltheme' ); ?></h2>
		<ul>
			<?php wp_list_pages( array (
					'title_li'      => '',
					'depth'         => 1
			) ); ?>
		</ul>
	</div>

<?php endif; ?>