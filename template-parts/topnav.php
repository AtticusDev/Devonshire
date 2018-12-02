<?php
if ( is_page_template( 'templates/home.php' ) ) {
	?>

							<div class="container header-nav-container">
								<div class="row justify-content-center">
										<nav class="navbar navbar-expand-lg justify-content-center topNav topNavBar">
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
							<div class="container header-nav-container">
								<div class="row justify-content-center">
										<nav class="navbar navbar-expand-lg justify-content-center topNav topNavBar">
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
