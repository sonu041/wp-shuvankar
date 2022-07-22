<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'nav-menu', 'menu_class' => 'nav-menu' ) ); ?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
