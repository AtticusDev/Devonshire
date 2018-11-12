<?php
if ( is_page_template( 'templates/home.php' ) ) {
	?>

							<div class="container header-nav-container">
								<div class="row justify-content-center" style="padding-top:2rem;  border-bottom: 4px solid #8e9094; height: 68px;">
										<nav class="navbar navbar-expand-lg justify-content-center topNav">
											<?php
									        $args = array(
								              'theme_location' => 'top-menu',
								              'depth'      => 2,
								              'container'  => false,
								              'menu_class'     => 'navbar-nav',
								              'menu_id' => 'menu-top-menu-home',
								              'walker'     => new Bootstrap_Walker_Nav_Menu()
								              );
								            if (has_nav_menu('primary')) {
								              wp_nav_menu($args);
								            }
											?>
										</nav>
								</div>
							</div>



<?php
} else {
	?>
							<div class="container" style="height: 50px; margin-top: 50px;">
								<div class="row justify-content-center" style="padding-top:2rem;  border-bottom: 4px solid #8e9094; height: 68px;">
										<nav class="navbar navbar-expand-lg justify-content-center topNav">
											<?php
									        $args = array(
								              'theme_location' => 'top-menu',
								              'depth'      => 2,
								              'container'  => false,
								              'menu_class'     => 'navbar-nav',
								              'walker'     => new Bootstrap_Walker_Nav_Menu()
								              );
								            if (has_nav_menu('primary')) {
								              wp_nav_menu($args);
								            }
											?>
										</nav>
								</div>
							</div>

<?php
}
?>
