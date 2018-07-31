<?php



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function corporis_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'corporis' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'corporis' ),
		'before_widget' => '<div class="widget u-MarginBottom100 u-xs-MarginBottom30">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-uppercase u-Weight700">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'corporis_widgets_init' );




function corporis_widgets(){


	register_widget( 'corporis_latest_post' );
	register_widget( 'corporis_archives_section' );
	register_widget('corporis_post_categories');
	register_widget('corporis_post_comments');
	register_widget('corporis_footer_text');
	register_widget('corporis_footer_follow_us');
	register_widget('corporis_footer_recent_post');
	register_widget('corporis_footer_subscribe');
	register_widget('corporis_footer_social_link');

}
add_action( 'widgets_init', 'corporis_widgets' );



// corporis_latest_post start
class corporis_latest_post extends WP_Widget {
	public function __construct(){
		parent::__construct('sidebar-menu', 'Latst Post Widget');
	}

	public function widget($one,$two){
		?>

		<?php echo $one['before_widget']?>
            <?php echo $one['before_title']?> <?php echo $two['title']?> <?php echo $one['after_title']?>
            <hr>

            <?php
            	$query = new WP_Query(array(
            		'post_type' => 'post',
            		'posts_per_page' => $two['page_count'],
            	));
            ?>

            <?php while($query->have_posts()):$query->the_post()?>
            <div class="media u-MarginBottom30">
                <div class="media-left">
                    <a href="#">
                    	<img alt="" class="media-object"  src="<?php the_post_thumbnail_url(); ?>">
                    </a>
                </div>
                <div class="media-body u-PaddingLeft10">
                    <h5 class="media-heading u-Weight700 u-MarginTop20"><a href="<?php the_permalink()?>"><?php the_title();?></a></h5>
                    <?php the_date('l, F j, Y');?>
                </div>
            </div>


        	<?php endwhile;?>

        <?php echo $one['after_widget']?>


		<?php

	}

	public function form($instant){
		?>
			<p>
				<label for="<?php echo $this->get_field_id('title')?>">Title:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $instant['title']?>">				
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('page_count')?>">Page Count:</label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id('page_count')?>" name="<?php echo $this->get_field_name('page_count')?>"  value="<?php echo $instant['page_count']?>" >
			</p>
		<?php
	}
}
// corporis_latest_post end


