<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<?php
if( has_nav_menu('top') )
{
	wp_nav_menu( array( 
	'theme_location' => 'top',
        'container' => 'div',
	'container_id' => 'navbarCollapse',
        'container_class' => 'collapse navbar-collapse',    
	'menu_id' => 'navbar-nav',
	'menu_class' => 'navbar-nav mr-auto',
	)
	);
}
?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

