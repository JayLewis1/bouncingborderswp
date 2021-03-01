<?php 
/**
 * Template Name: Destinations
 */
?>

<?php
get_header();
?>

<div id="info-panel"> 
	<div id="shown-panel">
		<?php 
  			dynamic_sidebar("place-1");
		?>
		<img src="<?php echo THEME_IMG_PATH; ?>/icons/hide.svg" alt="hide"onclick="hidePanel()">
	</div>
	<div id="hidden-panel">	
	<img src="<?php echo THEME_IMG_PATH; ?>/icons/show.svg" alt="hide"onclick="showPanel()"></div>
</div>
   <div id="map">
		<iframe width="100%" height="100%" frameborder="0" style="border:0"  src="https://www.google.com/maps/d/u/0/embed?mid=1DokLJbfvXtzfXazQwtBPdcdD7iTiGod4" width="640" height="480"></iframe>
			</div>
	<div class="destinations">
	<div class="select-con">
	<select name="destinations" id="destinations-drop">
 <option value="0">Italy</option>
 <option value="1">Turkey</option>
 <option value="2">Netherlands</option>
 <option value="3">Belgium</option>
 <option value="4">Luxembourg</option>
  </select>
	</div>
	<script>
		var testVal = "Italy";
// Destinations dropdown menu to change the destinations by country
var destinationsVal = document.getElementById("destinations-drop").selectedIndex;
// Creating a name variable
var destName;
// Listen to an input change 
document.addEventListener('input', function (e) {
  // Only run on destinations select menu
  if (e.target.id !== 'destinations-drop') return;
  // The selected value
  switch (e.target.value) {
    case 0:
      destName = "Italy";
      console.log(e.target.value);
      break;
    case 1:
      destName = "Turkey";
      console.log(e.target.value);
			break;
		case 2:
      destName = "Netherlands";
      console.log(e.target.value);
		case 3:
      destName = "Belgium";
      console.log(e.target.value);
			break;
		case 4:
      destName = "Luxembourg";
      console.log(e.target.value);
			break;
  }

  var italy = document.getElementById("dest-italy");
  var turkey = document.getElementById("dest-turkey");
	var netherlands = document.getElementById("dest-netherlands");
	var belgium = document.getElementById("dest-belgium");
	var luxembourg = document.getElementById("dest-luxembourg");

  // if (e.target.value === "0") {
  //   italy.style.display = "block";
  //   turkey.style.display = "none";
	// 	netherlands.style.display = "none";
  // } else if (e.target.value === "1") {
  //   turkey.style.display = "block";
  //   italy.style.display = "none";
	// 	netherlands.style.display = "none";
  // } else if(e.target.value === "2"){
	// 	turkey.style.display = "none";
  //   italy.style.display = "none";
	// 	netherlands.style.display = "block";
	// } else if()
	
	switch(e.target.value) {
		case "0":
			italy.style.display = "block";
			turkey.style.display = "none";
			netherlands.style.display = "none";
			belgium.style.display = "none";
    	luxembourg.style.display = "none";
			break;
		case "1":
			italy.style.display = "none";
			turkey.style.display = "block";
			netherlands.style.display = "none";
			belgium.style.display = "none";
    	luxembourg.style.display = "none";
			break;
		case "2":
			italy.style.display = "none";
			turkey.style.display = "none";
			netherlands.style.display = "block";
			belgium.style.display = "none";
    	luxembourg.style.display = "none";
			break;
		case "3":
			italy.style.display = "none";
			turkey.style.display = "none";
			netherlands.style.display = "none";
			belgium.style.display = "block";
    	luxembourg.style.display = "none";
			break;
		case "4":
			italy.style.display = "none";
			turkey.style.display = "none";
			netherlands.style.display = "none";
			belgium.style.display = "none";
    	luxembourg.style.display = "block";
			break;
		case "5":
			break;
	}

}, false);
	</script>
	<div class="destinations-grid">
	<div class="destination-tiles">
		<div id="dest-italy">
		<?php
			if(isset($_POST['post_id'])) {
			echo  $id=$_POST['post_id'];
			}	
		?>
