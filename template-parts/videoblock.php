<!-- HIDDEN UNTIL VIDEO CAN BE INCLUDED -->


			<?php 
			$posts = get_field('select_video');
			if( $posts ): ?>
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post);
	        ?>

			<div class="container-fluid" style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 text-center animation-element fade-up">
								<h3 class="underline-gold gray mt-5"><?php the_title(); ?></h3>
								<?php the_content(); ?>					
							</div>
							<div class="mb-5 p-4 animation-element fade-up" style="background-color: #ffffff;">
								<iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_address'); ?>?title=0&byline=0&portrait=0" class="videoBox" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

		    <?php endforeach; ?>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>						
