					<?php if( have_rows('nav_buttons') ): ?>
						<h3 class="gold">Find out more</h3>
						<p>
					<?php
					while( have_rows('nav_buttons') ): the_row(); 
					// vars
					$link = get_sub_field('page_link');
					$color = get_sub_field('button_colour');
					$label = get_sub_field('button_label');
					?>
						<?php if ($color == 'gold') { ?>
							<a href="<?php echo $link; ?>" class="btn navGoldWhiteBtn"><?php echo $label; ?></a><br />
						<?php } elseif ($color == 'blue') { ?>
							<a href="<?php echo $link; ?>" class="btn navBlueWhiteBtn"><?php echo $label; ?></a><br />
						<?php } ?>

					<?php endwhile;
					endif; ?>

					<?php if( have_rows('anchor_buttons') ): 
					while( have_rows('anchor_buttons') ): the_row(); 
					// vars
					$link = get_sub_field('page_link');
					$color = get_sub_field('button_colour');
					$label = get_sub_field('button_label');
					?>
						<?php if ($color == 'gold') { ?>
							<a href="<?php echo $link; ?>" class="btn navGoldWhiteBtn"><?php echo $label; ?></a><br />
						<?php } elseif ($color == 'blue') { ?>
							<a href="<?php echo $link; ?>" class="btn navBlueWhiteBtn"><?php echo $label; ?></a><br />
						<?php } ?>

					<?php endwhile;
					endif; ?>

					</p>
