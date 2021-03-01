<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--   
  <link
    href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
    rel="stylesheet"> -->
  <?php
    wp_head();
  ?>
</head>

<body>

<header>
    <a class="logoLink" href="/">
      <img class="logo-head" src="<?php echo THEME_IMG_PATH; ?>/logo/Logo.svg" alt="Bouncing Borders">
    </a>
    <nav class="navbar">
      <?php 
      wp_nav_menu(
        array(
          "menu" => "primary",
          "container" => "",
          "theme_location" => "primary",
          "items_wrap" => '<ul>%3$s</ul>'
        )
      )
      ?>
    </nav>
    <div class="burgerMenu">
      <button class="hamburger hamburger--collapse burgerMenu" type="button" aria-label="Menu">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
    <nav class="burgerDropdown">
    <?php 
    wp_nav_menu(
      array(
        "menu" => "primary",
        "container" => "",
        "theme_location" => "primary",
        "items_wrap" => '<ul>%3$s</ul>'
      )
    )
    ?>
    </nav>
    <div class="searchCon">
      <img class="searchImg" src="<?php echo THEME_IMG_PATH; ?>/icons/search.svg" alt="Search" onclick="showSearchBar()"></img>
      <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
        <div>
          <input type="hidden" name="cat" id="cat" value="3" />
          <input type="text" class="searchBar" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" />
        </div>
      </form>
    </div>
    <img id="homeDown" src="<?php echo THEME_IMG_PATH; ?>/icons/explore.svg" alt="Scroll Down" onclick="scrollDown()">
  </header>

<div id="photoSlideShow"></div>
  <div id="initialContainer">

    <div id="latestPost">

    <?php 

$args  = array(
  'posts_per_page'  => 1,
  'offset'          => 0,
	'category_name'   => "blog",
  'orderby'         => 'post_date',
  'post_type'       => 'post',
  'post_status'     => 'publish',
  'suppress_filters' => true ); 
$posts = get_posts($args);
  foreach ($posts as $post) :
  ?>
      <h3 id="latestPostHeading">Latest Blog Post</h3>
      <div id="leftLP">
        <img id="lpPhoto" src="<?php the_post_thumbnail_url(); ?>" alt="Vietnam Fields"></img>
      </div>
      <div id="rightLP">
        <a id="lpHeading" href="<?php the_permalink(); ?>"> 
          <h2><?php the_title(); ?></h2>
        </a>
        <!-- <h3 id="lpSubHeading">Hanoi</h3> -->
        <p id="lpParagraph"><?php 
// Display the Post Excerpt
the_excerpt(__('(more…)')); ?></p>

        <a id="fullPostLink" href="<?php the_permalink(); ?>">
          <img id="lpLook" src="<?php echo THEME_IMG_PATH; ?>/icons/lookIcon.svg" onmouseover="seeFullPost()" onmouseout="hideFullPost()"
            alt="See full post here">
          </img>
          <div id="seeFullCon" onmouseover="seeFullPost()" onmouseout="hideFullPost()">
            <h3 id="seeFull"> See Full Post here </h3>
          </div>
        </a>
      </div>
  <?php endforeach; ?>
    </div>

    <div id="homeImgGrid">
      <img class="grid-item item1" src="<?php echo THEME_IMG_PATH; ?>/homeImgGrid/grid-item-1@2x.jpg" alt="item1" />
      <img class="grid-item item2" src="<?php echo THEME_IMG_PATH; ?>/homeImgGrid/grid-item-2@2x.jpg" alt="item2" />
      <img class="grid-item item3" src="<?php echo THEME_IMG_PATH; ?>/homeImgGrid/grid-item-3@2x.jpg" alt="item3" />
      <img class="grid-item item4" src="<?php echo THEME_IMG_PATH; ?>/blogImages/milan.jpeg" alt="item4" />
      <img class="grid-item item5" src="<?php echo THEME_IMG_PATH; ?>/homeImgGrid/grid-item-5@2x.jpg" alt="item5" />
      <img class="grid-item item6" src="<?php echo THEME_IMG_PATH; ?>/homeImgGrid/grid-item-6@2x.jpg" alt="item6" />
    </div>

    <div class="recentBlogGrid">
      <h3 class="recentBlogHeader">Recent Blog Post</h3>

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
     <div class="recentItem">
        <img class="rImage" src="<?php  the_post_thumbnail_url(); ?>" alt="item1">
       <h2 class="recentHeading"><?php the_title(); ?></h2>
        <!-- <h3 class="recentSubHeading">Hanoi</h3> -->
        <p class="recentParagraph"> <?php the_excerpt(); ?></p>
        <a class="recentLink" href="<?php the_permalink(); ?>" aria-label="See full post here">
          <img class="rbLook" src="<?php echo THEME_IMG_PATH; ?>/icons/lookIcon.svg" alt="See full post here">
        </a>
      </div>
  <?php endforeach; ?>
    </div>

    <div class="scroll-con" id="scroll-top" onclick="scrollToTop()">
          <img class="scroll-up" src="<?php echo THEME_IMG_PATH; ?>/icons/scroll-up.svg" alt="scroll up">
    </div>
  </div>

<?php
get_footer();
?>