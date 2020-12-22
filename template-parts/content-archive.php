
    <!-- Blog Item -->
  
      <div class="blogItem">
        <img class="dashImg dashImg1" src="<?php the_post_thumbnail_url(); ?>" alt="Post Thumbnail">
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

      

     
     