<div class="comments-wrapper">
<div class="comments" id="comments">
  <div class="comments-header">
    <h2 class="comment-reply-title">
    <?php 
    // The title of comments - if no comments tells you to leave one if there are comments then it displays the comments title
      if( ! have_comments()) {
          echo "Leave A Comment";
      } else {
          echo get_comments_number(). "Comments";
      }
    ?>
   </h2><!-- .comments-title -->
  </div><!-- .comments-header -->
  <hr class="" aria-hidden="true">
  <div class="comments-inner">
  <?php 
  // Styling the comments - && Will have to update this with a custom walker to get exactly what you want
    wp_list_comments(
      array(
        "avatar_size" => 80,
        "style" => "div",
      )
    );
  ?>
  </div><!-- .comments-inner -->
  <?php
// If the post allows comments then display a comment form - after posting a comment admin has to except it first unless that setting is turned off
  if(comments_open()) {
    comment_form(
      array(
        'class_form' => '',
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">', 'title_reply_after' => '</h2>'
      )
    );
  }
?>
</div><!-- comments -->


</div>