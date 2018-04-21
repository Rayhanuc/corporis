<?php

function corporis_metabox_option($options) {

$options        = array();

$options[]      = array(
  'id'            => '_page_metabox',
  'title'         => 'Title Option',
  'post_type'     => 'page', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'Title Section',
      'title'     => 'Title Section',
      'icon'      => 'fa fa-wifi',
      'fields'    => array(

        // a field
        array(
          'id'      => 'enable_title',
          'type'    => 'radio',
          'title'   => 'Page Title Section',
          'options' => array(
            'yes'   => 'Enable',
            'no'    => 'Disable',
          ),
          'default' => 'no',
        ),

        // a field
        array(
          'id'        => 'title_image',
          'type'      => 'image',
          'title'     => 'Backgrouond Image',
          'add_title' => 'Add Backgrouond Image',
          'dependency'   => array( 'enable_title_yes', '!=', '' ),
        ),

        array(
          'id'      => 'title_color',
          'type'    => 'color_picker',
          'title'   => 'Background Color',
          'default' => '#ffbc00',
          'dependency'   => array( 'enable_title_yes', '!=', '' ),
        ),

      ),
    ),

  ),
);
return $options;
}

add_filter( 'cs_metabox_options', 'corporis_metabox_option' );



?>