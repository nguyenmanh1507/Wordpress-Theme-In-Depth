<article class="post-not-found">
	<header class="entry-header">
		<h1 class="entry-title">
			<?php _e( 'Not Found', 'generaltheme' ); ?>
		</h1>
	</header>
	<!-- /.entry-header -->
	<div class="entry-content">

		<?php if ( is_search() ) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search term. Please try again using different keywords.', 'generaltheme' ); ?></p>

		<?php else : ?>
			<p><?php _e( 'Sorry, the requested resource was not found on this server.', 'generaltheme' ); ?></p>

		<?php endif; ?>

	</div>
	<!-- /.entry-content -->
	<footer class="entry-footer">
		<?php get_search_form(); ?>
	</footer>
	<!-- /.entry-footer -->
</article>
<!-- /.post-not-found -->