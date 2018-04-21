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
      ),
      array(
        'id'      => 'title-color',
        'type'    => 'color_picker',
        'title'   => 'Website Logo Color',
        'default' => '#ffbc00',
      ),
      array(
        'id'      => 'header-bg-color',
        'type'    => 'color_picker',
        'title'   => 'Header Bg Color',
        'default' => '#ffbc00',
      ),
      array(
        'id'      => 'menu-color',
        'type'    => 'color_picker',
        'title'   => 'Menu Color',
        'default' => '#ffbc00',
      ),
      array(
        'id'    => 'switcher',
        'type'  => 'switcher',
        'title' => 'Switcher Field',
      ),
    )
  );
  $options[]    = array(
    'name'      => 'footer-section',
    'title'     => 'Footer',
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'footer-copyright',
        'type'  => 'textarea',
        'title' => 'Footer Copyright',
      ),
      array(
        'id'      => 'footer-bg-color',
        'type'    => 'color_picker',
        'title'   => 'Footer Bg Color',
        'default' => '#ffbc00',
      ),
      array(
        'id'      => 'copyright-bg-color',
        'type'    => 'color_picker',
        'title'   => 'Copyright Bg Color',
        'default' => '#ffbc00',
      ),
      // Typography without Chosen and Variant
      // array(
      //   'id'        => 'font-family',
      //   'type'      => 'typography',
      //   'title'     => 'Font Family',
      //   'default'   => array(
      //     'family'  => '',
      //     'font'    => 'google',
      //   ),        
      // ),

      //footer select section
      array(
        'id'       => 'footer_widget_columns',
        'type'     => 'select',
        'title'    => esc_html__( 'Footer Column','corporis' ),
        'options'  => array(
          '1'  => esc_html__( 'Column 1', 'corporis' ),
          '2'  => esc_html__( 'Column 2', 'corporis' ),
          '3'  => esc_html__( 'Column 3', 'corporis' ),
          '4'  => esc_html__( 'Column 4', 'corporis' ),
          
        ),
        'default'  => 4,
      ),


    )
  );

  

  return $options;

}
add_filter( 'cs_framework_options', 'theme_setting_options' );




?>