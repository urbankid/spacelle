<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spacelle
 */

?>

<header id="masthead" class="flex flex-col-reverse w-full pt-8">

	<!-- Header image -->
	<div class=" border-t border-b border-black block">
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
		<?php else : ?>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>

		<?php
		$sp__description = get_bloginfo( 'description', 'display' );
		if ( $sp__description || is_customize_preview() ) :
			?>
			<p class="sr-only"><?php echo $sp__description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<!-- Site navigation -->
	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'spacelle' ); ?>" class="flex flex-row w-full pb-2 px-2">
		<button aria-controls="primary-menu" aria-expanded="false" class="sr-only"><?php esc_html_e( 'Primary Menu', 'spacelle' ); ?></button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_class'     => 'text-sm font-bold',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav>

</header>
