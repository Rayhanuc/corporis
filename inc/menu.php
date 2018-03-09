<?php
function corporis_nav_menu(){
	wp_nav_menu(array(
	'theme_location' => 'main',
	'menu_class' => 'nav navbar-nav navbar-right',
	'container' => false,
	'fallback_cb'  => 'WP_Bootstrap_Navwalker::fallback',
    'walker'       => new Corporis_nav_walker()
) );

}


?>