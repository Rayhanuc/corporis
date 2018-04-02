<?php



// framework options filter example
function theme_setting_options( $options ) {

  $options      = array(); // remove old options

  $options[]    = array(
    'name'      => 'header-section',
    'title'     => 'Header',
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Website Title',
      )
    )
  );
  $options[]    = array(
    'name'      => 'footer-section',
    'title'     => 'Footer',
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'footer-title',
        'type'  => 'text',
        'title' => 'Footer Title',
      )
    )
  );

  return $options;

}
add_filter( 'cs_framework_options', 'theme_setting_options' );




?>