<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function gwp_widgets_init() {

	register_sidebar( array(
		'name'          => 'loja right sidebar',
		'id'            => 'loja_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'gwp_widgets_init' );
?>
