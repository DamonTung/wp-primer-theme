<?php
/**
 * Displays site credit.
 *
 * @package Primer
 * @since   1.0.0
 */
?>

<div class="site-info-text">
<?php

printf(
	esc_html_x( 'Copyright %1$s %2$d %3$s', '1. copyright symbol, 2. year, 3. site title', 'primer' ),
	'&copy;',
	date( 'Y' ),
	get_bloginfo( 'blogname' )
);

if ( (bool) apply_filters( 'primer_author_credit', true ) ) {

	echo ' &mdash; ';

	$theme = wp_get_theme();

	printf(
		esc_html_x( '%1$s theme by %2$s', '1. theme name link, 2. theme author link', 'primer' ),
		sprintf(
			'<a href="%s">%s</a>',
			esc_url( $theme->get( 'ThemeURI' ) ),
			esc_html( $theme->get( 'Name' ) )
		),
		sprintf(
			'<a href="%s" rel="designer">%s</a>',
			esc_url( $theme->get( 'AuthorURI' ) ),
			esc_html( $theme->get( 'Author' ) )
		)
	);

}

?>
</div>
