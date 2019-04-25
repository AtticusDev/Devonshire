<!-- HIDDEN UNTIL VIDEO CAN BE INCLUDED -->



			<div class="container-fluid" style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container mb-5">
						<div class="row justify-content-center">
						<?php 
						$posts = get_field('select_video');
						if( $posts ): ?>
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post);
				        ?>


							<div class="col-md-6 text-center animation-element fade-up">
								<h3 class="underline-gold gray mt-5"><?php the_title(); ?></h3>
<!-- 								<?php the_content(); ?>					
 -->								
 									<div class="mb-2 p-2 animation-element fade-up" style="background-color: #ffffff;">
									<iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_address'); ?>?title=0&byline=0&portrait=0" class="videoBox" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>						

						</div>
					</div>
				</div>
			</div>

