    <!-- Start Cotent Gallery Area -->
<?php     
    $b_gall    = get_post_meta( get_the_ID(), '_gallery_metabox', true );
    $blog_gallery_option = isset($b_gall['blog_gallery_option']) ? $b_gall['blog_gallery_option'] : array();
    $gallery   = isset($b_gall['blog_gallery']) ? $b_gall['blog_gallery'] : array();
?>
<?php if($blog_gallery_option === 'on'): ?>
<div class="blog-post">
    <div class="b-title">
        <span class="default-color">
            <a  href="<?php the_permalink()?>"><?php the_tags('');?></a>
        </span>
        <h1 class="u-MarginTop10 u-MarginBottom10">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <p class="u-MarginBottom30">By <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>   |   <a href="#"><?php the_time('d M Y'); ?></a></p>
    </div>
    <div class="b-thumb u-MarginBottom30">
        <div class="js-OwlCarousel owl-carousel owl-theme OwlNav OwlNav--triangle OwlNav--triangle--white OwlNav--edge OwlNav--inside OwlNav--triangle--lg">
        <?php 

        if ( ! empty( $gallery ) ) {
           $ids = explode( ',', $gallery );
           foreach ( $ids as $id ) {
              $attachment = wp_get_attachment_image_src( $id, 'full' );
              ?>
                <div class="item">
                    <img class="img-responsive" src="<?php echo esc_url($attachment[0]); ?>" alt="...">
                </div>
        <?php }} ?>
        
    </div>
    </div>
    <div class="b-txt">
        <p class="u-LineHeight2"><?php echo wp_trim_words( get_the_content(), 50, false ); ?></p>
        <p class="u-MarginTop35 u-MarginBottom0">
           <span class="default-color">
                <a class="btn-go default-color" href="<?php the_permalink();?>" role="button">Continue Reading <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </span>
        </p>
    </div>
</div>
<!--blog post end-->
<div class="u-MarginTop100 u-xs-MarginTop30 u-MarginBottom100 u-xs-MarginBottom30">
    <hr/>
</div>
<?php endif; ?>