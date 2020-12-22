<?php
get_header();
?>	
				<div class="photo-container">
			   
				<?php
				if( have_posts() ) {
					while( have_posts() ) {
						the_post();
            
            // Looks for content-article
            get_template_part("template-parts/content", "photography");
					}
				}
		?>


	  </div>
	<?php
	get_footer();
	?>