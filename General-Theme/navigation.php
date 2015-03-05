<?php if ( is_single() ) : ?>
	<nav class="nav nav-post nav-single">
		<?php previous_post_link(); ?>
		<?php next_post_link(); ?>
	</nav>

<?php else : ?>
	<?php global $paged; ?>
	<?php if ( $paged > 1 ) : ?>
		<nav class="nav nav-post">
			<?php previous_posts_link(); ?>
			<?php next_posts_link(); ?>
		</nav>

	<?php else : ?>
		<nav class="nav nav-post">
			<?php next_posts_link(); ?>
		</nav>

	<?php endif; ?>

<?php endif; ?>
