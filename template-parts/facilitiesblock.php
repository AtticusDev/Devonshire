			<div class="container-fluid" style="background-color:#f8f7f2;">
				<div class="row">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8 text-center animation-element fade-up">
								<h2 class="underline-gold gray mt-5">Our facilities</h2>
							</div>
							<div class="col-xs-10 col-sm-10 col-md-8 col-md-offset-2 m-auto animation-element fade-up">

								<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">

																			<?php 
										$count = count(get_field('image_gallery', 'option')); 
										$images = get_field('image_gallery', 'option');
										$num = 0;
										$nnum = 0;
										?>

									<!-- Carousel indicators -->
									<ol class="carousel-indicators">
										<?php
										if( $images ): ?>
								        <?php foreach( $images as $image ): 
								        	if($nnum > 0) {
							        		?>
										<li data-target="#myCarousel" data-slide-to="<?php echo $num ?>"></li>
										<?php 
							                $nnum++;
							                }else{
							            ?>
										<li data-target="#myCarousel" data-slide-to="<?php echo $num ?>" class="active"></li>
					                    <?php 
							                $nnum++;
							             	}
							            ?>

								        <?php endforeach; ?>
									<?php endif; ?>

									</ol>   
									<!-- Wrapper for carousel items -->
									<div class="carousel-inner">

										<?php

										if( $images ): ?>
										        <?php foreach( $images as $image ): 
										        	if($num > 0) {
									        		?>
													<div class="item carousel-item">
										                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													</div>
													<?php 
										                $num++;
										                }else{
										            ?>
													<div class="item carousel-item active">
										                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													</div>
								                    <?php 
										                $num++;
										             	}
										            ?>

										        <?php endforeach; ?>
										<?php endif; ?>


									</div>
									<!-- Carousel controls -->
									<a class="carousel-control left carousel-control-prev" data-target="#myCarousel" data-slide="prev">
										<span><i class="fa fa-angle-left"></i></span>
									</a>
									<a class="carousel-control right carousel-control-next" data-target="#myCarousel" data-slide="next">
										<span><i class="fa fa-angle-right"></i></span>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
