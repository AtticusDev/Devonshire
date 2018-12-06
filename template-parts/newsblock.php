			<div class="container mt-5 mb-5">
				<div class="row">
					<div class="col text-center animation-element fade-up">
						<h2 class="underline-gold gray">Latest News</h2>
					</div>
				</div>
				<div class="row justify-content-center">

				<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>

				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					<div class="col-md-5">
						<div class="animation-element fade-up">
							<div class="newsBlock justify-content-center d-flex align-items-end" style="background-image: url('<?php echo $featured_img_url ?>'); background-position: center center; background-repeat: no-repeat;">
								<div class="container">
									<div class="dateBlock">
										<?php echo get_the_date( 'd M Y' ); ?>
									</div>
									<div class="newsSnippet">
										<h3 class="gold"><a href="<?php the_permalink() ?>" class="gold"><?php the_title(); ?></a></h3>
							<?php
							$string = get_the_content();
							?>
							<p class="mb-1"><?php echo mb_strimwidth($string, 0, 120, '[...]'); ?></p>
										<a href="<?php the_permalink() ?>" class="btn smallBlueWhiteBtn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php 
					endwhile;
					wp_reset_postdata();
					?>			
				</div>
			</div>
