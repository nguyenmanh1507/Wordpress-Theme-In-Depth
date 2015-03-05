		</div>

		<footer class="site-footer">
			<?php 
			wp_nav_menu( array (
					'theme_location'     => 'footer',
					'menu_class'         => 'nav-footer',
					'fallback_cb'        => false
				) );	
			?>

			<div class="site-info">
				<a href="http://wordpress.org">
					<?php _e( 'Powered by WordPress' ); ?>
				</a>
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>

</body>
</html>