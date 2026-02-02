<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proctor-theme
 */

?>

</div>
<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="footer-wrapper">

			<div class="footer-content">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo d-block mb-3">
					Exams<span class="text-primary">4U</span>
				</a>
				<p class="mb-0">
					We specialize in helping students and professionals pass their OnVUE, Pearson,
					Prometric, Examity, ProctorU, and other online proctored exams safely and confidently.
				</p>
			</div>

			<div class="footer-list">
				<div class="list-title mb-5">Useful Links</div>
				<?php
				wp_nav_menu([
					'theme_location' => 'footer_useful',
					'container' => false,
					'menu_class' => 'footer-menu',
					'fallback_cb' => false
				]);
				?>
			</div>

			<div class="footer-list">
				<div class="list-title mb-5">Services</div>
				<?php
				wp_nav_menu([
					'theme_location' => 'footer_services',
					'container' => false,
					'menu_class' => 'footer-menu',
					'fallback_cb' => false
				]);
				?>
			</div>

			<div class="footer-list">
				<div class="list-title mb-5">Contact Us</div>
				<ul class="footer-menu">
					<li>Call: <a href="tel:+16462439935">+1 (646) 243-9935</a></li>
					<li>Email: <a href="mailto:info@exams4u.com">info@exams4u.com</a></li>
					<li>Timing: 24/07</li>
				</ul>
			</div>

		</div>

		<div class="footer-bottom">
			Copyright © <?php echo date('Y'); ?>
			<a href="<?php echo esc_url(home_url('/')); ?>" class="fw-semibold text-black">
				exams4u.com
			</a>
			All Rights Reserved.
		</div>
	</div>

	<?php wp_footer(); ?>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>