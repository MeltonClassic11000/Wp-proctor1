<?php
/*
Template Name: About Page
*/

get_header();
?>

<!-- Sections -->
<div class="overflow-hidden">
	<section class="hero-sec">
		<div class="container">
			<div class="row g-4">
				<div class="col-lg-6">
					<div class="content-wrapper d-flex flex-column h-100 justify-content-center">
						<ul class="breadcrumbs d-flex align-items-center gap-2 flex-wrap text-center mb-4">
							<li><a href="/" class="text-black">Home</a></li>
							<li class="separator">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/breadcrumbs-angle-right-icon.svg"
									width="6" height="10" alt="Icon">
							</li>
							<li class="text-primary fw-medium">About Us</li>
						</ul>
						<h1 class="mb-3">Pass Online Proctored Exams Stress-Free</h1>
						<p class="mb-0 fs-18">
							We specialize in helping pass online proctored exams confidently. Lorem Ipsum is simply
							dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
							standard dummy text ever since the 1500s, when an unknown printer took a galley of type
							and scrambled it.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-hero-img.webp"
						style="max-width: 616px;" class="hero-img img-fluid d-block mx-auto" width="616" height="413"
						alt="Hero Image">
				</div>
			</div>
		</div>
	</section>
	<section class="why-choose-us-sec certifications bg-cream-light">
		<div class="container">
			<h2 class="text-center s1 mb-5">Our Success in Numbers</h2>
			<div class="card-wrapper d-flex justify-content-between gap-4 flex-wrap">
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us-icon1.webp"
						class="d-block mx-auto mb-3" width="72" height="72" alt="Icon" loading="lazy">
					<span class="title d-block fs-58 fw-semibold text-center mb-2">5,000+</span>
					<span class="d-block text-center fs-20">Orders Delivered</span>
				</div>
				<div class="border-right"></div>
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us-icon2.webp"
						class="d-block mx-auto mb-3" width="72" height="72" alt="Icon" loading="lazy">
					<span class="title d-block fs-58 fw-semibold text-center mb-2">4.9/5</span>
					<span class="d-block text-center fs-20">Client Ratings</span>
				</div>
				<div class="border-right"></div>
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us-icon3.webp"
						class="d-block mx-auto mb-3" width="72" height="72" alt="Icon" loading="lazy">
					<span class="title d-block fs-58 fw-semibold text-center mb-2">50+</span>
					<span class="d-block text-center fs-20">Experts</span>
				</div>
				<div class="border-right"></div>
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us-icon4.webp"
						class="d-block mx-auto mb-3" width="72" height="72" alt="Icon" loading="lazy">
					<span class="title d-block fs-58 fw-semibold text-center mb-2">10,000+</span>
					<span class="d-block text-center fs-20">Happy Clients</span>
				</div>
			</div>
		</div>
	</section>
	<section class="half-sec mb-0 bg-cream-light">
		<div class="container">
			<div class="row g-4">
				<div class="col-xl-5">
					<div class="image-wrapper mx-auto">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-sec-img1.webp"
							style="max-width: 549px;"
							class="border-12 custom-border s1 object-cover w-100 h-100 d-block mx-auto" width="549"
							height="579" alt="Section Image" loading="lazy">
					</div>
				</div>
				<div class="col-xl-7">
					<h2 class="s1 mb-4">Professionals Who Know Every Platform &amp; Rule</h2>
					<p class="mb-3 fs-18"><strong>Whether it’s CompTIA, AWS, Cisco, Microsoft, or ITIL, our
							exam professionals know every testing platform and rule.</strong> Helping
						students and professionals pass their OnVUE, Pearson, Prometric, Examity, ProctorU,
						and other online proctored exams safely and confidently. Exams like the SAT, GRE, or
						GMAT are essential for college admissions.</p>
					<p class="mb-4 fs-20"><strong>We ensure smooth proctor handling, secure remote access, &amp;
							genuine results.</strong></p>
					<div class="card-wrapper">
						<div class="card custom-border">
							<ul class="list-with-icon mb-3">
								<li class="s1">Private &amp; Confidential</li>
							</ul>
							<p class="mb-0">
								Helping students and professionals pass their OnVUE, Pearson,
								Prometric, Examity, ProctorU, and other online proctored exams
								safely.
							</p>
						</div>
						<div class="card custom-border">
							<ul class="list-with-icon mb-3">
								<li class="s1">Private &amp; Confidential</li>
							</ul>
							<p class="mb-0">
								Helping students and professionals pass their OnVUE, Pearson,
								Prometric, Examity, ProctorU, and other online proctored exams
								safely.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="why-choose-us pb-0">
		<div class="container">
			<div class="topbar d-flex align-items-center justify-content-between flex-wrap gap-3 mb-5">
				<h2 class="mb-0">Why Choose Us</h2>
				<p style="max-width: 686px;" class="fw-medium mb-0">
					We specialize in helping students and professionals pass their OnVUE, Pearson, and other online
					proctored exams safely and confidently.
				</p>
			</div>
			<div class="card-wrapper">
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us1-icon1.webp"
						width="60" height="60" alt="Icon" loading="lazy" class="icon-image">
					<div class="content">
						<span class="icon-card-title">Guaranteed Results</span>
						<p class="icon-card-description mb-0">
							All communication is end-to-end encrypted with complete confidentiality. We specialize
							in helping students and professionals pass their online exams.
						</p>
					</div>
				</div>
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us1-icon2.webp"
						width="60" height="60" alt="Icon" loading="lazy" class="icon-image">
					<div class="content">
						<span class="icon-card-title">Human Experts Only</span>
						<p class="icon-card-description mb-0">
							All communication is end-to-end encrypted with complete confidentiality. We specialize
							in helping students and professionals pass their online exams.
						</p>
					</div>
				</div>
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us1-icon3.webp"
						width="75" height="60" alt="Icon" loading="lazy" class="icon-image">
					<div class="content">
						<span class="icon-card-title">Full Privacy Protection</span>
						<p class="icon-card-description mb-0">
							All communication is end-to-end encrypted with complete confidentiality. We specialize
							in helping students and professionals pass their online exams.
						</p>
					</div>
				</div>
				<div class="icon-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/why-choose-us1-icon4.webp"
						width="60" height="60" alt="Icon" loading="lazy" class="icon-image">
					<div class="content">
						<span class="icon-card-title">24/7 Live Support</span>
						<p class="icon-card-description mb-0">
							All communication is end-to-end encrypted with complete confidentiality. We specialize
							in helping students and professionals pass their online exams.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="half-sec mb-0">
		<div class="container">
			<div class="row g-4">
				<div class="col-xl-5 order-xl-2">
					<div class="image-wrapper mx-auto">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-sec-img2.webp"
							class="border-12 custom-border object-cover w-100 h-100" width="549" height="564"
							alt="Section Image" loading="lazy">
						<div class="custom-buttons">
							<div href="#" class="custom-secondary-btn btn1 s1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/check-icon1-white.webp"
									width="19" height="17" alt="Icon" loading="lazy"> Zero AI Involvement
							</div>
							<div href="#" class="custom-secondary-btn btn2 s2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/check-icon1-white.webp"
									width="19" height="17" alt="Icon" loading="lazy"> Pay After You Pass
							</div>
							<div href="#" class="custom-secondary-btn btn3 s3">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/check-icon1-white.webp"
									width="19" height="17" alt="Icon" loading="lazy"> Human Experts
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7 order-xl-1">
					<h2 class="s1 mb-4">our exam professionals know every testing platform and rule</h2>
					<p class="mb-4 fs-18">
						<span class="fw-semibold">
							Whether it’s CompTIA, AWS, Cisco, Microsoft, or ITIL, our exam professionals know every
							testing platform and rule.
						</span> Helping students and professionals pass their OnVUE, Pearson,
						Prometric, Examity, ProctorU, and other online proctored exams safely and confidently.
					</p>
					<ul class="list-with-icon s1 vx mb-4">
						<li class="mb-3"><strong>Private & Confidential</strong> — Your Identity Is Always Safe
						</li>
						<li class="mb-3"><strong>All Platforms Covered</strong> — Prometric, Examity, ProctorU &
							More</li>
						<li class="mb-0"><strong>99.99% On-Time Exam Assistance</strong> — Never Miss a Session
						</li>
					</ul>
					<p class="mb-0 fs-18 fw-semibold">
						We ensure smooth proctor handling, secure remote access, and genuine results.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section style="margin-bottom: 80px;" class="default-sec p-xl-0 p-0 pt-5 bg-cream">
		<div class="container">
			<div class="row g-5">
				<div class="col-xl-7 order-xl-2">
					<div class="content-wrapper h-100 d-flex flex-column justify-content-center">
						<div class="sub-title fw-bold text-primary fs-20 mb-3">Get Started Now!</div>
						<h2>Professionals Who Know Every Platform & Rule</h2>
						<p class="mb-5"><strong>Whether it’s CompTIA, AWS, Cisco, Microsoft, or ITIL, our exam
								professionals know every testing platform and rule.</strong> Helping students and
							professionals pass their OnVUE, Pearson, Prometric, Examity.</p>
						<a href="#" class="btn btn-primary">Get Started Now!</a>
					</div>
				</div>
				<div class="col-xl-5 order-xl-1">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificate-sec-img2.webp"
						style="max-width: 517px;" class="img-fluid pt-2 d-block mx-auto" width="517" height="517"
						alt="Section Image" loading="lazy">
				</div>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
