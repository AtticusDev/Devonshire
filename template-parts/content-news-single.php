<?php
/**
 * Template part for displaying page content in news-single.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid" style="background-color: #f8f7f2;">
			<?php
			get_template_part( 'template-parts/topnav' );
			?>
			<div class="container mt-5 pb-5">
				<div class="row">
					<div class="col-md-8 text-left">
						<img src="<?php the_post_thumbnail_url(); ?>" class="mb-4">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					</div>

					<div class="col-md-4">
						<div class="p-4 mb-4" style="background-color: #ffffff; width:100%;">
							<h3 class="underline-gold">General Enquiry</h3>
							<?php
								echo do_shortcode('[gravityform id=2 name=Enquiry title=false description=false]');
							?>
						</div>

						<?php 
							$args = array(
							 'post_type' => 'post',
							 'posts_per_page' => 3,
							 'orderby' => 'date',
							 'order' => 'DESC',
							 ); 
						?>
						<?php $the_query = new WP_Query( $args ); 
						?>

						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
							?>
							<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

								<div class="animation-element fade-up mb-4">
									<div class="newsBlockSide justify-content-center d-flex align-items-end" style="background-image: url('<?php echo $featured_img_url ?>'); background-position: center center; background-repeat: no-repeat;">
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
					<?php 
					endwhile;
					wp_reset_postdata();
					?>			

					</div>
				</div>
			</div>
	</div>


			<?php
			get_template_part( 'template-parts/footerbuttons' );
			?>
</article><!-- #post-## -->



