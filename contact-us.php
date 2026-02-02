<?php
/*
Template Name: Contact Us
*/

get_header();
?>

<!-- Sections -->
<div class="overflow-hidden">
	<section class="hero-sec">
		<div class="container">
			<div style="max-width: 733px;" class="content-wrapper mx-auto">
				<ul
					class="breadcrumbs d-flex justify-content-center align-items-center gap-2 flex-wrap text-center mb-4">
					<li><a href="/" class="text-black">Home</a></li>
					<li class="separator">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/breadcrumbs-angle-right-icon.svg" width="6" height="10" alt="Icon">
					</li>
					<li class="text-primary fw-medium">Contact Us</li>
				</ul>
				<h1 class="text-center mb-3">We're Always here to help!</h1>
				<p class="text-center mb-0">We specialize in helping pass online proctored exams confidently, lorem
					Ipsum is simply dummy text of the printing & typeset industry.</p>
			</div>
		</div>
	</section>
	<section class="contact-sec pb-0">
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-5 order-lg-2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-section-img.webp" style="max-width: 473px;"
						class="border-12 border-img object-cover w-100 h-100 d-block mx-auto" width="473" height="472"
						alt="Section Image" loading="lazy">
				</div>
				<div class="col-lg-7 order-lg-1">
					<div class="contact-form">
						<div class="form-title poppins-semibold fs-28 mb-4">Let’s Chat</div>
						<form class="form s1">
							<div class="input-wrapper">
								<input type="text" class="input-control" placeholder="Name">
								<input type="email" class="input-control" placeholder="Email">
								<input type="number" class="input-control" placeholder="Phone Number">
								<input type="text" class="input-control" placeholder="Subject">
								<textarea name="Message" rows="4" class="textarea mb-3"
									placeholder="Message"></textarea>
								<a href="#" class="btn btn-primary w-100 fw-medium">
									Subscribe Now
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/send-icon.svg" style="object-fit: contain;" width="16"
										height="16" alt="Icon" loading="lazy">
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact-card-sec">
		<div class="container">
			<h2 class="h3 text-center mb-5">Contact Details</h2>
			<div class="contact-card-wrapper">
				<div class="contact-card">
					<div class="icon-wrapper">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/phone-dark-icon.webp" width="48" height="48" alt="Icon"
								loading="lazy">
						</div>
					</div>
					<div class="card-content">
						<div class="card-title">Call Us</div>
						<a href="tel:+16462439935" class="card-info">+1 (646) 243-9935</a>
					</div>
				</div>
				<div class="contact-card">
					<div class="icon-wrapper">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/contact-envelop-dark.webp" width="52" height="36" alt="Icon"
								loading="lazy">
						</div>
					</div>
					<div class="card-content">
						<div class="card-title">Email Us</div>
						<a href="mailto:+info@exams4u.com" class="card-info">info@exams4u.com</a>
					</div>
				</div>
				<div class="contact-card">
					<div class="icon-wrapper">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/contact-calendar-dark.webp" width="48" height="48" alt="Icon"
								loading="lazy">
						</div>
					</div>
					<div class="card-content">
						<div class="card-title">Support Timing</div>
						<div class="card-info">24 Hours / 07 Day</div>
					</div>
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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificate-sec-img2.webp" style="max-width: 517px;"
						class="img-fluid pt-2 d-block mx-auto" width="517" height="517" alt="Section Image"
						loading="lazy">
				</div>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
