	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center animation-element fade-up">
						<h2 class="underline-gold gray mt-5">Read our<br />Patient Stories</h2>
					</div>
				</div>
				<div class="row">

						<?php 
						$args = array( 'post_type' => 'quote', 'posts_per_page' => '3', 'orderby' => 'rand' );
						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post();
						 $quotename = get_field( "author" );
						 $quotetitle = get_field( "title" );
						?>

						<div class="col-md-4 p-5 animation-element fade-up">
							<p><?php the_content(); ?></p>
							<span class="uppercase gold"><?php the_title(); ?></span>
						</div>

						<?php 
						endwhile;
						wp_reset_query();
						?>
				</div>
			</div>
		</div>
	</div>
