<?php get_header(); ?>
<?php
	global $post;
	$args = array(
			'post_parent' => $post->ID,
			'post_type' => 'page'
	);
	$subpages = new WP_query($args);
	// var_dump($subpages);
?>
			<div class="content">

				<div class="wrap cf">

						<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="page-header">

									<?php
										if ( function_exists('yoast_breadcrumb') ) {
											yoast_breadcrumb('<p class="breadcrumbs">','</p>');
										}
									?>
									<h1 class="page-header__title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="page-content cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</main>



				</div>
				<?php include('includes/waiting.php'); ?>

			</div>

<?php get_footer(); ?>
