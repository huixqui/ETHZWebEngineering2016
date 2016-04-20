<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script>

			var icon_max_size = 3;
			var icon_min_size = 1;
			var map = [1,1,1,1,1];
			updateMenu(0);

			function updateMenu(i){
				map[i] = map[i]+1;

				/*update menu Icons accrodingly*/
				$('#menu a+img').each(function(j){
					var relSize = get_Rel_Size(j)
					var size = relSize.toString() + 'vw';
					$(this).css(
						{
							'width': size,
							'height': size
						}
					);
				});
			}

			function get_Rel_Size(key){
				var maximum = 0;
				for (s in map){
					if (map[s] > maximum) {
						maximum = map[s];
					}
				}
				var rSize = (1/maximum) * map[key] * icon_max_size;
				if (rSize < icon_min_size){
					rSize = icon_min_size;
				}
				return rSize;
			};


			/* Every time the window is scrolled ... */
			$(window).scroll( function(){

				/* Check the location of each desired element */
				$('.slidein').each(function(i) {
					var top_of_object = $(this).offset().top;
					var bottom_of_object = $(this).offset().top + ($(this).outerHeight());
					var top_of_window = $(window).scrollTop();
					var bottom_of_window = $(window).scrollTop() + $(window).height();


					/* If the object is completely visible in the window, fade it in */
					if (top_of_object < bottom_of_window && top_of_object < bottom_of_window){
						$(this).show("slide");
					}else{
						$(this).hide();
					}
				});

				$('.lookAt').each(function(i) {
					var top_of_object = $(this).offset().top;
					var bottom_of_object = $(this).offset().top + ($(this).outerHeight());
					var top_of_window = $(window).scrollTop();
					var bottom_of_window = $(window).scrollTop() + $(window).height();

					/* If the object is completely visible in the window, fade it in */
					if(top_of_object < bottom_of_window && bottom_of_object > top_of_window){
						updateMenu(i);
					}
				});

			});
		</script>
		</head>

	<body data-spy="scroll" data-offset="0" data-target="#navbar-main" <?php body_class(); ?>>
		<!-- ==== MENU ==== -->
		<div id="menu">
			<div class="hamburger">
				<div class="bars">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<ul class="hamburger-menu">
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#about">About Me</a>
					</li>
					<li>
						<a href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a href="#blog">Blog</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<div class="main-title">J.O. Rob's main page</div>
			<ul class="container">
				<li>
					<a href="#home" >Home</a>
						<img src='<?php bloginfo('template_directory'); ?>/assets/img/Icons/menu-home.png'>
				</li>
				<li>
					<a href="#about" > About Me</a>
						<img src='<?php bloginfo('template_directory'); ?>/assets/img/Icons/menu-about.png'>
				</li>
				<li>
					<a href="#portfolio" > Portfolio</a>
						<img src='<?php bloginfo('template_directory'); ?>/assets/img/Icons/menu-portfolio.png'>
				</li>
				<li>
					<a href="#blog" > Blog</a>
						<img src='<?php bloginfo('template_directory'); ?>/assets/img/Icons/menu-blog.png'>
				</li>
				<li>
					<a href="#contact" > Contact</a>
						<img src='<?php bloginfo('template_directory'); ?>/assets/img/Icons/menu-contact.png'>
				</li>
			</ul>
		</div>

		<div id="content">
			<!-- ==== HOME ==== -->
			<div name="home" id="home" class="container lookAt">
				<img src='<?php bloginfo('template_directory'); ?>/assets/img/header_bg2.jpg'>
				<header>
					<p><?php bloginfo('description'); ?></p>
				</header>
			</div>

			<!-- ==== ABOUT ==== -->
			<div name="about" class="lookAt">
				<section name="about" id="about" class="container">
					<div class="title">
						<?php $page = get_page_by_title("A little about myself"); ?>
						<h1><?php echo $page->post_title; ?></h1>
					</div>

					<p><?php echo apply_filters ("the_content", $page->post_content); ?></p>
				</section>

				<!-- ==== SECTION PARTDESIGNER ==== -->
				<section name="partdesigner" id="partdesigner" class="container">
					<div class="title slidein">
						<?php $page = get_page_by_title("Part Designer…"); ?>
						<h1><?php echo $page->post_title; ?></h1>
					</div>
					<p class="slidein">
						<?php echo apply_filters ("the_content", $page->post_content); ?>
					</p>
				</section>

				<!-- ==== SECTION PARTCODER ==== -->
				<section id="partcoder" name="partcoder" class="container">
					<div class="title slidein">
						<?php $page = get_page_by_title("Part Coder!"); ?>
						<h1><?php echo $page->post_title; ?></h1>
					</div>
					<p class="slidein">
						<?php echo apply_filters ("the_content", $page->post_content); ?>
					</p>
				</section>

				<!-- ==== SECTION TECHNICAL SKILLS ==== -->
				<section id="skills" class="container">
					<div class="title slidein">
						<h1>My Technical Skills</h1>
					</div>
					<div class="bars slidein">
						<div class="bar blue">
							<div class="number">
								95%
							</div>
							<div class="text">
								HTML
							</div>
						</div>
						<div class="bar red">
							<div class="number">
								80%
							</div>
							<div class="text">
								CSS
							</div>
						</div>
						<div class="bar yellow">
							<div class="number">
								90%
							</div>
							<div class="text">
								JavaScript
							</div>
						</div>
						<div class="bar green">
							<div class="number">
								80%
							</div>
							<div class="text">
								WordPress
							</div>
						</div>
					</div>
				</section>
			</div>

			<!-- ==== PORTFOLIO ==== -->
			<script type="text/javascript">
				$(document).ready(function() {
					$("#portfolio .item").click(function() {
						$("#portfolio .item").removeClass('active');
						$(this).addClass('active');
						if($(this).is(".all")) {
							$('#gallery').addClass('all');
							$('#gallery').removeClass('uidesign');
							$('#gallery').removeClass('android');
							$('#gallery .galleryitem').show();
						}
						if($(this).is(".uidesign")) {
							$('#gallery').removeClass('all');
							$('#gallery').addClass('uidesign');
							$('#gallery').removeClass('android');
							$('#gallery .galleryitem.uidesign').show();
							$('#gallery .galleryitem.android').hide();
						}
						if($(this).is(".android")) {
							$('#gallery').removeClass('all');
							$('#gallery').removeClass('uidesign');
							$('#gallery').addClass('android');
							$('#gallery .galleryitem.uidesign').hide();
							$('#gallery .galleryitem.android').show();
						}
					})
				});
			</script>
			<?php
			$portfolio_posts = array();
			$args = array( 'post_type'=> 'portfolio_element' );
			$the_query = new WP_Query( $args );
			if($the_query->have_posts() ) {
				$portfolio_posts = $the_query->posts;
			}
			function get_portfolio_image($id) {
				$array = get_post_meta($id, 'wp_custom_attachment');
				return $array[0]['url'];
			}
			function get_portfolio_type($id) {
				$array = get_post_meta($id, 'wp_custom_select');
				return $array[0];
			}
			function normalize_type($type) {
				if($type == "uidesign") {
					return "UI DESIGN";
				}
				if($type == "android") {
					return "ANDROID";
				}
				return "";
			}
			?>
			<div name="portfolio" id="portfolio" class="container lookAt">
				<div class="title slidein">
					<h1>I WORKED ON COOL STUFF</h1>
				</div>
				<div class="navbar">
					<div>
						<div class="item all active">
							<p>
								ALL
							</p>
						</div>
						<div class="item uidesign">
							<p>
								UI DESIGN
							</p>
						</div>
						<div class="item android">
							<p>ANDROID PAGE</p>
						</div>
					</div>
				</div>

				<div id="gallery" class="slidein all">

					<?php
					$counter = 0;
					foreach($portfolio_posts as $post) {
						$counter++;
					?>
						<section class="galleryitem <?php echo get_portfolio_type($post->ID); ?>">
							<figure>
								<img class="figure" src="<?php echo get_portfolio_image($post->ID); ?>" alt="">
								<figcaption>
									<h5><?php echo normalize_type(get_portfolio_type($post->ID)); ?></h5>
									<a class="ain" data-toggle="modal" href="#myModal<?php echo $counter; ?>">Take a Look</a>
								</figcaption>
							</figure>
						</section>

					<?php } ?>
					?>
				</div>
			</div>

			<!-- ==== BLOG ==== -->
			<?php
			function formatDate($string) {
				return date("M y", strtotime($string));
			}
			function getAuthorName($id) {
				$user = get_user_by('id', $id);
				return $user->display_name;
			}
			?>

			<div name="blog" id="blogsection" class="container lookAt">
				<?php $posts = wp_get_recent_posts( array("numberposts" => 5, 'orderby' => 'post_date', 'post_type' => 'post', 'post_status' => 'publish')); ?>
				<div class="title">
					<h1>MY PERSONAL BLOG</h1>
				</div>
				<div id="blog">
					<div class="blogentry slidein">
						<div class="avatar">
							<div>
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/team/u1.jpg" width="60px" height="60px">
								<h4><?php echo getAuthorName($posts[0]['post_author']); ?></h4>
								<h5>Published<br><?php echo formatDate($posts[0]['post_date']); ?></h5>
							</div>
						</div>
						<div class="text">
							<h2><?php echo $posts[0]['post_title']; ?></h2>
							<p>
								<?php echo apply_filters ("the_content", $posts[0]['post_content']); ?>
							</p>
							<p>
								<a href="#" >Read More</a>
							</p>
						</div>
					</div>

					<div class="blogentry slidein">
						<div class="avatar">
							<div>
								<img  src="<?php bloginfo('template_directory'); ?>/assets/img/team/u1.jpg" width="60px" height="60px">
								<h4><?php echo getAuthorName($posts[1]['post_author']); ?></h4>
								<h5>Published<br><?php echo formatDate($posts[1]['post_date']); ?></h5>
							</div>
						</div>
						<div class="text">
							<h2><?php echo $posts[1]['post_title']; ?></h2>
							<p>
								<?php echo apply_filters ("the_content", $posts[1]['post_content']); ?>
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
					</div>

					<div id="smallblog">
						<div>
							<p>
								<?php echo $posts[2]['post_title']; ?>
							</p>
							<p >
								<?php echo formatDate($posts[2]['post_date']); ?>
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
						<div>
							<p>
								<?php echo $posts[3]['post_title']; ?>
							</p>
							<p >
								<?php echo formatDate($posts[3]['post_date']); ?>
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
						<div>
							<p>
								<?php echo $posts[4]['post_title']; ?>
							</p>
							<p >
								<?php echo formatDate($posts[3]['post_date']); ?>
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- ==== SECTION CRAFTED IN ZURICH ==== -->
			<div name="contact" class="lookAt">
				<section id="craftedzurich" class="container">
					<div class="slidein">
						<div class="title">
							<?php $page = get_page_by_title("Crafted in Zurich - Switzerland"); ?>
							<h1><?php echo $page->post_title; ?></h1>
						</div>
						<p><?php echo apply_filters ("the_content", $page->post_content); ?></p>
					</div>
				</section>

				<div id="contact"  class="container">
					<div class="title">
						<h1 class="slidein">THANKS FOR VISITING!</h1>
					</div>
					<div id="information">
						<div class="slidein">
							<h3>Contact Information</h3>
							<p>
								<span class="address"></span>
								<br/>
								<span class="phone"></span>
								<br/>
								<span class="fax"></span>
								<br/>
								<a href><span class="email"></span></a>
								<br/>
								<a href><span class="twitter"></span></a>
								<br/>
								<a href><span class="name"></span></a>
								<br/>
							</p>
						</div>

						<div class="slidein">
							<h3>Newsletter</h3>
							<p>
								Register to our newsletter and be updated with the latests information regarding our services, offers and much more.
							</p>
							<p>
								<form  role="form">
									<div >
										<label for="inputEmail1" class="col-lg-4 control-label"></label>
										<div >
											<input type="email"  id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div >
										<label for="text1" class="col-lg-4 control-label"></label>
										<div >
											<input type="text"  id="text1" placeholder="Your Name">
										</div>
									</div>
									<br>
									<div >
										<div >
											<button type="submit" >
												Sign in
											</button>
										</div>
									</div>
								</form>
							</p>
						</div>

						<div class="slidein">
							<h3>Support Us</h3>
							<p>
								If you would like to support my work and my passion for web crafting please feel free to send me an email, or to share one of my project on tweeter or facebook. Any small little thing will be appreciated!
							</p>
						</div>

					</div>

				</div>
			</div>

			<div id="footer">
				<div >
					<div>
						<h4>Created by <a href="http://globis.co">globis</a></h4>
					</div>
				</div>
			</div>

		</div><!--/content-->
		<div id="el2"></div>

		<?php
		$counter = 0;
		foreach($portfolio_posts as $post) {
			$counter++;
		?>
		<section id="myModal<?php echo $counter; ?>" class="popup">
			<figure  id="myModal<?php echo $counter; ?>popup" >
				<figcaption>
					<h5><?php echo normalize_type(get_portfolio_type($post->ID)); ?></h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="<?php echo get_portfolio_image($post->ID); ?>" alt="">
				<h1><?php echo $post->post_title; ?></h1>
				<p><?php echo apply_filters ("the_content", $post->post_content); ?></p>
			</figure>
		</section>
		<?php } ?>
		<?php wp_footer(); ?>
	</body>
</html>
