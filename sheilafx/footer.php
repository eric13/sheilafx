<?php
// Contains the closing of the id=main div and all content after
?>

			</div><!-- .content-container -->

		</div><!-- .Responsive-Container -->

	</div><!-- #main -->

	<div class="footer-social">

		<div class="responsive-container">

			<ul class="footer-social-icons">

			<a href="https://twitter.com/sheilamiafx" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_twitter.png" alt="Twitter" /></a>

			<a href="imdb.com/name/nm5204805" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_imdb.png" alt="IMDB" /></a>

			<a href="http://instagram.com/sheilamiafx" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_instagram.png" alt="Instagram" /></a>

			<a href="https://youtube.com/channel/UC3-mVFS7sTkqfvTfGUTDL_A/feed?activity_view=3" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_youtube.png" alt="YouTube" /></a>

			<a href="https://facebook.com/sheila.seifi" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_facebook.png" alt="Facebook" /></a>

			<a href="http://linkedin.com/pub/sheila-mia-seifi/a9/664/b02" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/link_linkedin.png" alt="LinkedIn" /></a>

			</ul>

		</div><!-- .Responsive-Container -->

	</div><!-- .footer-social-icons -->

	<!-- Footer Starts Here -->
	<?php

		if( !of_get_option('footer_layout') || of_get_option('footer_layout') == 'one' ) {
			$footer_layout = 'one';
		}else {
			$footer_layout = 'two';
		}

		get_template_part( 'footer', $footer_layout );

		?>
	<!-- Footer ends Here -->

	</div><!-- #page -->
	</div><!-- #wrapper-one -->
	</div><!-- #wrapper-two -->
	</div><!-- #wrapper-three -->

<?php wp_footer(); ?>

</body>
</html>