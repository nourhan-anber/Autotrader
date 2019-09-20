<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Autotrader
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'autotrader' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'autotrader' ), 'Wordpress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'autotrader' ), 'Autotrader', '<a href="https://github.com/nourhan-anber/Autotrader">Nourhan Anber</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
