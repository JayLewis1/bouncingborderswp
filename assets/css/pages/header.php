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

<header class="blogHeader">
    <a class="logoLink" href="/">
    
      <!-- <h1 class="logo">Bouncing Borders</h1> -->
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
    <div class="darkSearchCon">
      <img class="searchImg" src="<?php echo THEME_IMG_PATH; ?>/icons/searchBlack.svg" alt="Search" onclick="showDarkSearchBar()"></img>
      <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
        <div>
        <input type="hidden" name="cat" id="cat" value="3" />
          <input type="text" class="searchDarkBar" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" />
          <!-- <input class="search-submit" type="submit" value=""> -->
        </div>
      </form>
    </div>
  </header>