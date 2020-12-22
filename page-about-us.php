<?php 
/**
 * Template Name: About
 */
?>

<?php
get_header();
?>	
				<div class="about-container">
					<div class="about-header"> 
						<h3>About Us</h3>
						<span>
						<img src="" alt="">
						</span>
					</div>
					<div class="about-section">
						<div class="left">
							<img class="half-watermark" src="<?php echo THEME_IMG_PATH; ?>/watermarks/blue-side.svg" alt="Blue side of logo" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend, risus ac ullamcorper scelerisque, libero ipsum aliquam turpis, ac dapibus velit nisl eu magna. Duis sit amet magna ac risus gravida vehicula eget vel nibh. Morbi diam nisl, placerat et consequat eu, volutpat at velit. Curabitur lacus felis, tempus eget mauris vel, eleifend tempus nibh. Nulla in fringilla diam, sed luctus ligula. Duis maximus nisl risus, id elementum mi convallis eget. Aliquam ac blandit urna, in eleifend ex. Nulla facilisi. Aliquam placerat laoreet velit, nec molestie eros eleifend vel. </p>
						</div>
						<div class="right">
						<img class="half-watermark" src="<?php echo THEME_IMG_PATH; ?>/watermarks/pink-side.svg" alt="Pink side of logo" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend, risus ac ullamcorper scelerisque, libero ipsum aliquam turpis, ac dapibus velit nisl eu magna. Duis sit amet magna ac risus gravida vehicula eget vel nibh. Morbi diam nisl, placerat et consequat eu, volutpat at velit. Curabitur lacus felis, tempus eget mauris vel, eleifend tempus nibh. Nulla in fringilla diam, sed luctus ligula. Duis maximus nisl risus, id elementum mi convallis eget. Aliquam ac blandit urna, in eleifend ex. Nulla facilisi. Aliquam placerat laoreet velit, nec molestie eros eleifend vel. </p>
						</div>
					</div>
					<img class="logo-watermark" src="<?php echo THEME_IMG_PATH; ?>/watermarks/logo-mark.svg" alt="Logo watermark">
					<div class="about-us">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend, risus ac ullamcorper scelerisque, libero ipsum aliquam turpis, ac dapibus velit nisl eu magna. Duis sit amet magna ac risus gravida vehicula eget vel nibh. Morbi diam nisl, placerat et consequat eu, volutpat at velit. Curabitur lacus felis, tempus eget mauris vel, eleifend tempus nibh. Nulla in fringilla diam, sed luctus ligula. Duis maximus nisl risus, id elementum mi convallis eget. Aliquam ac blandit urna, in eleifend ex. Nulla facilisi. Aliquam placerat laoreet velit, nec molestie eros eleifend vel. </p>
					</div>
					<h3 class="top-d-title">Top 10 destinations we want to visit </h3>
					<div class="top-destinations">
						<div class="list">
							<ul>
								<span>
									<li>Thailand</li>
									<li>Vietnam</li>
									<li>Laos</li>
									<li>Cambodia</li>
									<li>Indonesia</li>
								</span>
								<span>
									<li>Malaysia (Inc Borneo)</li>
									<li>Morocco</li>
									<li>Japan</li>
									<li>Australia</li>
									<li>South America</li>	
								</span>

							</ul>
						</div>
						<div class="map"></div>
					</div>
				
		</div>
			<div class="subscribe-con">
						<h3>Subscribe to us</h3>
						<?php 
  dynamic_sidebar("footer-1");
?>
					</div>
					<div class="about-navigation">
							<h3>Site navigation</h3>
							<div class="nav-tiles">
								<ul>
									<li>
										<a href="/"class="home-tile"> 
										<p>Home</p>
										</a>
									</li>
									<li>
										<a href="http://localhost:8888/bouncingborders/destinations/"class="destinations-tile"> 
										<p>Destinations</p>
										</a>
									</li>
									<li>
										<a href="http://localhost:8888/bouncingborders/travel-blog/"class="blog-tile"> 
										<p>Travel Blog</p>
										</a>
									</li>
									<li>
										<a href="http://localhost:8888/bouncingborders/photograhy/"class="photo-tile"> 
										<p>Photography</p>
										</a>
									</li>
								</ul>
							</div>
					</div>
	<?php
	get_footer();
	?>