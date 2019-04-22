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

<?php
if ( is_front_page() ) :
?>
<meta name="google-site-verification" content="bogUf41LRdYp_sQaQZuNYmIOUN3rq4jLEUT7_bHfq-I" />
<?php
endif;
?>
	<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-T44MHPH');</script>

<!-- End Google Tag Manager -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T44MHPH"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

<!--	<div class="scrollIndicator">
		<img src='<?php bloginfo('stylesheet_directory'); ?>/images/fb.svg'>
	</div>
-->
    <nav class="slide-menu" id="test-menu-right">
		<?php
				        $args = array(
			              'theme_location' => 'primary',
			              'depth'      => 3,
			              'container'  => false,
			              'menu_class'     => 'navbar-nav',
		/*	              'walker'     => new Bootstrap_Walker_Nav_Menu()*/
			              );
			            if (has_nav_menu('primary')) {
			              wp_nav_menu($args);
			            }
		?>
	</nav>
	<div>
		<div id="content" class="site-content">
			<div id="primary" class="content-area text-center">
				<main id="main" class="site-main" role="main">
					<div class="container-fluid navfixed" style="background-color: #cca969;">
						<div class="row">
							<div class="container">
								<div class="row justify-content-between text-white">
									<div class="contactNo">
										  <span class="rTapNumber321152">020 7034 8057</span>
									</div>
									<div class="siteName">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="mainLogo"></div></a>
									</div>
									<div class="navHolder">
										<div class="" style="float: left; padding-top: 11px;">




<div class="search-toggle">
  <svg class="search-toggle__icon icon-search"><use xlink:href="#icon-search"></use></svg>
  <svg class="search-toggle__icon icon-cancel"><use xlink:href="#icon-cancel"></use></svg>
</div>

<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-search" viewBox="0 0 967 1024">
	<title>Search</title>
	<path class="path1" d="M927.651 1002.753c-44.251 33.741-108.699 26.532-143.71-16.175l-149.588-166.668c-22.479-27.3-87.619-120.425-76.684-151.086-68.768 38.258-148.227 54.19-228.698 45.118-98.843-11.080-187.17-58.555-248.728-133.512-61.597-74.98-89.201-168.615-77.68-263.732 11.513-95.178 60.76-180.28 138.691-239.626 160.919-122.493 395.396-96.129 522.703 58.813 115.505 140.737 103.551 339.777-20.015 466.955 33.574-3.293 128.288 67.391 150.873 94.836l149.695 166.714c35.011 42.707 27.513 104.646-16.859 138.364zM629.706 387.138c8.046-66.319-11.171-131.611-54.114-183.869-88.691-108.075-252.241-126.516-364.522-41.133-112.227 85.558-131.33 242.979-42.578 350.956 88.707 108.075 252.219 126.524 364.499 41.087 54.319-41.346 88.669-100.676 96.714-167.041z"></path>
</symbol>
  <symbol id="icon-cancel" viewBox="0 0 1024 1024">
	<title>cancel</title>
	<path class="path1" d="M626.784 512.032l195.072 195.072c12.672 12.672 12.672 33.248 0 45.92l-68.832 68.832c-12.672 12.672-33.216 12.672-45.92 0l-195.104-195.072-195.104 195.072c-12.672 12.672-33.216 12.672-45.888 0l-68.864-68.832c-12.672-12.672-12.672-33.216 0-45.92l195.104-195.072-195.104-195.104c-12.672-12.672-12.672-33.248 0-45.92l68.896-68.832c12.672-12.672 33.216-12.672 45.888 0l195.072 195.104 195.104-195.104c12.672-12.672 33.216-12.672 45.92 0l68.832 68.864c12.672 12.672 12.672 33.216 0 45.92l-195.072 195.072z"></path>
</symbol>
  
</defs>
</svg>




<!--										  <form role="search" method="get" class="form search-form" action="/index.php">
											<div class="input-group">
										      <input name="s" type="text" class="form-control" placeholder="Search our site">
										      <span class="input-group-btn">
										        <button type="submit" value="Search" class="btn btnGrey" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
										    	</span>
											</div>
											</form>
-->




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
					<div class="search-container d-flex justify-content-center">
						    <div class="site-search">
							    <form role="search" method="get" class="form search-form" action="/index.php">
									<div class="input-group">
								      <input name="s" type="text" class="form-control" placeholder="Search our site">
								      <span class="input-group-btn">
								        <button type="submit" value="Search" class="btn btnGrey" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
								    	</span>
									</div>
								</form>    
						    </div>
					</div>