<?php
$args  = array(
	'posts_per_page'  => 5000,
	'offset'          => 0,
	'category_name'   => "Italy",
	'orderby'         => 'post_date',
	'suppress_filters' => true );

$posts = get_posts($args);
	foreach ($posts as $post) :
	?>
        <div class="tile">
					<span class="tile-bg"> <?php the_post_thumbnail(); ?></span>
					<span class="dark-bg"> </span>
						<h3>  <?php the_title(); ?></h3>
					<span>
					<?php echo $post->post_content; ?>  
					</span>
      </div>
	<?php endforeach; ?>
	</div>
	<div id="dest-turkey">
		<?php
			if(isset($_POST['post_id'])) {
			echo  $id=$_POST['post_id'];
			}	
		?>
<?php
$args  = array(
	'posts_per_page'  => 5000,
	'offset'          => 0,
	'category_name'   => "Turkey",
	'orderby'         => 'post_date',
	'suppress_filters' => true );

$posts = get_posts($args);
	foreach ($posts as $post) :
	?>
        <div class="tile">
					<span class="tile-bg"> <?php the_post_thumbnail(); ?></span>
					<span class="dark-bg"> </span>
						<h3>  <?php the_title(); ?></h3>
					<span>
					<?php echo $post->post_content; ?>  
					</span>
      </div>
	<?php endforeach; ?>
	</div>
	
	<div id="dest-netherlands">
		<?php
			if(isset($_POST['post_id'])) {
			echo  $id=$_POST['post_id'];
			}	
		?>
<?php
$args  = array(
	'posts_per_page'  => 5000,
	'offset'          => 0,
	'category_name'   => "Netherlands",
	'orderby'         => 'post_date',
	'suppress_filters' => true );

$posts = get_posts($args);
	foreach ($posts as $post) :
	?>
        <div class="tile">
					<span class="tile-bg"> <?php the_post_thumbnail(); ?></span>
					<span class="dark-bg"> </span>
						<h3>  <?php the_title(); ?></h3>
					<span>
					<?php echo $post->post_content; ?>  
					</span>
      </div>
	<?php endforeach; ?>
	</div>

	<div id="dest-belgium">
		<?php
			if(isset($_POST['post_id'])) {
			echo  $id=$_POST['post_id'];
			}	
		?>
<?php
$args  = array(
	'posts_per_page'  => 5000,
	'offset'          => 0,
	'category_name'   => "Belgium",
	'orderby'         => 'post_date',
	'suppress_filters' => true );

$posts = get_posts($args);
	foreach ($posts as $post) :
	?>
        <div class="tile">
					<span class="tile-bg"> <?php the_post_thumbnail(); ?></span>
					<span class="dark-bg"> </span>
						<h3>  <?php the_title(); ?></h3>
					<span>
					<?php echo $post->post_content; ?>  
					</span>
      </div>
	<?php endforeach; ?>
	</div>

	<div id="dest-luxembourg">
		<?php
			if(isset($_POST['post_id'])) {
			echo  $id=$_POST['post_id'];
			}	
		?>
<?php
$args  = array(
	'posts_per_page'  => 5000,
	'offset'          => 0,
	'category_name'   => "Luxembourg",
	'orderby'         => 'post_date',
	'suppress_filters' => true );

$posts = get_posts($args);
	foreach ($posts as $post) :
	?>
        <div class="tile">
					<span class="tile-bg"> <?php the_post_thumbnail(); ?></span>
					<span class="dark-bg"> </span>
						<h3>  <?php the_title(); ?></h3>
					<span>
					<?php echo $post->post_content; ?>  
					</span>
      </div>
	<?php endforeach; ?>
	</div>

	</div>

			
				<div class="destinations-blog"> 
				<div class="blog-wrapper">
					<?php
						$post_id = 53;
						 $post_id ;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						$date = $queried_post->post_date;
						?>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						<h4> <?php 	echo $title; ?> </h4>
						<p> <?php  		echo $queried_post->post_content; ?> </p>
		
						</div>	
						</div>	
      	</div>		
		  </div>
	  </div>
	<?php
	get_footer();
	?>