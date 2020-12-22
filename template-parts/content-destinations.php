    <!-- Blog Item -->
    

     <!--The div element for the map -->


      <div class="destination-tiles">
        <div class="tile">
        <span class="dark-bg"></span>
          <h3>Milan</h3>
          <span>
          <p>Italy</p>
          <p class="date">August 11th - 14th 2020</p>
          </span>
        </div>
      </div>
      <div class="destinations-blog">
      <?php
$post_id = 53;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo $title;
echo $queried_post->post_content;
?>
      </div>


     