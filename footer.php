<div class="imgBanner"></div>
  <div class="footer">
    <div class="mailingList">
      <h4 class="mailListHeader">Join our mailing list</h4>
      <?php
        if(isset($_POST["submit"])){  
        // API to mailchimp ########################################################
        $list_id = '78dde6cf7f';
        $authToken = '508af19b2999bf12e029177e3861302c-us17';
        // The data to send to the API
        $postData = array(
          "email_address" => $_POST["email"], 
          "status" => "subscribed", 
          "merge_fields" => array(
          "FNAME"=> $_POST["name"],
          "PHONE"=> $_POST["phone"])
          );

          // Setup cURL
          $ch = curl_init('https://us17.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
          curl_setopt_array($ch, array(
              CURLOPT_POST => TRUE,
              CURLOPT_RETURNTRANSFER => TRUE,
              CURLOPT_HTTPHEADER => array(
                  'Authorization: apikey '.$authToken,
                  'Content-Type: application/json'
              ),
              CURLOPT_POSTFIELDS => json_encode($postData)
          ));

          // Send the request
          $response = curl_exec($ch);
        }
      ?>

<?php
      include get_template_directory() . "/inc/ChromePhp.php";
      ChromePhp::log('Hello console!');
      ChromePhp::log($_SERVER);
      ChromePhp::warn('something went wrong!');
?>
<?php 
  dynamic_sidebar("footer-1");
?>

    </div>
    <div class="socialsCon">
    <h3 class="connect-title">Connect with us</h3>
    <!-- <div class="underline"></div> -->
    <span class="wrapper">
      <a href="/https://www.instagram.com/livsf_/?hl=en"> 
        <img class="socialIcon blue" src="<?php echo THEME_IMG_PATH; ?>/icons/blueInsta.svg" alt="instagram">
      </a>
      <a href="/https://www.instagram.com/livsf_/?hl=en">
        <img class="socialIcon pink" src="<?php echo THEME_IMG_PATH; ?>/icons/pinkInsta.svg" alt="instagram">
      </a>
      </span>
    </div>
  </div> 
    
    <?php
      wp_footer();
    ?>

    
</body>
</html>
<?php
    function pre_r($array) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
  ?>