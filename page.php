<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proctor-theme
 */
get_header();

$theme_url = get_stylesheet_directory_uri();
?>

<?php if (have_rows('page_builder')): ?>
	<?php while (have_rows('page_builder')):
		the_row(); ?>
		<?php if (get_row_layout() == 'home_hero_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/home-hero.css" type="text/css">
			<section class="hero-sec">
				<div class="hero-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-xl-7">
								<div style="max-width: 650px;" class="content-wrapper">
									<?php if (get_sub_field('section_badge')): ?>
										<div class="secondary-btn text-primary mb-3">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/shield-icon.webp"
												width="25" height="28" alt="Icon" loading="lazy">
											<?php the_sub_field('section_badge'); ?>
										</div>
									<?php endif; ?>

									<?php if (get_sub_field('section_title')): ?>
										<h1 class="mb-4"><?php the_sub_field('section_title'); ?></h1>
									<?php endif; ?>

									<?php if (get_sub_field('text_content')): ?>
										<div class="fw-md fs-18 mb-4 content"><?php the_sub_field('text_content'); ?></div>
									<?php endif; ?>

									<?php
									if ($form = get_sub_field('contact_form')) {
										echo do_shortcode($form);
									}
									?>

									<?php if (have_rows('icon_list')): ?>
										<ul style="margin-top: 30px;"
											class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
											<?php while (have_rows('icon_list')):
												the_row(); ?>
												<li><?php the_sub_field('item_text'); ?></li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>

									<?php if (have_rows('trust_points')): ?>
										<ul class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
											<?php while (have_rows('trust_points')):
												the_row(); ?>
												<li><?php the_sub_field('point_text'); ?></li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>

								</div>
							</div>

							<div class="col-xl-5">
								<div class="obj-wrapper">
									<?php $hero_image = get_sub_field('hero_image'); ?>
									<?php if ($hero_image): ?>
										<img src="<?php echo esc_url($hero_image['url']); ?>"
											alt="<?php echo esc_attr($hero_image['alt']); ?>" style="max-width: 458px;"
											class="img-fluid" width="458" height="545">
									<?php endif; ?>
									<?php if (have_rows('section_badge_r1')): ?>
										<div class="buttons">
											<?php while (have_rows('section_badge_r1')):
												the_row(); ?>
												<div class="secondary-btn">
													<?php $icon = get_sub_field('icon'); ?>
													<?php if ($icon): ?>
														<img src="<?php echo esc_url($icon['url']); ?>"
															alt="<?php echo esc_attr($icon['alt']); ?>" width="27" height="27">
													<?php endif; ?>
													<?php the_sub_field('title'); ?>
												</div>
											<?php endwhile; ?>
										</div>
									<?php endif; ?>
									<div class="card custom-border">
										<div class="d-flex align-items-center gap-2 mb-3">
											<?php $card_image = get_sub_field('card_image'); ?>
											<?php if ($card_image): ?>
												<img src="<?php echo esc_url($card_image['url']); ?>"
													alt="<?php echo esc_attr($card_image['alt']); ?>" width="129" height="48">
											<?php endif; ?>

											<div class="title fw-semibold">
												<?php the_sub_field('card_title'); ?>
											</div>
										</div>
										<p class="mb-0 fs-12">
											<?php the_sub_field('card_description'); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'logo_slider_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/infinite-slider.css" type="text/css">
			<section class="infinite-slider-sec bg-white">
				<div class="container">
					<div
						class="content-wrapper d-flex align-items-center justify-content-xl-between justify-content-center text-lg-start text-center gap-3 flex-wrap mb-5">
						<h2 class="mb-0"><?php the_sub_field('main_title'); ?></h2>
						<?php if (get_sub_field('section_badge')): ?>
							<div class="secondary-btn text-primary">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/shield-icon.webp" width="25"
									height="28" alt="Icon" loading="lazy">
								<?php the_sub_field('section_badge'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<?php if (have_rows('slider')): ?>
					<div class="logo-slider-wrapper">
						<div class="logo-slider top-slider">
							<?php while (have_rows('slider')):
								the_row(); ?>
								<?php $logo = get_sub_field('logo'); ?>
								<div class="slide">
									<?php if ($logo): ?>
										<div class="icon-wrapper mb-3">
											<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"
												loading="lazy">
										</div>
									<?php endif; ?>
									<span class="d-block text-center fw-exbold fs-22">
										<?php the_sub_field('title'); ?>
									</span>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if (have_rows('slider_reverse')): ?>
					<div class="logo-slider-wrapper">
						<div class="logo-slider bottom-slider">
							<?php while (have_rows('slider_reverse')):
								the_row(); ?>
								<?php $logo = get_sub_field('logo'); ?>
								<div class="slide">
									<?php if ($logo): ?>
										<div class="icon-wrapper mb-3">
											<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"
												loading="lazy">
										</div>
									<?php endif; ?>
									<span class="d-block text-center fw-exbold fs-22">
										<?php the_sub_field('title'); ?>
									</span>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>

			</section>

		<?php elseif (get_row_layout() == 'how_it_work'): ?>
			<section class="how-it-works bg-white pb-0">
				<div class="container">

					<?php if (get_sub_field('main_title')): ?>
						<h2 class="text-center"><?php the_sub_field('main_title'); ?></h2>
					<?php endif; ?>

					<?php if (have_rows('custom_card')): ?>
						<div class="row g-4">
							<?php while (have_rows('custom_card')):
								the_row(); ?>
								<?php $icon = get_sub_field('card_icon'); ?>

								<div class="col-md-6 col-lg-4">
									<div class="card-borderd">
										<div class="counter-wrapper">
											<div class="counter">
												<span class="counter-title">Step</span>
												<span class="count"><?php the_sub_field('number'); ?></span>
											</div>
										</div>

										<div class="card-body">
											<?php if ($icon): ?>
												<div class="card-img-wrapper">
													<img src="<?php echo esc_url($icon['url']); ?>" width="120" height="124"
														alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy">
												</div>
											<?php endif; ?>

											<div class="content-wrapper">
												<span class="card-title">
													<?php the_sub_field('card_title'); ?>
												</span>
												<p class="card-text">
													<?php the_sub_field('card_description'); ?>
												</p>
											</div>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; ?>

				</div>
			</section>

		<?php elseif (get_row_layout() == 'why_choose_us'): ?>
			<section class="why-choose-us-sec bg-white pb-0">
				<div class="container">
					<div
						class="content-wrapper d-flex justify-content-xl-between justify-content-center align-items-center text-lg-start text-center gap-3 flex-wrap mb-5">
						<h2 style="max-width:420px;" class="mb-0">
							<?php the_sub_field('main_title'); ?>
						</h2>
						<p style="max-width:628px;" class="fs-20 mb-0">
							<?php the_sub_field('description'); ?>
						</p>
					</div>

					<?php if (have_rows('card')): ?>
						<div class="row g-3">
							<?php while (have_rows('card')):
								the_row(); ?>
								<div class="col-md-6 col-xl-3">
									<div class="card-borderd s2">
										<div class="counter-wrapper">
											<div class="counter">
												<?php $card_icon = get_sub_field('card_icon'); ?>
												<?php if ($card_icon): ?>
													<img src="<?php echo esc_url($card_icon['url']); ?>" width="60" height="60"
														alt="<?php echo esc_attr($card_icon['alt']); ?>" loading="lazy">
												<?php endif; ?>
											</div>
										</div>

										<div class="card-body">
											<div class="card-img-wrapper">
												<div class="client-content">
													<div class="client-name">
														<?php the_sub_field('card_title'); ?>
													</div>
												</div>
											</div>
											<div class="content-wrapper">
												<p class="card-text mb-0">
													<?php the_sub_field('card_description'); ?>
												</p>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>


		<?php elseif (get_row_layout() == 'testimonial_section'): ?>
			<section class="reviews-sec bg-white">
				<div class="container">

					<div
						class="content-wrapper d-flex align-items-center justify-content-xl-between justify-content-center text-lg-start text-center gap-3 flex-wrap mb-5">
						<?php if (get_sub_field('main_title')): ?>
							<h2 style="max-width:420px;" class="mb-0">
								<?php the_sub_field('main_title'); ?>
							</h2>
						<?php endif; ?>

						<?php if (get_sub_field('description')): ?>
							<p style="max-width:628px;" class="fs-20 mb-0">
								<?php the_sub_field('description'); ?>
							</p>
						<?php endif; ?>
					</div>

					<?php if (have_rows('testimonial_card')): ?>
						<div class="row g-3 mb-5">
							<?php while (have_rows('testimonial_card')):
								the_row(); ?>
								<?php
								$image = get_sub_field('image');
								$name = get_sub_field('name');
								$info = get_sub_field('info');
								$title = get_sub_field('title');
								$desc = get_sub_field('description');
								?>

								<div class="col-md-6 col-lg-4">
									<div class="card-borderd s1">
										<div class="counter-wrapper">
											<div class="counter">
												<?php if ($image): ?>
													<img src="<?php echo esc_url($image['url']); ?>" width="115" height="115"
														alt="<?php echo esc_attr(!empty($image['alt']) ? $image['alt'] : 'Client avatar'); ?>"
														loading="lazy">
												<?php endif; ?>
											</div>
										</div>

										<div class="card-body">
											<div class="card-img-wrapper">
												<div class="client-content">
													<?php if ($name): ?>
														<div class="client-name">
															-
															<?php echo esc_html($name); ?>
														</div>
													<?php endif; ?>
													<?php if ($info): ?>
														<div class="client-info">
															<?php echo esc_html($info); ?>
														</div>
													<?php endif; ?>
													<div class="reviews-icon">
														<?php for ($i = 0; $i < 5; $i++): ?>
															<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/review-icon.webp'); ?>"
																width="20" height="20" alt="Star rating" loading="lazy">
														<?php endfor; ?>
													</div>
												</div>
											</div>

											<div class="content-wrapper">
												<?php if ($title): ?>
													<span class="card-title s1">
														<?php echo esc_html($title); ?>
													</span>
												<?php endif; ?>
												<?php if ($desc): ?>
													<p class="card-text">
														<?php echo esc_html($desc); ?>
													</p>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php
					$button = get_sub_field('button');
					if ($button && !empty($button['url'])): ?>
						<a href="<?php echo esc_url($button['url']); ?>"
							target="<?php echo (!empty($button['target']) && $button['target'] === '_blank') ? '_blank' : '_self'; ?>"
							rel="<?php echo (!empty($button['target']) && $button['target'] === '_blank') ? 'noopener noreferrer' : ''; ?>"
							class="btn btn-primary mx-auto">
							<?php echo esc_html($button['title'] ?? 'View More'); ?>
						</a>
					<?php endif; ?>

				</div>
			</section>

		<?php elseif (get_row_layout() == 'main_content_section'): ?>

			<div class="half-sections bg-white">
				<div class="custom-container">
					<div class="sec-wrapper">

						<!-- FIRST SECTION -->
						<section class="half-sec p-0">
							<div class="row g-4">
								<div class="col-xl-5">
									<div class="image-wrapper mx-auto">

										<?php $image = get_sub_field('image'); ?>
										<?php if ($image): ?>
											<img src="<?php echo esc_url($image['url']); ?>"
												alt="<?php echo esc_attr($image['alt']); ?>"
												class="border-12 object-cover w-100 h-100 d-block mx-auto" loading="lazy">
										<?php endif; ?>

										<div class="content-wrapper">
											<div class="content text-center bg-white">
												<span class="title"><?php the_sub_field('card_title'); ?></span>
												<p class="mb-0 fs-14"><?php the_sub_field('card_description'); ?></p>
											</div>

											<?php $card_button = get_sub_field('card_button'); ?>
											<?php if ($card_button): ?>
												<a href="<?php echo esc_url($card_button['url']); ?>"
													target="<?php echo esc_attr($card_button['target']); ?>"
													class="btn btn-primary d-block mx-auto">
													<?php echo esc_html($card_button['title']); ?>
												</a>
											<?php endif; ?>
										</div>

									</div>
								</div>

								<div class="col-xl-7">
									<h2 class="s1 mb-4"><?php the_sub_field('main_title'); ?></h2>
									<?php the_sub_field('description'); ?>

									<div class="card-wrapper">
										<?php if (have_rows('card')): ?>
											<?php while (have_rows('card')):
												the_row(); ?>
												<div class="card custom-border">
													<ul class="list-with-icon mb-3">
														<li class="s1"><?php the_sub_field('title'); ?></li>
													</ul>
													<p class="mb-0"><?php the_sub_field('description'); ?></p>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>

						<!-- SECOND SECTION -->
						<section class="half-sec p-0">
							<div class="row g-4">
								<div class="col-xl-5 order-xl-2">
									<div class="image-wrapper mx-auto">

										<?php $section_image = get_sub_field('section_image'); ?>
										<?php if ($section_image): ?>
											<img src="<?php echo esc_url($section_image['url']); ?>"
												alt="<?php echo esc_attr($section_image['alt']); ?>"
												class="border-12 object-cover w-100 h-100" loading="lazy">
										<?php endif; ?>

										<div class="custom-buttons">
											<?php if (have_rows('section_badge')): ?>
												<?php $i = 1;
												while (have_rows('section_badge')):
													the_row(); ?>
													<div class="custom-secondary-btn btn<?php echo $i; ?>">
														<?php the_sub_field('title'); ?>
													</div>
													<?php $i++; endwhile; ?>
											<?php endif; ?>
										</div>

									</div>
								</div>

								<div class="col-xl-7 order-xl-1">
									<h2 class="s1 mb-4"><?php the_sub_field('main_title_1'); ?></h2>

									<ul class="list-with-icon s1">
										<?php if (have_rows('list_with_icon')): ?>
											<?php while (have_rows('list_with_icon')):
												the_row(); ?>
												<li class="mb-4">
													<span class="fs-20 poppins-semibold d-block mb-2">
														<?php the_sub_field('title'); ?>
													</span>
													<p class="mb-0"><?php the_sub_field('description'); ?></p>
												</li>
											<?php endwhile; ?>
										<?php endif; ?>
									</ul>

									<?php $button = get_sub_field('button'); ?>
									<?php if ($button): ?>
										<a href="javascript:void(0)" class="see-more-btn btn btn-primary">
											<?php echo esc_html($button['title']); ?>
										</a>
									<?php endif; ?>

									<div class="see-more-content" style="display:none;">
										<?php the_sub_field('see_more_content'); ?>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

		<?php elseif (get_row_layout() == 'faq_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/faq-sec.css" type="text/css">
			<section class="faq-sec bg-white">
				<div class="container">

					<h2 class="s1 text-center mb-5">
						<?php the_sub_field('main_title'); ?>
					</h2>

					<div class="row g-4">

						<!-- LEFT COLUMN -->
						<div class="col-lg-6">
							<div class="faq-wrapper">
								<?php
								$count = 1;
								if (have_rows('faq_r1')):
									while (have_rows('faq_r1')):
										the_row();
										?>
										<div class="faq-item <?php echo $count === 1 ? 'active' : ''; ?>">
											<div class="faq-question">
												<?php echo $count . '. '; ?> 					<?php the_sub_field('faq_question'); ?>
												<span class="faq-icon"><?php echo $count === 1 ? '-' : '+'; ?></span>
											</div>
											<div class="faq-answer">
												<?php the_sub_field('faq_answer'); ?>
											</div>
										</div>
										<?php
										$count++;
									endwhile;
								endif;
								?>
							</div>
						</div>

						<!-- RIGHT COLUMN -->
						<div class="col-lg-6">
							<div class="faq-wrapper">
								<?php
								if (have_rows('faq_r2')):
									while (have_rows('faq_r2')):
										the_row();
										?>
										<div class="faq-item <?php echo $count === 1 ? 'active' : ''; ?>">
											<div class="faq-question">
												<?php echo $count . '. '; ?> 					<?php the_sub_field('faq_question'); ?>
												<span class="faq-icon"><?php echo $count === 1 ? '-' : '+'; ?></span>
											</div>
											<div class="faq-answer">
												<?php the_sub_field('faq_answer'); ?>
											</div>
										</div>
										<?php
										$count++;
									endwhile;
								endif;
								?>
							</div>
						</div>

					</div>
				</div>
			</section>
		<?php elseif (get_row_layout() == 'about_hero_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/about-hero.css" type="text/css">
			<section class="hero-sec">
				<div class="container">
					<div class="main-wrapper">
						<div class="row g-4">
							<div class="col-xl-6">
								<div class="content-wrapper d-flex flex-column h-100 justify-content-center">
									<ul class="breadcrumbs d-flex align-items-center gap-2 flex-wrap text-center mb-4">
										<li>
											<a href="<?php echo esc_url(home_url('/')); ?>" class="text-black">Home</a>
										</li>
										<li class="separator">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/breadcrumbs-angle-right-icon.svg"
												width="6" height="10" alt="Icon">
										</li>
										<li class="text-primary fw-medium">About Us</li>
									</ul>

									<h1 class="mb-3">
										<?php the_sub_field('main_title'); ?>
									</h1>

									<div class="mb-0 fs-18">
										<?php the_sub_field('description'); ?>
									</div>

								</div>
							</div>
							<div class="col-xl-6">
								<?php $hero_image = get_sub_field('hero_image'); ?>
								<?php if ($hero_image): ?>
									<img src="<?php echo esc_url($hero_image['url']); ?>" class="hero-img img-fluid d-block mx-auto"
										style="max-width:616px;" width="616" height="413"
										alt="<?php echo esc_attr($hero_image['alt']); ?>">
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'counter_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/certifications-why-choose-us.css"
				type="text/css">
			<section class="why-choose-us-sec certifications bg-cream-light">
				<div class="container">

					<h2 class="text-center s1 mb-5">
						<?php the_sub_field('main_title'); ?>
					</h2>

					<?php
					$cards = get_sub_field('icon_card');
					if ($cards):
						$total = count($cards);
						$i = 0;
						?>
						<div class="card-wrapper d-flex justify-content-between gap-4 flex-wrap">

							<?php foreach ($cards as $card):
								$i++; ?>
								<div class="icon-card">
									<?php if (!empty($card['icon'])): ?>
										<img src="<?php echo esc_url($card['icon']['url']); ?>" class="d-block mx-auto mb-3" width="72"
											height="72" alt="<?php echo esc_attr($card['icon']['alt']); ?>">
									<?php endif; ?>

									<span class="title d-block fs-58 fw-semibold text-center mb-2">
										<?php echo esc_html($card['number']); ?>
									</span>

									<span class="d-block text-center fs-20">
										<?php echo esc_html($card['description']); ?>
									</span>
								</div>

								<?php if ($i < $total): ?>
									<div class="border-right"></div>
								<?php endif; ?>

							<?php endforeach; ?>

						</div>
					<?php endif; ?>

				</div>
			</section>

		<?php elseif (get_row_layout() == 'half_section'): ?>
			<section class="half-sec mb-0 bg-cream-light">
				<div class="container">
					<div class="row g-4">

						<div class="col-xl-5">
							<div class="image-wrapper mx-auto">
								<?php $section_image = get_sub_field('section_image'); ?>
								<?php if ($section_image): ?>
									<img src="<?php echo esc_url($section_image['url']); ?>"
										class="border-12 custom-border s1 object-cover w-100 h-100 d-block mx-auto" width="549"
										height="579" alt="<?php echo esc_attr($section_image['alt']); ?>">
								<?php endif; ?>
							</div>
						</div>

						<div class="col-xl-7">
							<h2 class="s1 mb-4">
								<?php the_sub_field('main_title'); ?>
							</h2>

							<?php the_sub_field('description'); ?>

							<?php if (have_rows('card')): ?>
								<div class="card-wrapper">
									<?php while (have_rows('card')):
										the_row(); ?>
										<div class="card custom-border">
											<ul class="list-with-icon mb-3">
												<li class="s1">
													<?php the_sub_field('card_title'); ?>
												</li>
											</ul>
											<p class="mb-0">
												<?php the_sub_field('card_description'); ?>
											</p>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>

						</div>

					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'about_why_choose_us'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/why-choose-us.css" type="text/css">
			<section class="why-choose-us">
				<div class="container">

					<div class="topbar d-flex align-items-center justify-content-between flex-wrap gap-3 mb-5">
						<h2 class="mb-0">
							<?php the_sub_field('main_title'); ?>
						</h2>
						<p style="max-width: 686px;" class="fw-medium mb-0">
							<?php the_sub_field('description'); ?>
						</p>
					</div>

					<?php if (have_rows('icon_card')): ?>
						<div class="card-wrapper">
							<?php while (have_rows('icon_card')):
								the_row(); ?>
								<div class="icon-card">

									<?php $icon = get_sub_field('icon'); ?>
									<?php if ($icon): ?>
										<img src="<?php echo esc_url($icon['url']); ?>" width="60" height="60"
											alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy" class="icon-image">
									<?php endif; ?>

									<div class="content">
										<span class="icon-card-title">
											<?php the_sub_field('icon_title'); ?>
										</span>
										<p class="icon-card-description mb-0">
											<?php the_sub_field('icon_description'); ?>
										</p>
									</div>

								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

				</div>
			</section>

		<?php elseif (get_row_layout() == 'half_section_s1'): ?>
			<section class="half-sec pt-0 bg-white mb-0">
				<div class="container">
					<div class="row g-4">

						<div class="col-xl-5 order-xl-2">
							<div class="image-wrapper mx-auto">

								<?php $section_image = get_sub_field('section_image'); ?>
								<?php if ($section_image): ?>
									<img src="<?php echo esc_url($section_image['url']); ?>"
										class="border-12 custom-border object-cover w-100 h-100" width="549" height="564"
										alt="<?php echo esc_attr($section_image['alt']); ?>" loading="lazy">
								<?php endif; ?>

								<?php if (have_rows('section_badge')): ?>
									<div class="custom-buttons">
										<?php $i = 1;
										while (have_rows('section_badge')):
											the_row(); ?>
											<div class="custom-secondary-btn btn<?php echo $i; ?> s<?php echo $i; ?>">
												<?php the_sub_field('title'); ?>
											</div>
											<?php $i++; endwhile; ?>
									</div>
								<?php endif; ?>

							</div>
						</div>

						<div class="col-xl-7 order-xl-1">
							<h2 class="s1 mb-4">
								<?php the_sub_field('main_title'); ?>
							</h2>

							<p class="mb-4 fs-18">
								<?php the_sub_field('description'); ?>
							</p>

							<?php if (have_rows('list_icon')): ?>
								<ul class="list-with-icon s1 vx mb-4">
									<?php while (have_rows('list_icon')):
										the_row(); ?>
										<li class="mb-3">
											<?php the_sub_field('title'); ?>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>

							<p class="mb-0 fs-18 fw-semibold">
								<?php the_sub_field('description_1'); ?>
							</p>
						</div>

					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'cta_section'): ?>
			<?php
			$section_image = get_sub_field('section_image');
			$sub_title = get_sub_field('sub_title');
			$main_title = get_sub_field('main_title');
			$description = get_sub_field('description');
			$get_started_now = get_sub_field('get_started_now!');
			?>
			<section style="margin-bottom: 80px;" class="default-sec p-xl-0 p-0 pt-5 bg-cream">
				<div class="container">
					<div class="row g-5">
						<div class="col-xl-7 order-xl-2">
							<div class="content-wrapper h-100 d-flex flex-column justify-content-center">
								<?php if ($sub_title): ?>
									<div class="sub-title fw-bold text-primary fs-20 mb-3"><?php echo esc_html($sub_title); ?></div>
								<?php endif; ?>

								<?php if ($main_title): ?>
									<h2><?php echo esc_html($main_title); ?></h2>
								<?php endif; ?>

								<?php if ($description): ?>
									<?php echo $description; ?>
								<?php endif; ?>


								<?php if ($get_started_now): ?>
									<a href="<?php echo esc_url($get_started_now['url']); ?>"
										target="<?php echo esc_attr($get_started_now['target']); ?>" class="btn btn-primary">
										<?php echo esc_html($get_started_now['title']); ?>
									</a>
								<?php endif; ?>
							</div>
						</div>

						<div class="col-xl-5 order-xl-1">
							<?php if ($section_image): ?>
								<img src="<?php echo esc_url($section_image['url']); ?>" style="max-width: 517px;"
									class="img-fluid pt-2 d-block mx-auto" width="517" height="517"
									alt="<?php echo esc_attr($section_image['alt']); ?>" loading="lazy">
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'blog_banner'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/blog.css" type="text/css">
			<section class="hero-sec">
				<div class="container">
					<div style="max-width: 611px;" class="content-wrapper mx-auto">
						<ul class="breadcrumbs d-flex justify-content-center align-items-center gap-2 flex-wrap text-center mb-4">
							<li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-black">Home</a></li>
							<li class="separator">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/breadcrumbs-angle-right-icon.svg"
									width="6" height="10" alt="Icon">
							</li>
							<li class="text-primary fw-medium">Blog</li>
						</ul>

						<?php if (get_sub_field('main_title')): ?>
							<h1 class="text-center mb-0">
								<?php echo esc_html(get_sub_field('main_title')); ?>
							</h1>
						<?php endif; ?>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'featured_blog_section'): ?>

			<?php
			$main_title = get_sub_field('main_title');
			$description = get_sub_field('description');
			$section_image = get_sub_field('section_image');
			$section_badge = get_sub_field('section_badge');
			$date = get_sub_field('date');
			$card_title = get_sub_field('card_title');
			$card_description = get_sub_field('card_description');
			$read_more = get_sub_field('read_more');
			$client_icon = get_sub_field('client_icon');
			$name = get_sub_field('name');
			?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/featured-blog.css" type="text/css">
			<section class="featured-blog-sec bg-white">
				<div class="container">

					<div class="content-wrapper mb-5">
						<?php if ($main_title): ?>
							<h2 class="h3 text-center mb-4">
								<?php echo esc_html($main_title); ?>
							</h2>
						<?php endif; ?>

						<?php if ($description): ?>
							<p class="mb-0 text-center">
								<?php echo esc_html($description); ?>
							</p>
						<?php endif; ?>
					</div>

					<div class="row g-3">
						<div class="col-xl-7">
							<?php if ($section_image): ?>
								<img src="<?php echo esc_url($section_image['url']); ?>" class="img-fluid d-block mx-auto border-12"
									style="max-width:716px;" width="716" height="495"
									alt="<?php echo esc_attr($section_image['alt']); ?>" loading="lazy">
							<?php endif; ?>
						</div>

						<div class="col-xl-5">
							<div class="blog-card-wrapper">
								<div class="blog-featured-card">

									<div class="topbar mb-3">
										<?php if ($section_badge): ?>
											<div class="featured-blog-btn">
												<?php echo esc_html($section_badge); ?>
											</div>
										<?php endif; ?>

										<?php if ($date): ?>
											<div class="d-flex align-items-center gap-1">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/calendar-icon.svg"
													width="18" height="18" alt="Icon">
												<div class="date poppins-medium">
													<?php echo esc_html($date); ?>
												</div>
											</div>
										<?php endif; ?>
									</div>

									<?php if ($card_title): ?>
										<div class="featured-title">
											<?php echo esc_html($card_title); ?>
										</div>
									<?php endif; ?>

									<?php if ($card_description): ?>
										<p class="mb-4">
											<?php echo esc_html($card_description); ?>
										</p>
									<?php endif; ?>

									<div class="bottom">
										<?php if ($read_more): ?>
											<a href="<?php echo esc_url($read_more['url']); ?>"
												target="<?php echo esc_attr($read_more['target']); ?>" class="btn btn-primary">
												<?php echo esc_html($read_more['title']); ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-right.webp"
													width="17" height="17" alt="Icon" loading="lazy">
											</a>
										<?php endif; ?>

										<?php if ($client_icon || $name): ?>
											<div class="d-flex align-items-center gap-2">
												<?php if ($client_icon): ?>
													<div class="icon">
														<img src="<?php echo esc_url($client_icon['url']); ?>" width="40" height="40"
															alt="<?php echo esc_attr($client_icon['alt']); ?>" loading="lazy">
													</div>
												<?php endif; ?>

												<?php if ($name): ?>
													<div class="poppins-semibold fs-18">
														<?php echo esc_html($name); ?>
													</div>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

		<?php elseif (get_row_layout() == 'featured_blog_card_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/featured-blog.css" type="text/css">
			<section class="bg-white pt-0">
				<div class="container">
					<h2 class="h3 title">
						<?php the_sub_field('main_title'); ?>
					</h2>

					<div class="tabs-wrapper">

						<!-- Tabs Buttons -->
						<div class="tabs-buttons">
							<?php
							$tab_index = 1;
							if (have_rows('tab')):
								while (have_rows('tab')):
									the_row();
									?>
									<button class="tab-btn <?php echo $tab_index === 1 ? 'active' : ''; ?>"
										data-tab="tab<?php echo $tab_index; ?>">
										<?php the_sub_field('tab_button'); ?>
									</button>
									<?php
									$tab_index++;
								endwhile;
							endif;
							?>
						</div>

						<!-- Tabs Content -->
						<div class="tabs-content">
							<?php
							$content_index = 1;
							if (have_rows('tab')):
								while (have_rows('tab')):
									the_row();
									?>
									<div class="tab-content <?php echo $content_index === 1 ? 'active' : ''; ?>"
										id="tab<?php echo $content_index; ?>">

										<div class="row g-3">
											<?php
											if (have_rows('tab_card')):
												while (have_rows('tab_card')):
													the_row();
													$tab_image = get_sub_field('tab_image');
													$client_image = get_sub_field('client_image');
													?>
													<div class="col-lg-4 col-md-6">
														<div class="blog-card">

															<?php if ($tab_image): ?>
																<img src="<?php echo esc_url($tab_image['url']); ?>"
																	alt="<?php echo esc_attr($tab_image['alt']); ?>" class="img-fluid d-block mb-3"
																	style="border-radius:12px 12px 0 0;">
															<?php endif; ?>

															<div class="blog-title fs-24 poppins-semibold mb-2 line-height-md">
																<?php the_sub_field('tab_title'); ?>
															</div>

															<p class="mb-3">
																<?php the_sub_field('tab_description'); ?>
															</p>

															<div class="blog-bottom d-flex justify-content-between">
																<div class="d-flex align-items-center gap-2">
																	<?php if ($client_image): ?>
																		<img src="<?php echo esc_url($client_image['url']); ?>" width="40" height="40">
																	<?php endif; ?>
																	<div class="poppins-medium fs-14">
																		<?php the_sub_field('client_name'); ?>
																	</div>
																</div>

																<div class="d-flex align-items-center gap-1">
																	<div class="date fs-14 poppins-medium">
																		<?php the_sub_field('date'); ?>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<?php
												endwhile;
											endif;
											?>
										</div>
									</div>
									<?php
									$content_index++;
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'blog_half_section'): ?>
			<section class="default-sec p-xl-0 p-0 pt-5 bg-cream">
				<div class="container">
					<div class="row g-5">

						<!-- Left Content -->
						<div class="col-xl-7">
							<div class="content-wrapper h-100 d-flex flex-column justify-content-center">

								<?php if (get_sub_field('sub_title')): ?>
									<div class="sub-title fw-bold text-primary fs-20 mb-3">
										<?php the_sub_field('sub_title'); ?>
									</div>
								<?php endif; ?>

								<?php if (get_sub_field('main_title')): ?>
									<h2 class="s1 fw-bold mb-4">
										<?php the_sub_field('main_title'); ?>
									</h2>
								<?php endif; ?>

								<?php if (get_sub_field('form')): ?>
									<div class="d-flex align-items-center flex-wrap gap-3 mb-5">
										<?php the_sub_field('form'); ?>
									</div>
								<?php endif; ?>

								<?php if (have_rows('list_icon')): ?>
									<ul class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
										<?php while (have_rows('list_icon')):
											the_row(); ?>
											<li><?php the_sub_field('list_text'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

							</div>
						</div>

						<!-- Right Image -->
						<div class="col-xl-5">
							<?php
							$section_image = get_sub_field('section_image');
							if ($section_image): ?>
								<img src="<?php echo esc_url($section_image['url']); ?>"
									alt="<?php echo esc_attr($section_image['alt']); ?>" class="img-fluid pt-2 d-block mx-auto"
									style="max-width:517px;" width="517" height="517" loading="lazy">
							<?php endif; ?>
						</div>

					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'contact_hero_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/blog.css" type="text/css">
			<section class="hero-sec bg-cream1">
				<div class="container">
					<div class="content-wrapper mx-auto" style="max-width:733px;">

						<ul class="breadcrumbs d-flex justify-content-center align-items-center gap-2 flex-wrap text-center mb-4">
							<li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-black">Home</a></li>
							<li class="separator">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/breadcrumbs-angle-right-icon.svg"
									width="6" height="10" alt="Icon">
							</li>
							<li class="text-primary fw-medium">Contact Us</li>
						</ul>

						<?php if (get_sub_field('main_title')): ?>
							<h1 class="text-center mb-3">
								<?php the_sub_field('main_title'); ?>
							</h1>
						<?php endif; ?>

						<?php if (get_sub_field('description')): ?>
							<p class="text-center mb-0">
								<?php echo esc_html(get_sub_field('description')); ?>
							</p>
						<?php endif; ?>

					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'contact_section'):
			$form_title = get_sub_field('form_title');
			$contact_form = get_sub_field('contact_form');
			$contact_image = get_sub_field('contact_image');
			?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/contact-sec.css" type="text/css">
			<section class="contact-sec pb-0">
				<div class="container">
					<div class="row g-5">
						<div class="col-lg-5 order-lg-2">
							<?php if ($contact_image): ?>
								<img src="<?php echo esc_url($contact_image['url']); ?>"
									alt="<?php echo esc_attr($contact_image['alt']); ?>" style="max-width: 473px;"
									class="border-12 border-img object-cover w-100 h-100 d-block mx-auto" width="473" height="472"
									loading="lazy">
							<?php endif; ?>
						</div>
						<div class="col-lg-7 order-lg-1">
							<div class="contact-form">
								<?php if ($form_title): ?>
									<div class="form-title poppins-semibold fs-28 mb-4">
										<?php echo esc_html($form_title); ?>
									</div>
								<?php endif; ?>

								<?php if ($contact_form): ?>
									<div class="acf-form-wrapper">
										<?php echo $contact_form; // assuming it's a shortcode or HTML from ACF ?>
									</div>
								<?php else: ?>
									<form class="form s1">
										<div class="input-wrapper">
											<input type="text" class="input-control" placeholder="Name">
											<input type="email" class="input-control" placeholder="Email">
											<input type="number" class="input-control" placeholder="Phone Number">
											<input type="text" class="input-control" placeholder="Subject">
											<textarea name="Message" rows="4" class="textarea mb-3" placeholder="Message"></textarea>
											<a href="#" class="btn btn-primary w-100 fw-medium">
												Subscribe Now
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/send-icon.svg"
													style="object-fit: contain;" width="16" height="16" alt="Icon" loading="lazy">
											</a>
										</div>
									</form>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'contact_detail_section'):
			$main_title = get_sub_field('main_title');
			?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/contact-card-sec.css" type="text/css">
			<section class="contact-card-sec bg-white">
				<div class="container">
					<?php if ($main_title): ?>
						<h2 class="h3 text-center mb-5">
							<?php echo esc_html($main_title); ?>
						</h2>
					<?php endif; ?>

					<?php if (have_rows('card')): ?>
						<div class="contact-card-wrapper">
							<?php while (have_rows('card')):
								the_row();
								$card_icon = get_sub_field('card_icon');
								$card_title = get_sub_field('card_title');
								$card_link = get_sub_field('card_link');
								?>
								<div class="contact-card">
									<div class="icon-wrapper">
										<div class="icon">
											<?php if ($card_icon): ?>
												<img src="<?php echo esc_url($card_icon['url']); ?>"
													alt="<?php echo esc_attr($card_icon['alt']); ?>" width="48" height="48" loading="lazy">
											<?php endif; ?>
										</div>
									</div>
									<div class="card-content">
										<?php if ($card_title): ?>
											<div class="card-title">
												<?php echo esc_html($card_title); ?>
											</div>
										<?php endif; ?>

										<?php if ($card_link): ?>
											<a href="<?php echo esc_url($card_link['url']); ?>"
												target="<?php echo esc_attr($card_link['target']); ?>" class="card-info">
												<?php echo esc_html($card_link['title']); ?>
											</a>
										<?php elseif ($card_info = get_sub_field('card_info')): ?>
											<!-- optional: for static info text instead of link -->
											<div class="card-info">
												<?php echo esc_html($card_info); ?>
											</div>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>










		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
<?php // No layouts found ?>
<?php endif; ?>


<?php
get_footer();
