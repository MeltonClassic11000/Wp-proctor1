<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="container">
			<div class="header-wrapper">

				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
					Exams<span class="text-primary">4U</span>
				</a>

				<nav class="nav">
					<?php
					wp_nav_menu([
						'theme_location' => 'primary_menu',
						'container' => false,
						'menu_class' => 'menu',
						'fallback_cb' => false
					]);
					?>
				</nav>

				<button class="menu-toggle" aria-label="Toggle Menu">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn btn-primary header-btn">
					Contact Us
				</a>

			</div>
		</div>
	</header>
	<div class="overflow-hidden">