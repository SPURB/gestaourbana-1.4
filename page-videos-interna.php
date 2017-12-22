<?php 
/*
Template Name: Vídeos interno
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="news-inner">
  <div class="wrapper">
    <div class="left">
      <div class="inner">
        <div class="text">
            <br/>
          <h3><?php echo the_title(); ?></h3>
          <div class="inner-text">
            <?php
              $content = get_the_content();
              $content = apply_filters('the_content', $content);
              $content = str_replace(']]>', ']]&gt;', $content);
              $content = str_replace('<p> </p>', '', $content);
              $content = explode('<p>',$content);
             ?>
            <?php for ($x = 0; $x < count($content); $x++) : ?>
              <?php if ($x == get_field('read_more_paragraph') && get_field('show_read_more')): ?>
                <div class="also-read">
                  <?php if (function_exists('the_related')) { the_related(); }; ?>
                </div>
              <?php endif; ?>
              
              <p><?php echo str_replace('</p>', '',$content[$x]); ?></p>
              
            <?php endfor; ?>
              
            <div class="clear"></div>
          </div>
        </div>

        <?php if (get_the_tags() != '') :  ?>
        <div class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?> </div>
        <?php endif; ?>

        <!--Comentários-->
        <?php 
        if ($post->comment_status == 'open')
        {
           comments_template( '', true );
        }
        ?>
        
    <div class="wrapper clear">
        <a href="<?php echo get_bloginfo( 'url' ); ?>/videos">
            <div id="see-all-news">
                <h3 class="section-title-see-all">+ Vídeos</h3>
            </div>
        </a>
    </div>


      </div>      
    </div>
    
    <?php include('default-sidebar.php'); ?>
    <div class="clear"></div>
  </div>
</div>
<?php endwhile; ?>

<script type="text/javascript">
function getVideoId(){
var youtube_player = document.getElementById('player');
var youtube_player_id = youtube_player.getAttribute('youtube-video-id');
return youtube_player_id;
}
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '540',
    width: '960',
    videoId: getVideoId(),
    playerVars: {
      rel:0,
      modestbranding:1,
      showinfo:0,
      iv_load_policy:3,
    }
  });
}
</script>

<?php get_footer(); ?>