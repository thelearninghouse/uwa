<?php get_header(); ?>
<?php
	global $post;
?>
			<div class="content">

				<div class="wrap cf">

					<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<div class="intro">

							<?php
								$hasSiblingPages = get_pages(array(
										'child_of' => $post->post_parent,
										'title_li' => ''
										// 'exclude' => $post->ID
								));
							?>

							<?php if ($hasSiblingPages && $post->post_parent != 0): ?>
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
							<?php else: ?>
								<div class="intro__breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
									<?php if(function_exists('bcn_display'))
									{
											bcn_display();
									}?>
								</div>
							<?php endif; ?>



						<p class="intro_headline">
							<?php if (get_field('intro_headline')): ?>
								<?php the_field('intro_headline') ?>
							<?php endif; ?>
						</p>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; endif; ?>
							<h1>Congratulations!</h1>
							<h3>You’re one step closer to accomplishing your educational goals.</h3>

							<p>We have received your information request and you will be contacted shortly by an enrollment counselor. If you have any questions, take a moment to write them down and ask when we call. We look forward to speaking with you.</p>
						</div>

					</main>




				</div>
				<?php include('includes/waiting.php'); ?>

			</div>

<?php get_footer(); ?>
