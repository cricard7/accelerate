<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
				
<p><a class="greenAccelerate" href="<?php echo home_url(); ?>">Accelerate</a> is a strategy and marketing agency aimed at making our clients visible and building their businesses.</p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>
				
          
          <nav class="social-media-navigation" role="navigation">
				
              <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
               <?php endif; ?>
              
			</nav>

				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>