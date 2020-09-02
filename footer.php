<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tous_Albatros
 */

?>

</div><!-- #content -->
</div><!-- .site-body -->

<footer id="colophon" class="site-footer">
	<div class="footer-map">
		<div class="container">
			<div class="footer-contact">
				<h6>Nous contacter</h6>
				<a href="mailto:contact@tousalbatros.fr?Subject=Contact%20depuis%20le%20site%20internet"><i class="fa fa-envelope"></i>contact@tousalbatros.fr</a>
			</div>
			<div class="footer-social">
				<h6>Suivez-nous sur les réseaux sociaux</h6>
				<a href="https://www.linkedin.com/company/tousalbatros/" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="LinkedIn" title="LinkedIn" />
				</a>
				<a href="https://www.facebook.com/tousalbatros" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Facebook" title="Facebook" />
				</a>
				<a href="https://www.instagram.com/tousalbatros/" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="Instagram" title="Instagram" />
				</a>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="footer-info">
				Tous Albatros &copy; 2019 - <span id="footer-info__year"></span>
			</div><!-- .footer-info -->
			<div class="footer-credits">
				Powered by Wordpress and the <a href="https://github.com/LandazuriPaul/tous-albatros" target="_blank" rel="noopener noreferrer">Tous Albatros</a>&nbsp;template
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php
wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), NULL, true);
wp_footer();
?>
</body>

</html>
