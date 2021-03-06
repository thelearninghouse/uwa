<?php get_header(); ?>

			<div class="content">

				<div class="wrap cf">

					<div class="content__innerWrapper">
						<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

								  <section class="post-content cf" itemprop="articleBody">
										<div class="infographic-image">
										<?php $full_image = get_field( 'infographic_full_image' );
										if ( $full_image ) { ?>
											<?php echo wp_get_attachment_image( $full_image, 'full' ); ?>
										<?php } else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/infographic-placeholder.png" width="2000" height="2000" alt="" aria-hidden="true">
										<?php } ?>
										</div>
										<div class="infographic-share"><?php tlh_social_sharing_buttons(); ?></div>
										<div class="embed-code">
											<h2 class="embed-code__title h4">Embed this Image On Your Site</h2>
											<?php $full_image_meta = wp_get_attachment_image_src( $full_image, 'full'); ?>
											<textarea style="width: 540px; height: 100px;">&lt;a href="<?php the_permalink(); ?>"&gt;&lt;img style="max-width:100%;height:auto;" src="<?php echo $full_image_meta[0]; ?>" alt="View the <?php the_title(); ?> infographic from <?php echo get_bloginfo('name'); ?>" width="<?php echo $full_image_meta[1]; ?>" height="<?php echo $full_image_meta[2]; ?>" border="0" /&gt;&lt;/a&gt;</textarea>
										</div>
										<?php $infographic_transcript = get_field( 'infographic_transcript' );
										if ( $infographic_transcript ) { ?>
											<div class="infographic-transcript">
												<h2 class="h3">Infographic Transcript</h2>
												<hr class="separator">
												<?php echo $infographic_transcript; ?>
											</div>
										<?php } ?>
								  </section> <?php // end article section ?>

								</article> <?php // end article ?>

							<?php endwhile; ?>

							<?php else : ?>

								<article class="post-not-found hentry cf">
										<header class="post-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="post-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="post-footer">
												<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
										</footer>
								</article>

							<?php endif; ?>
						</main>
						</div>
				</div>

			</div>

            <script>
					 // Progess Indicator for Blog Posts
           // Load document before calculating window height
            $(document).on('ready', function() {
              var winHeight = $(window).height(),
                  docHeight = $(document).height(),
                  progressBar = $('progress'),
                  max, value;

              /* Set the max scrollable area */
              max = docHeight - winHeight;
              progressBar.attr('max', max);

              console.log(docHeight);
              console.log(winHeight);

              $(document).on('scroll', function(){
                 value = $(window).scrollTop();
                 progressBar.attr('value', value);
              });
            });
            </script>

<?php get_footer(); ?>
