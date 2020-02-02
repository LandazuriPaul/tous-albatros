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
		<div class="site-info">
			Tous Albatros &copy; 2018 - <span id="site-info__year"></span>
		</div><!-- .site-info -->
		<div class="site-credits">
			Powered by Wordpress and the <a href="https://paul.landazuri.fr/projects/tous-albatros" target="_blank" rel="noopener noreferrer">Tous Albatros</a>&nbsp;template
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), NULL, true);
	wp_footer();
?>
</body>
</html>
