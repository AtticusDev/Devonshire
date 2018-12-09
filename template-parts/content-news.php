<?php
/**
 * Template part for displaying page content in about.php
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
			<div class="container mt-5">
				<div class="row justify-content-center">
				<?php 
					$args = array(
					 'post_type' => 'post',
					 'posts_per_page' => -1,
					 'orderby' => 'date',
					 'order' => 'DESC',
					 ); 
				?>
				<?php $the_query = new WP_Query( $args ); 
				$postCount = 0;
				?>

				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
					$postCount++;
					?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<?php if ( $postCount == 1 ) : ?>
					<div class="col-sm-12 col-md-12">
						<div class="animation-element fade-up mb-4">
							<div class="newsBlock justify-content-center d-flex align-items-end" style="background-image: url('<?php echo $featured_img_url ?>'); background-position: center center; background-repeat: no-repeat;">
								<div class="container">
									<div class="row justify-content-center">
										<div class="featurenewsSnippet">
											<p><?php echo get_the_date( 'd M Y' ); ?></p>
											<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
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
					</div>

 					<?php else : ?>
					<div class="col-md-5">
						<div class="animation-element fade-up mb-4">
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

 					<?php endif; ?>
					<?php 
					endwhile;
					wp_reset_postdata();
					?>			
				</div>
			</div>
		</div>


		<?php
		get_template_part( 'template-parts/footerbuttons' );
		?>

</article><!-- #post-## -->