// corporis_archives_section start
class corporis_archives_section extends WP_Widget {
	public function __construct(){
		parent::__construct('archives-section', 'Archives Section Widget');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['archive_title']?> <?php echo $widget['after_title']?>
                <hr>

                <ul class="light-gray-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">
					
					<?php
						$query = new WP_Query (array(
							'post_type' => 'post',
							'posts_per_page'=> $title['archive_count'],

						));


					?>
                	<?php while($query->have_posts()):$query->the_post();?>

                    <li> <a href="<?php the_permalink();?>"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i><?php the_time('M Y');?></a></li>

                	<?php endwhile;?>

                </ul>
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant2){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('archive_title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('archive_title')?>" name="<?php echo $this->get_field_name('archive_title')?>" value="<?php echo $instant2['archive_title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('archive_count')?>">Page Count:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('archive_count')?>" name="<?php echo $this->get_field_name('archive_count')?>" value="<?php echo $instant2['archive_count']?>">
		</p>

		<?php
	}
}
//corporis_archives_section  end



// corporis_post_categories start
class corporis_post_categories extends WP_Widget {
	public function __construct(){
		parent::__construct('archives-categories-section', 'Archives Section Categories');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['archive_categories_title']?> <?php echo $widget['after_title']?>
                <hr>
                    <ul class="light-gray-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">

                    	<?php

						$query = new WP_Query (array(
							'post_type' => 'post',
							'posts_per_page'=> $title['archive_categories_count'],

						));

						?>

                    	<?php while($query->have_posts()):$query->the_post();?>
                        <li> <a href="<?php the_permalink();?>"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i><?php the_category(' ') ;?></a></li>
                        <?php endwhile;?>
                    </ul>
               
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant3){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('archive_categories_title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('archive_categories_title')?>" name="<?php echo $this->get_field_name('archive_categories_title')?>" value="<?php echo $instant3['archive_categories_title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('archive_categories_count')?>">Page Count:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('archive_categories_count')?>" name="<?php echo $this->get_field_name('archive_categories_count')?>" value="<?php echo $instant3['archive_categories_count']?>">
		</p>

		<?php
	}
}
//corporis_post_categories  end


// corporis_post_comments start
class corporis_post_comments extends WP_Widget {
	public function __construct(){
		parent::__construct('archives-comment-section', 'Archives Section Comments');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['archive_comment_title']?> <?php echo $widget['after_title']?>
                <hr>
                    <ul class="light-gray-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">

                    	<?php
                    	
						$query = new WP_Query (array(
							'post_type' => 'post',
							'posts_per_page'=> $title['archive_comment_count'],

						));

						?>

                    	<?php while($query->have_posts()):$query->the_post();?>

                    		<li>
	                            <i class="fa fa-comments-o u-MarginRight10 text-muted" aria-hidden="true"></i>
	                            <a href="<?php the_permalink();?>" class="default-color"><?php the_author();?></a>
	                            <span class="text-muted">on</span>
	                            <a href="<?php the_permalink();?>"><?php the_title() ;?></a>
	                        </li>
                        <?php endwhile;?>
                    </ul>
               
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant3){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('archive_comment_title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('archive_comment_title')?>" name="<?php echo $this->get_field_name('archive_comment_title')?>" value="<?php echo $instant3['archive_comment_title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('archive_comment_count')?>">Page Count:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('archive_comment_count')?>" name="<?php echo $this->get_field_name('archive_comment_count')?>" value="<?php echo $instant3['archive_comment_count']?>">
		</p>

		<?php
	}
}
//corporis_post_comments  end


// corporis_footer_text start
class corporis_footer_text extends WP_Widget {
	public function __construct(){
		parent::__construct('footer-text-1st-column', 'Footer Text');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['title']?> <?php echo $widget['after_title']?>
                    <p><?php echo $title['info']?></p>                    
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant3){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $instant3['title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('info')?>">Info:</label>			
			<textarea type="text" class="widefat" id="<?php echo $this->get_field_id('info')?>" name="<?php echo $this->get_field_name('info')?>" value="<?php echo $instant3['info']?>" cols="30" rows="10" ></textarea>
		</p>

		<?php
	}
}
//corporis_footer_text  end





// corporis_footer_follow_us start
class corporis_footer_follow_us extends WP_Widget {
	public function __construct(){
		parent::__construct('footer-text-2nd-column', 'Footer Follow Us');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['title']?> <?php echo $widget['after_title']?>
                
                <ul class="light-gray-link border-bottom-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">
					
					<?php
						$query = new WP_Query (array(
							'post_type' => 'page',
							'posts_per_page'=> $title['page_count'],

						));


					?>
                	<?php while($query->have_posts()):$query->the_post();?>

                    <li> <a href="<?php the_permalink();?>"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i><?php the_title();?></a></li>

                	<?php endwhile;?>

                </ul>
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant3){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $instant3['title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('page_count')?>">Info:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('page_count')?>" name="<?php echo $this->get_field_name('page_count')?>" value="<?php echo $instant3['page_count']?>" >
		</p>

		<?php
	}
}
//corporis_footer_follow_us end


// corporis_footer_follow_us start
class corporis_footer_recent_post extends WP_Widget {
	public function __construct(){
		parent::__construct('footer-text-3rd-column', 'Footer Recent Post');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['title']?> <?php echo $widget['after_title']?>
                
                <ul class="light-gray-link border-bottom-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">
					
					<?php
						$query = new WP_Query (array(
							'post_type' => 'post',
							'posts_per_page'=> $title['post_count'],

						));


					?>
                	<?php while($query->have_posts()):$query->the_post();?>
                		
                    <li class="u-MarginBottom15">
                        <a class="" href="<?php the_permalink();?>">
                            <?php the_title(); ?>
                        </a>
                        <p class=""><?php the_time(' d M Y');?></p>
                    </li>

                	<?php endwhile;?>

                </ul>
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant3){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $instant3['title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('post_count')?>">Post Count:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('post_count')?>" name="<?php echo $this->get_field_name('post_count')?>" value="<?php echo $instant3['post_count']?>" >
		</p>

		<?php
	}
}
//corporis_footer_follow_us end




// corporis_footer_subscribe start
class corporis_footer_subscribe extends WP_Widget {
	public function __construct(){
		parent::__construct('footer-text-4th-column', 'Footer Subscribe');
	}

	public function widget($widget, $title){
		?>

			<?php echo $widget['before_widget']?>
                <?php echo $widget['before_title']?> <?php echo $title['title']?> <?php echo $widget['after_title']?>
                
                <form action="">
					<input type="email" class="form-control form-new" placeholder="<?php echo $title['email_placeholder'];?>">
				</form>
            <?php echo $widget['after_widget']?>

		<?php
	}

