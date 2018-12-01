			<div class="container-fluid" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/multistar_gs.jpg'); background-position: center top; background-repeat: no-repeat;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 text-center animation-element fade-up">
								<h2 class="underline-gold gray mt-5">Devonshire Clinic<br />Technologies</h2>
							</div>
						</div>
						<div class="row">


						<?php
						$args = array(
						 'post_type' => 'technology',
						 'meta_key' => 'order_number',
						 'orderby' => 'meta_value_num',
						 'order' => 'ASC', 
						 );

						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						?>

								<div class="col-md-4 p-3 animation-element fade-up">
									<a href="<?php the_permalink(); ?>">
									<div class="p-4 d-flex align-items-end" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center center; width: 100%; height: 260px;">
										<div class="d-flex align-items-center justify-content-center techBlockWhite">
											<?php the_title(); ?>
										</div>
									</div></a>
								</div>

						<?php
						endwhile;

						wp_reset_query();

						?>

						</div>
					</div>
				</div>
			</div>
