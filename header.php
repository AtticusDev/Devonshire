<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devonshire
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="slide-menu" id="test-menu-right">
		<?php
				        $args = array(
			              'theme_location' => 'primary',
			              'depth'      => 2,
			              'container'  => false,
			              'menu_class'     => 'navbar-nav',
		/*	              'walker'     => new Bootstrap_Walker_Nav_Menu()*/
			              );
			            if (has_nav_menu('primary')) {
			              wp_nav_menu($args);
			            }
		?>
	</nav>
	<div id="main">
		<div id="content" class="site-content">
			<div id="primary" class="content-area text-center">
				<main id="main" class="site-main" role="main">
					<div class="container-fluid navfixed" style="background-color: #cca969;">
						<div class="row">
							<div class="container">
								<div class="row justify-content-between text-white">
									<div class="contactNo">
										Call us on +44 (0)20 7034 8057
									</div>
									<div class="siteName">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/devonshire-logo-new.svg"></a>
									</div>
									<div class="navHolder">
										<div style="float: left; padding-top: 11px;">
										  <form role="search" method="get" class="form search-form" action="/index.php">
											<div class="input-group">
										      <input name="s" type="text" class="form-control" placeholder="Search our site">
										      <span class="input-group-btn">
										        <button type="submit" value="Search" class="btn btnGrey" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
										    	</span>
											</div>
											</form>
										</div>
								        <div class="controls" style="float: left;">
											<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-right" data-action="toggle">
											  <span class="hamburger-box">
											    <span class="hamburger-inner"></span>
											  </span>
											</button>
								        </div>
								    </div>
							    </div>
							</div>
					    </div>
					</div>


