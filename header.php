<?php
/**
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body>
<?php do_action('wp_body_open');?>
<div class="site" id="page">

	<header id="header-container">

	<nav 
		class="navbar navbar-expand-md navbar-light py-5 py-md-0" 
		role="navigation"
	>
		<div class="container">

		<a class="site-title" href="/">george staniland</a>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#george-menu" 
			aria-controls="george-menu"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
			wp_nav_menu(array(
				'menu' => "main_menu",
				'theme_location' => 'primary',
				'depth' => 2,
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'george-menu',
				'menu_class' => 'nav navbar-nav',
				'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
				'walker' => new WP_Bootstrap_Navwalker(),
			));
		?>

		</div>
	</nav>

	</header>

