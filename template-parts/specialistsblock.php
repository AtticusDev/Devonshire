<!--	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center animation-element fade-up">
						<h2 class="underline-gold gray mt-5 mb-2">Our<br />Specialists</h2>
					</div>
				</div>
				<div class="row justify-content-center">

				<?php 
				$posts = get_field('select_consultants');
				if( $posts ): ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post);
			        ?>
					<div class="col-md-4 p-4">
					<a href="<?php the_permalink(); ?>">
						<div class="p-4 d-flex align-items-end docImage animation-element fade-up" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: 150%; background-position: center center; width: 100%; height: 350px;">
							<div class="docBlockGray">
									<div class="docName"><?php the_title(); ?></div>
									<div class="docTitle"><?php the_field('title'); ?></div>
							</div>
						</div></a>
					</div>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>						

				</div>
			</div>
		</div>
	</div>

-->
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h2 class="underline-gold gray mt-5 mb-2">Our<br />Specialists</h2>
					</div>
				</div>
				<div class="row justify-content-center">

					<?php
					$args = array(
					 'post_type' => 'consultant',
					 'meta_key' => 'order_number',
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC', 
					 );

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="col-md-4 p-4 animation-element fade-up">
					<a href="<?php the_permalink(); ?>">
						<div class="p-4 d-flex align-items-end docImage" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: 150%; background-position: center center; width: 100%; height: 350px;">
							<div class="docBlockGray">
									<div class="docName"><?php the_title(); ?></div>
									<div class="docTitle"><?php the_field('title'); ?></div>
							</div>
						</div></a>
					</div>



					<?php
					endwhile;
					wp_reset_query();
					?>

				</div>
			</div>
