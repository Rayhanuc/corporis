<?php 
	$b_audio = get_post_meta( get_the_ID(), '_audio_metabox', true );
	$blog_audio_option = isset($b_audio['blog_audio_option']) ? $b_audio['blog_audio_option'] : array();
	$audio = isset($b_audio['blog_audio']) ? $b_audio['blog_audio'] : array()

?>

<div class="blog-post">
    <div class="b-title">
        <span class="default-color">
            <a  href="<?php the_permalink()?>"><?php the_tags('');?></a>
        </span>
        <h1 class="u-MarginTop10 u-MarginBottom10">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h1>
        <p class="u-MarginBottom30">By <a href="<?php the_author_link();?>"><?php the_author();?></a>   |   <a href="#"><?php the_time('d M Y');?></a></p>
    </div>
    <div class="b-thumb u-MarginBottom50">
        <p class="audio-fit">
            <iframe src="<?php echo esc_url($audio);?>&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true"></iframe>
        </p>
    </div>
</div>

<div class=" u-MarginTop150 u-MarginBottom100 u-FlexCenter">
	<a href="#" class="btn btn-sm btn-creative btn-creative--prev text-uppercase"><span class="arrow arrow-left"></span>Previous</a>
	<span class="u-PaddingRight50 u-PaddingLeft50 u-Weight800">01/12</span>
	<a href="#" class="btn btn-sm btn-creative btn-creative--next text-uppercase">Next<span class="arrow arrow-right"></span></a>
</div>