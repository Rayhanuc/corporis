<?php
function corporis_blog_metabox( $options ) {

  $options        = array();
  	// Start Gallery Area
  $options[]      = array(
    'id'            => '_gallery_metabox',
    'title'         => esc_html__('Blog Gallery Section', 'commit'),
    'post_type'     => 'post',
    'context'       => 'normal',
    'priority'      => 'default',
    'sections'      => array(       //Start Section Array

      // Gallery section
      array(
        'name'      => 'gallery_area',
        'title'     => esc_html__('Gallery - Area', 'commit'),
        'icon'      => 'fa fa-wifi',
        'fields'    => array(		//Start fields Array

            // blog gallery Selector
          array(
            'id'       => 'blog_gallery_option',
            'type'     => 'radio',
            'title'    => esc_html__('Select Blog Gallery Option', 'commit'),
            'options'  => array(
              'on'    => esc_html__('Enable', 'commit'),
              'off'   => esc_html__('Disable', 'commit'),
            ),
            'default'  => 'off',
          ),

            // Blog Gallery
          array(
      			'id'          => 'blog_gallery',
      			'type'        => 'gallery',
      			'title'       => 'Blog Page Gallery',
      			'add_title'   => 'Add Images',
      			'edit_title'  => 'Edit Images',
      			'clear_title' => 'Remove Images',
            'dependency'   => array( 'blog_gallery_option_on', '!=', '' ),
            ),

        ), //End fields Array
      ), //End Gallery Section
    ), //End Sections Array 
  ); //End Options[] Array

  	// Start Video Area
  $options[]      = array(
    'id'            => '_video_metabox',
    'title'         => esc_html__('Select Blog Video Section', 'commit'),
    'post_type'     => 'post',
    'context'       => 'normal',
    'priority'      => 'default',
    'sections'      => array(       //Start Section Array

      // Gallery section
      array(
        'name'      => 'video_area',
        'title'     => esc_html__('Video - Area', 'commit'),
        'icon'      => 'fa fa-wifi',
        'fields'    => array(		//Start fields Array

            // blog video Selector
          array(
            'id'       => 'blog_video_option',
            'type'     => 'radio',
            'title'    => esc_html__('Select Blog Video Option', 'commit'),
            'options'  => array(
              'on'    => esc_html__('Enable', 'commit'),
              'off'   => esc_html__('Disable', 'commit'),
            ),
            'default'  => 'off',
          ),

            // Blog Gallery
          array(
      			'id'          => 'blog_video',
      			'type'        => 'upload',
      			'title'       => 'Upload Video',
      			'settings'    => array(
      				'upload_type'  => 'video',
      			    'button_title' => 'Video',
      			    'frame_title'  => 'Select a video',
      			    'insert_title' => 'Use this video',
			       ),
            'dependency'   => array( 'blog_video_option_on', '!=', '' ),
			     )
        ), //End fields Array
      ), //End Gallery Section
    ), //End Sections Array 
  ); //End Options[] Array

  	// Start Audio Area
  $options[]      = array(
    'id'            => '_audio_metabox',
    'title'         => esc_html__('Blog Audio Section', 'commit'),
    'post_type'     => 'post',
    'context'       => 'normal',
    'priority'      => 'default',
    'sections'      => array(       //Start Section Array

      // Gallery section
      array(
        'name'      => 'audio_area',
        'title'     => esc_html__('Sound Cloud Audio - Area', 'commit'),
        'icon'      => 'fa fa-wifi',
        'fields'    => array(		//Start fields Array

            // blog audio Selector
          array(
            'id'       => 'blog_audio_option',
            'type'     => 'radio',
            'title'    => esc_html__('Select Blog Audio Option', 'commit'),
            'options'  => array(
              'on'    => esc_html__('Enable', 'commit'),
              'off'   => esc_html__('Disable', 'commit'),
            ),
            'default'  => 'off',
          ),

            // Blog Gallery
          array(
      			'id'          => 'blog_audio',
      			'type'        => 'upload',
      			'title'       => 'Upload Audio',
      			'settings'    => array(
      				'upload_type'  => 'audio',
      			    'button_title' => 'Audio',
      			    'frame_title'  => 'Select a Audio',
      			    'insert_title' => 'Use this Audio',
      			    ),
            'dependency'   => array( 'blog_audio_option_on', '!=', '' ),
			       )
        ), //End fields Array
      ), //End Gallery Section
    ), //End Sections Array 
  ); //End Options[] Array

  return $options;
}

add_filter( 'cs_metabox_options', 'corporis_blog_metabox' );
?>