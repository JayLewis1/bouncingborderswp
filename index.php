<!--  This is loading the blog archive page  -->

<?php
get_header();
?>	
		<div class="blogContainer">
    <h2 class="pageHeader">Travel Blog</h2>
    <div class="blogGrid">
    <?php

$args  = array(
	'posts_per_page'  => 3,
  'offset'          => 0,
	'category_name'   => "blog",
  'orderby'         => 'post_date',
  'post_type'       => 'post',
  'post_status'     => 'publish',
  'suppress_filters' => true ); 

$posts = get_posts($args);
	foreach ($posts as $post) :
	?>
	
	<div class="blogItem">
        <img class="dashImg dashImg1" src="<?php the_post_thumbnail_url(); ?>" alt="item1">
        <h2 class="recentHeading">
       <?php the_title(); ?>
        </h2>
        <span class="dashBlogDate">
        <?php the_date(); ?> 
        </span>
        <p class="recentParagraph">
        <?php the_excerpt(); ?>
        </p>
        <a class="blogLink" href="<?php the_permalink(); ?>">
          <img class="blogLook" src="<?php echo THEME_IMG_PATH; ?>/icons/lookIcon.svg" alt="Look at full post"
            onmouseover="fullPostText(this)" onmouseout="hideFullPostText(this)"> </img>
          <div class="seeFullBlog">
            <h3 class="seeFullText"> See Full Post here </h3>
          </div>
        </a>
      </div>
	<?php endforeach; ?>
     </div>
	  </div>
    
  <?php
      // WHEN HAVE MORE POSTS THEN ADD THIS AND STYLE IT
      // Look at codex for the arguements
      // the_posts_pagination();
  ?>
  
  	<?php
	get_footer();
	?>