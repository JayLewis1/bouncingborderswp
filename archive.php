<?php
get_header();
?>	
				<div class="blogContainer">
				<div class="blogGrid">

		<?php
				if( have_posts() ) {
					while( have_posts() ) {
						the_post();
            
            // Looks for content-article
            get_template_part("template-parts/content", "archive");
					}
				}
		?>
			  </div>
	  </div>
	<?php
	get_footer();
	?>