<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>J. O. Rob main page</title>
		<link rel="stylesheet" href="style.css">
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

	<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
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
						<img src='assets/img/Icons/menu-home.png'>
				</li>
				<li>
					<a href="#about" > About Me</a>
						<img src='assets/img/Icons/menu-about.png'>
				</li>
				<li>
					<a href="#portfolio" > Portfolio</a>
						<img src='assets/img/Icons/menu-portfolio.png'>
				</li>
				<li>
					<a href="#blog" > Blog</a>
						<img src='assets/img/Icons/menu-blog.png'>
				</li>
				<li>
					<a href="#contact" > Contact</a>
						<img src='assets/img/Icons/menu-contact.png'>
				</li>
			</ul>
		</div>

		<div id="content">
			<!-- ==== HOME ==== -->
			<div name="home" id="home" class="container lookAt">
				<img src='assets/img/header_bg2.jpg'>
				<header>
					<p>A 2.0 web developer.</p>
					<p>At your service</p>
				</header>
			</div>

			<!-- ==== ABOUT ==== -->
			<div name="about" class="lookAt">
				<section name="about" id="about" class="container">
					<div class="title">
						<h1>A little about my self</h1>
					</div>

					<div>
						<p>
							I am a UX/UI Designer and Front End developer from Zurich, Switzerland. I love to solve complex problem, create new and simple design solution for different topics.
							I create beautiful, usable, professional websites using best practice accessibility and the latest W3C web standards guidelines, resulting in semantic and seo friendly XHTML and CSS. All my websites are lovingly hand coded.
						</p>
					</div>

					<div>
						<p>
							At first I intended to be an animator and went to design school fully motivated to become just that. One thing led to another and 2 years went by and I was a (almost) fully fledged freelance web designer without ever planning to become one.
							When I am not coding or designing some new websites I am usually at the gym doing boldring. To relax my nerve I like to play videogames with some friends while eating pizza! .
						</p>
					</div>
				</section>

				<!-- ==== SECTION PARTDESIGNER ==== -->
				<section name="partdesigner" id="partdesigner" class="container">
					<div class="title slidein">
						<h1>Part Designer...</h1>
					</div>
					<p class="slidein">
						A web developer needs to have a good aesthetic eye on his product. For this reason part of my skills include user interface and interaction design.
					</p>
				</section>

				<!-- ==== SECTION PARTCODER ==== -->
				<section id="partcoder" name="partcoder" class="container">
					<div class="title slidein">
						<h1>PART CODER!</h1>
					</div>
					<p class="slidein">
						But a website cannot be just nice to see... It has to work! That's why we have JavaScript, PHP and CMS like WordPress
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
			<div name="portfolio" id="portfolio" class="container lookAt">
				<div class="title slidein">
					<h1>I WORKED ON COOL STUFF</h1>
				</div>
				<div class="navbar">
					<div>
						<div class="item">
							<p>
								ALL
							</p>
						</div>
						<div class="item">
							<p>
								UI DESIGN
							</p>
						</div>
						<div class="item">
							<p>ANDROID PAGE</p>
						</div>
					</div>
				</div>

				<div id="gallery" class="slidein">

					<!-- PORTFOLIO IMAGE 1 -->

					<section class="galleryitem">
						<figure>
							<img class="figure" src="assets/img/portfolio/folio01.jpg" alt="">
							<figcaption>
								<h5>UI DESIGN</h5>
								<a class="ain" data-toggle="modal" href="#myModal1" >Take a Look</a>
							</figcaption>
						</figure>
					</section>

					<!-- PORTFOLIO IMAGE 2 -->

					<section class="galleryitem" >
						<figure>
							<img class="figure" src="assets/img/portfolio/folio02.jpg" alt="">
							<figcaption>
								<h5>UI DESIGN</h5>
								<a class="ain" data-toggle="modal" href="#myModal2" >Take a Look</a>
							</figcaption>
						</figure>
					</section>

					<!-- PORTFOLIO IMAGE 3 -->

					<section class="galleryitem">
						<figure>
							<img class="figure" src="assets/img/portfolio/folio03.jpg" alt="">
							<figcaption>
								<h5>ANDROID PAGE</h5>
								<a class="ain" data-toggle="modal" href="#myModal3" >Take a Look</a>
							</figcaption>
						</figure>
					</section>

					<!-- PORTFOLIO IMAGE 4 -->

					<section class="galleryitem">
						<figure>
							<img class="figure" src="assets/img/portfolio/folio04.jpg" alt="">
							<figcaption>
								<h5>ANDROID PAGE</h5>
								<a class="ain" data-toggle="modal" href="#myModal4" >Take a Look</a>
							</figcaption>
						</figure>
					</section>

					<!-- PORTFOLIO IMAGE 5 -->

					<section class="galleryitem">
						<figure>
							<img class="figure" src="assets/img/portfolio/folio05.jpg" alt="">
							<figcaption>
								<h5>ANDROID PAGE</h5>
								<a class="ain" data-toggle="modal" href="#myModal5" >Take a Look</a>
							</figcaption>
						</figure>
					</section>

					<!-- PORTFOLIO IMAGE 6 -->

					<section class="galleryitem">
						<figure >
							<img class="figure" src="assets/img/portfolio/folio06.jpg" alt="">
							<figcaption>
								<h5>ANDROID PAGE</h5>
								<a class="ain" data-toggle="modal" href="#myModal6" >Take a Look</a>
							</figcaption>
						</figure>
					</section>

				</div>
			</div>

			<!-- ==== BLOG ==== -->
			<div name="blog" id="blogsection" class="container lookAt">
				<div class="title">
					<h1>MY PERSONAL BLOG</h1>
				</div>
				<div id="blog">
					<div class="blogentry slidein">
						<div class="avatar">
							<div>
								<img src="assets/img/team/u1.jpg" width="60px" height="60px">
								<h4>Pinco Pallino</h4>
								<h5>Published Feb 28.</h5>
							</div>
						</div>
						<div class="text">
							<h2>What Define Success</h2>
							<p>
								No matter how old you are, where you’re from or what you do for a living, we all share something in common—a desire to be successful. .
							</p>
							<p>
								Each person’s definition of success is different, however, as some may define success as being a loving and faithful spouse or a caring and responsible parent, while most people would equate success with wealth, fame, and power
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
					</div>

					<div class="blogentry slidein">
						<div class="avatar">
							<div>
								<img  src="assets/img/team/u1.jpg" width="60px" height="60px">
								<h4>Pinco Pallino</h4>
								<h5>Published Feb 02.</h5>
							</div>
						</div>
						<div class="text">
							<h2>A Beautiful Story</h2>
							<p>
								One day, in a heavily crowded place, a young man was shouting at the crowd. “People look at me; I have the most beautiful heart in the world.”
							</p>
							<p>
								Many people looked at him and were stunned to see the beautiful heart in a perfect shape, no little flaw, which looked quite amazing. Most of the people who saw his heart was mesmerized by the beauty of his heart and praised him.
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
					</div>

					<div id="smallblog">
						<div>
							<p>
								Parallax Tutorial
							</p>
							<p >
								Dec. 2015
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
						<div>
							<p>
								Positioning in CSS
							</p>
							<p >
								Nov. 2015
							</p>
							<p>
								<a href="#" > Read More</a>
							</p>
						</div>
						<div>
							<p>
								What is Node.js?
							</p>
							<p >
								Sep. 2015
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
							<h1>CRAFTED IN ZURICH, SWITZERLAND.</h1>
						</div>
						<p >
							Paradeplatz 987,
						</p>
						<p>
							<a href="tel:+4198844893">+0041 9884 4893</a>
						</p>
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
								<span ></span> Paradeplatz, Zurich
								<br/>
								<span ></span> +0041 9884 4893
								<br/>
								<span ></span> +0041 9884 8893
								<br/>
								<span ></span><a href="#"> mrdesignrobot@inf.co</a>
								<br/>
								<span ></span><a href="#"> @mrdesignrobot </a>
								<br/>
								<span ></span><a href="#"> Mr Design Luigi</a>
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

		<section id="myModal1" class="popup">
			<figure  id="myModal1popup" >
				<figcaption>
					<h5>ANDROID PAGE</h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="assets/img/portfolio/folio01.jpg" alt="">
				<p>blabldsof asdf  jsdfs sdfsoihdgfiu sdgfsdsdfoishognsdoiufhds sefnkms safdi  stefg jmn wejknwef kwfn kl<jn lkj>N klsnsfS</p>
			</figure>
		</section>
		<section id="myModal2" class="popup">
			<figure  id="myModal2popup" >
				<figcaption>
					<h5>ANDROID PAGE</h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="assets/img/portfolio/folio02.jpg" alt="">
				<p>blabldsofjsoihdgfiusdfoishognsdoiufhds sefxcnkms safdi  stefg jmn wejknwef kwfn kl<jn lkj>N klsnsfS</p>
			</figure>
		</section>
		<section id="myModal3" class="popup">
			<figure  id="myModal3popup" >
				<figcaption>
					<h5>ANDROID PAGE</h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="assets/img/portfolio/folio03.jpg" alt="">
				<p>bl abas l  ds ofjsaaoi hdgfiusd foish nsdoiufhds sefnkms safdi awrfdsdfsdv stefg jmn wejknwef kwfn kl<jn lkj>N klsnsfS</p>
			</figure>
		</section>
		<section id="myModal4" class="popup">
			<figure  id="myModal4popup" >
				<figcaption>
					<h5>ANDROID PAGE</h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="assets/img/portfolio/folio04.jpg" alt="">
				<p>AF afafa  RF a RW dfAWw bla bldsof jsoihdgfiusdfoishogn sdoiufhds sefnkms s sepdfj wsefoiw as fsfdsdfafdi  stefg jmn wejknwef kwfn kl<jn lkj>N klsnsfS</p>
			</figure>
		</section>
		<section id="myModal5" class="popup">
			<figure  id="myModal5popup" >
				<figcaption>
					<h5>ANDROID PAGE</h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="assets/img/portfolio/folio05.jpg" alt="">
				<p>bl aabl   EWR RAWdsofjsoihdgfiusdfoishognsdoiufhds sefnkms safdi  stefg jmn wejknwef kwfn kl<jn lkj>N klsnsfS</p>
			</figure>
		</section>
		<section id="myModal6" class="popup">
			<figure  id="myModal6popup" >
				<figcaption>
					<h5>ANDROID PAGE</h5>
					<a data-toggle="modal" href="#portfolio" >x</a>
				</figcaption>
				<img class="figure" src="assets/img/portfolio/folio06.jpg" alt="">
				<p>blabldsofjsoihdgfiusdfoishognsdoiufhds sefnkms safdi  stefg jmn wejknwef kwfn kl<jn lkj>N klsnsfS</p>
			</figure>
		</section>

	</body>
</html>
