	<div class="container-fluid mt-5" style="background-color:#f8f7f2;">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center animation-element fade-up">
						<h2 class="underline-gold gray mt-5">Second Opinions</h2>
						<p class="pt-3 pl-5 pr-5 pb-0 gold">
							<?php 
							$intro = get_field('introduction', 'option'); 
							?>


							<?php echo $intro; ?></p>					
					<div class="col text-center animation-element fade-up">
						<a href="/second-opinion/" class="btn largeBtn white bggold">Request a second opinion</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>