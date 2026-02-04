<?php
/* Template Name: Blog Page */




get_header();
?>

<div class="overflow-hidden">

	<!-- HERO / BANNER (STATIC) -->
	<section class="hero-sec">
		<div class="container">
			<div style="max-width: 611px;" class="content-wrapper mx-auto">
				<ul
					class="breadcrumbs d-flex justify-content-center align-items-center gap-2 flex-wrap text-center mb-4">
					<li><a href="<?php echo home_url(); ?>" class="text-black">Home</a></li>
					<li class="separator">›</li>
					<li class="text-primary fw-medium">Blog</li>
				</ul>
				<h1 class="text-center mb-0"><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<!-- FEATURED BLOG (LATEST POST) -->
	<section class="featured-blog-sec">
		<div class="container">

			<?php
			$featured = new WP_Query([
				'posts_per_page' => 1
			]);
			if ($featured->have_posts()):
				while ($featured->have_posts()):
					$featured->the_post();
					?>

					<div class="row g-3 mb-5">
						<div class="col-xl-7">
							<?php the_post_thumbnail('large', ['class' => 'img-fluid border-12']); ?>
						</div>
						<div class="col-xl-5">
							<div class="blog-featured-card">
								<div class="topbar mb-3">
									<div class="featured-blog-btn">
										<?php echo get_the_category()[0]->name ?? ''; ?>
									</div>
									<div class="date"><?php echo get_the_date(); ?></div>
								</div>

								<div class="featured-title"><?php the_title(); ?></div>
								<p><?php echo wp_trim_words(get_the_excerpt(), 35); ?></p>

								<div class="bottom">
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
									<div><?php the_author(); ?></div>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile;
				wp_reset_postdata();
			endif; ?>

			<!-- TABS -->
			<h2 class="h3 title">Featured Blogs</h2>

			<div class="tabs-wrapper">
				<div class="tabs-buttons">
					<button class="tab-btn active" data-cat="all">All</button>
					<?php
					$categories = get_categories();
					foreach ($categories as $cat):
						?>
						<button class="tab-btn" data-cat="<?php echo $cat->slug; ?>">
							<?php echo $cat->name; ?>
						</button>
					<?php endforeach; ?>
				</div>

				<div class="tabs-content">
					<div class="tab-content active" id="tab-all">
						<div class="row g-3">
							<?php
							$tab_posts = new WP_Query(['posts_per_page' => 6]);
							while ($tab_posts->have_posts()):
								$tab_posts->the_post();
								?>
								<div class="col-lg-4 col-md-6">
									<?php get_template_part('template-parts/blog-card'); ?>
								</div>
							<?php endwhile;
							wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- STATIC SUBSCRIBE SECTION -->
	<section class="default-sec bg-cream">
		<?php get_template_part('template-parts/newsletter'); ?>
	</section>

	<!-- BLOG GRID + PAGINATION -->
	<section class="blog-sec bg-cream-light">
		<div class="container">

			<div class="row g-3 mb-5">
				<?php
				$paged = get_query_var('paged') ?: 1;
				$blog = new WP_Query([
					'posts_per_page' => 12,
					'paged' => $paged
				]);
				while ($blog->have_posts()):
					$blog->the_post();
					?>
					<div class="col-lg-4 col-md-6">
						<?php get_template_part('template-parts/blog-card'); ?>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>

			<div class="pagination">
				<?php
				echo paginate_links([
					'total' => $blog->max_num_pages
				]);
				?>
			</div>

		</div>
	</section>

	<!-- LAST STATIC SECTION -->
	<section class="default-sec bg-cream">
		<?php get_template_part('template-parts/cta'); ?>
	</section>

</div>

<?php get_footer(); ?>