	public function form($instant3){
		?>

		<p>
			<label for="<?php echo $this->get_field_id('title')?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo $instant3['title']?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('email_placeholder')?>">Post Count:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('email_placeholder')?>" name="<?php echo $this->get_field_name('email_placeholder')?>" value="<?php echo $instant3['email_placeholder']?>" >
		</p>

		<?php
	}
}
//corporis_footer_subscribe end





// corporis_footer_subscribe start
class corporis_footer_social_link extends WP_Widget {
	public function __construct(){
		parent::__construct('footer-text-4th-2nd-column', 'Footer Social Link');
	}

	public function widget($widget, $title){
		?>

			<!-- Widget Front-end Style Start-->
    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop50"><?php echo $title['title']?></h5>
    <div class="social-links sl-default gray-border-links border-link circle-link colored-hover">

    
    <a href="<?php echo $title['facebook_url']; ?>" target="_blank" class="facebook">
        <i class="fa fa-facebook"></i>
    </a>

    
    <a href="<?php echo $title['twitter_url']; ?>" target="_blank" class="twitter">
        <i class="fa fa-twitter"></i>
    </a>

    <a href="<?php echo $title['google_plus_url']; ?>" target="_blank" class="g-plus">
        <i class="fa fa-google-plus"></i>
    </a>

    <a href="<?php echo $title['youtube_url']; ?>" target="_blank" class="youtube">
        <i class="fa fa-youtube"></i>
    </a>

    <a href="<?php echo $title['dribbble_url']; ?>" target="_blank" class="dribbble">
        <i class="fa fa-dribbble"></i>
    </a>
	</div>	

		<?php
	}

	public function form($instant3){
		?>

		 <p>
        <label for="<?php echo $this -> get_field_id( 'title' ); ?>"><?php _e( 'Socials Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this -> get_field_id( 'title' ); ?>" name="<?php echo $this -> get_field_name( 'title' ); ?>" type="text" value="<?php echo $instant['title' ]; ?>" />
	    </p>
	    <p>
	        <label for="<?php echo $this -> get_field_id( 'facebook_url' ); ?>"><?php _e( 'Facebook URL:' ); ?></label>
	        <input class="widefat" id="<?php echo $this -> get_field_id( 'facebook_url' ); ?>" name="<?php echo $this -> get_field_name( 'facebook_url' ); ?>" type="text" value="<?php echo $instant['facebook_url' ]; ?>" />
	    </p>
	    <p>
	        <label for="<?php echo $this -> get_field_id( 'twitter_url' ); ?>"><?php _e( 'Twitter URL:' ); ?></label>
	        <input class="widefat" id="<?php echo $this -> get_field_id( 'twitter_url' ); ?>" name="<?php echo $this -> get_field_name( 'twitter_url' ); ?>" type="text" value="<?php echo $instant['twitter_url' ]; ?>" />
	    </p>
	    <p>
	        <label for="<?php echo $this -> get_field_id( 'google_plus_url' ); ?>"><?php _e( 'Google Plus URL:' ); ?></label>
	        <input class="widefat" id="<?php echo $this -> get_field_id( 'google_plus_url' ); ?>" name="<?php echo $this -> get_field_name( 'google_plus_url' ); ?>" type="text" value="<?php echo $instant['google_plus_url' ]; ?>" />
	    </p>
	    <p>
	        <label for="<?php echo $this -> get_field_id( 'youtube_url' ); ?>"><?php _e( 'Youtube URL:' ); ?></label>
	        <input class="widefat" id="<?php echo $this -> get_field_id( 'youtube_url' ); ?>" name="<?php echo $this -> get_field_name( 'youtube_url' ); ?>" type="text" value="<?php echo $instant['youtube_url' ]; ?>" />
	    </p>
	    <p>
	        <label for="<?php echo $this -> get_field_id( 'dribbble_url' ); ?>"><?php _e( 'Dribbble URL:' ); ?></label>
	        <input class="widefat" id="<?php echo $this -> get_field_id( 'dribbble_url' ); ?>" name="<?php echo $this -> get_field_name( 'dribbble_url' ); ?>" type="text" value="<?php echo $instant['dribbble_url' ]; ?>" />
	    </p>

		<?php
	}
}
//corporis_footer_subscribe end




?>