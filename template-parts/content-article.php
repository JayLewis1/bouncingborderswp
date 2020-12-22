<div class="blogPostContainer">
    <h2 class="blogHeading"><?php the_title(); ?></h2>
    <h3 class="blogSubHeading"></h3>
      <span class="blogDate">
          <?php 
          //Shows the date the post was created
            the_date();
          ?>
      </span>

      <?php 
        // Shows the tags and styles them using the classes
        the_tags('<span class=tag"><i class="fa fa-tag"></i>','</span>
                <span class="tag"><i class="fa fa-tag"></i>','</span>');
      ?>
        <span class="comment">
          <a href="#comments">
            <i class='fa fa-comment'></i> 
              <?php
                // Shows number of comments
                 comments_number(); 
                ?>
              </a>
        </span>
        <img class="blogMainImg" src="<?php the_post_thumbnail_url(); ?>" alt="Post Thumbnail"> </img>

    <div class="blogMainText">
      <?php   
          echo the_content();   
        ?> 
    </div>

  <?php 
  // Allows comments on the post
    comments_template();
  ?>
</div>
