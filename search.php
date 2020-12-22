<?php
get_header();
?>	
		<article class="content px-3 py-5 p-md-5">
		<?php
				if( have_posts() ) {
					while( have_posts() ) {
            the_post();

            ?>
        <div class="blogContainer">
         <div class="blogGrid" id="search-grid">
  
            <?php
            // Looks for content-article
            get_template_part("template-parts/content", "archive");
            ?>
          </div>
          </div>
            <?php
					}
				} else {	?>
            <div class="no-results"> 
              <h3>No results found :(</h3>
              <p>Search again or take a look at our blog page</p>
          <div class="no-results-search-con">
            <!-- <img class="searchImg" src="<?php echo THEME_IMG_PATH; ?>/icons/searchBlack.svg" alt="Search" onclick="showDarkSearchBar()"></img> -->
            <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
        
        <input type="hidden" name="cat" id="cat" value="3" />
          <input type="text" class="searchDarkBar" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" />
          <input class="submit" type="submit" value=""/>
      
      </form>
    </div>
            </div>
<?php   }
        ?>
	
	  </article>
	<?php
	get_footer();
	?>

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

<?php endforeach; ?>