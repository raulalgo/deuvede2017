<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="" class="fit bg-deuvegreen" role="contentinfo">
		<div class="p2 white h5">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<!--<a class="white" href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Deuvede (@deuvede_fm) es un podcast de Carlos Álvarez (<a href=@husky) y Raúl Álvarez (@raulalgo)', 'basspress' ), 'WordPress' ); ?></a>-->
			<p class="mb0">Deuvedé (<a href="http://twitter.com/deuvede_fm" class="white underline">@deuvede_fm</a>) es un Podcast de Carlos Álvarez (<a href="http://twitter.com/husky" class="white underline">@husky</a>) y Raúl Álvarez (<a href="http://twitter.com/raulalgo" class="white underline">@raulalgo</a>)</p>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
