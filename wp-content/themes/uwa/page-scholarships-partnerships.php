<?php get_header(); ?>
<?php
	global $post;
	// $args = array(
	// 		'post_parent' => $post->ID,
	// 		'post_type' => 'page'
	// );
	// $subpages = new WP_query($args);
	// var_dump($subpages);
// ?>


			<span class="scholarships-partnerships__content">

				<div class="wrap cf">

						<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<div class="intro">
				        <div class="intro__subNav" typeof="BreadcrumbList" vocab="https://schema.org/">
									<ul class="subpagesNav">
										<?php
										$subpageNav = wp_list_pages(array(
										    'child_of' => $post->post_parent,
												'title_li' => ''
										    // 'exclude' => $post->ID
										))
										?>
									</ul>
				        </div>
				        <p class="intro__headline">Scholarships and Partnerships at the University of West Alabama</p>
								<p>The University of Alabama is dedicated to making education as affordable as possible. Each program is competitively priced, and 80 percent of students receive some type of financial aid. Students also use available grants, scholarships, loans and more.</p>

								<p>Here are some exciting scholarship and partnership opportunities at UWA.</p>
								<ul class="scholarships-parnerships__list">
								 		<li class="scholarships-parnerships__item"><span class="scholarships-partnerships__content">The <span class="bold">Teacher Connect Scholarship </span>program at UWA partners with school systems to help teachers and aspiring teachers complete education degrees online while qualifying for a tuition scholarship of up to $100 per credit hour. It can be applied to all 35 online education programs for certification (undergraduate and graduate level) at UWA.</span>
											<a target="_blank" href="/my/teacherconnect/" class="scholarships-parnerships__btn btn">Learn More</a>
										</li>
								 		<li class="scholarships-parnerships__item"><span class="scholarships-partnerships__content">The <span class="bold">Military Connect </span>program at UWA helps <span class="bold">active military members, veterans, spouses and dependents </span>complete their degrees online while qualifying for a <span class="bold">tuition scholarship of up to $100 per credit hour</span>. After the scholarship, tuition equals $329 per credit hour for graduate programs and $275 per credit hour for undergraduate programs. The scholarship is available to students who qualify for the Air University Associate-to-Baccalaureate Cooperative program.</span>
											<a target="_blank" href="/my/military-connect-scholarship/" class="scholarships-parnerships__btn btn">Learn More</a>
										</li>
								 		<li class="scholarships-parnerships__item"><span class="scholarships-partnerships__content">The <span class="bold">Business Connect </span>program enables employees at partner companies to receive a scholarship worth<span> $50 per credit hour </span>for graduate or undergraduate degree programs at UWA. This amounts to a $1,500 savings over the course of a typical 30-credit graduate degree or more than $6,000 for a 120-credit undergraduate degree.</span>
											<a target="_blank" href="/my/business-connect-scholarship/" class="scholarships-parnerships__btn btn">Learn More</a>
										</li>
								 		<li class="scholarships-parnerships__item"><span class="scholarships-partnerships__content">The <span class="bold">Alabama Transfer Scholarship </span>allows students who transfer an associate degree from any partnered community college to earn a scholarship for up to $2,000 at UWA. It will be distributed to your online bachelor’s degree program at $50 per credit hour for the first 40 consecutive credits.</span>
											<a target="_blank" href="/my/transfer/" class="scholarships-parnerships__btn btn">Learn More</a>
										</li>
								 		<li class="scholarships-parnerships__item"><span class="scholarships-partnerships__content">The <span class="bold">Air University Associate-to-Baccalaureate Cooperative </span>allows eligible students to transfer all 60 credit hours of their Community College of the Air Force degree into an online bachelor’s program at UWA. Active duty Air Force, Air Force Reserve or Air National Guard members can transfer their degree and be required to complete no more than 60 credit hours at UWA. Note that degree requirements can be completed after retiring or separating from the service.</span>
											<a target="_blank" href="/my/assoc-to-baccalaureate/" class="scholarships-parnerships__btn btn">Learn More</a>
										</li>
								</ul>
				      </div>

						</main>
				</div>
				<?php include('includes/waiting.php'); ?>
			</div>

<?php get_footer(); ?>