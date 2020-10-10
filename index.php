<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MindLabor - Practice coding the cool way</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.">
		<meta name="twitter:title" content="MindLabor">
		<meta name="twitter:image" content="https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png">
		<meta name="twitter:description" content="Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@labor_mind">
		<meta name="twitter:creator" content="@labor_mind">
		<meta property="og:title" content="MindLabor">
		<meta property="og:image" content="https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png">
		<meta property="og:description" content="Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.">
		<meta property="og:url" content="https://www.mindlabor.dev/">
		<meta property="og:type" content="blog">

		<link rel="canonical" href="https://www.mindlabor.dev/">
		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/home.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123986016-2"></script>
		<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-123986016-2');</script>
		<script src="https://kit.fontawesome.com/157f63bc72.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="splash-wrapper">
			<div id="splash"></div>
		</div>
		<div class="mobile-menu">
			<div class="menu-active" id="menu-home"><a href="#">Home</a></div></a>
			<div id="menu-projects"><a href="#">Projects</a></div></a>
			<div id="menu-articles"><a href="#">Articles</a></div></a>
			<div id="menu-about"><a href="#">About</a></div></a>
			<div id="menu-sign-up"><a href="#">Sign Up</a></div></a>
		</div>

		<header>
			<div id="header">
				<div id="mobile-header-burger" onclick="$(this).toggleClass('open'); $('.mobile-menu').toggleClass('open'); $('body').toggleClass('fixed'); $('#header').toggleClass('header-mobile-open')">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div id="logo"></div>
				<div class="spacer"></div>
				<div id="header-home"><a href="#">Home</a></div>
				<div id="header-projects"><a href="#">Projects</a></div></a>
				<div id="header-articles"><a href="#">Articles</a></div></a>
				<div id="header-about"><a href="#">About</a></div></a>
				<div id="header-sign-in"><a href="#">Sign In</a></div></a>
				<div class="round-btn" id="sign-up"><a href="#">Sign Up</a></div></a>
			</div>
			<div id="hero">
				<h1>Practice coding the cool way.</h1>
				<p>Explore full coding projects and learn about every step from idea to release.</p>	
				<div class="round-btn" id="learn-more">Get Started</div>
			</div>
		</header>
		<section class="content-box">
			<h1>Latest Projects</h1>
			<div class="content-box-wrapper">
				<div class="article">
					<div class="a-preview"><img src="assets/projects/thumb-skadi.svg" alt="Discord Music Bot"></div>
					<div class="a-content">
						<div class="a-title">Discord Music Bot with NodeJS</div>
						<div class="a-desc">Make your own Discord bot that streams music from YouTube, searches for lyrics, and shows other songs of the same artist.</div>
						<div class="a-tags">
							<div class="a-tag tag-purple">Java</div>
							<div class="a-tag tag-purple">Functional</div>
						</div>
					</div>
				</div>
				<div class="article">
					<div class="a-preview"><img src="assets/projects/thumb-fractals.jpg" alt="Fractal Generator"></div>
					<div class="a-content">
						<div class="a-title">Fractal Generator</div>
						<div class="a-desc">Dive into the world of fractals. Learn how they are created and write a program that generates them in Java.</div>
						<div class="a-tags">
							<div class="a-tag tag-purple">Java</div>
							<div class="a-tag tag-purple">Recursion</div>
							<div class="a-tag tag-purple">Math</div>
						</div>
					</div>
				</div>
			</div>
			<div id="projects-more">More</div>
		</section>

		<section id="time-hero">
			<div>
				<h1>Not enough time?<span class="text-ext"> No Problem.</span></h1>
				<p>Explore mini-articles about various topics that help you with your projects and personal development as a developer.</p>
			</div>
		</section>

		<section class="content-box">
			<h1>Latest Articles</h1>
			<div class="content-box-wrapper">
				<div class="article">
					<div class="a-preview"><img src="assets/articles/thumb-streams.svg" alt="Streams"></div>
					<div class="a-content">
						<div class="a-title">Functional Streams with Java</div>
						<div class="a-desc">A useful trick to make your code more readable and concise.</div>
						<div class="a-tags">
							<div class="a-tag tag-purple">Java</div>
							<div class="a-tag tag-purple">Functional</div>
						</div>
					</div>
				</div>
				<div class="article">
					<div class="a-preview"><img src="assets/articles/thumb-fft.svg" alt="FFT Analysis"></div>
					<div class="a-content">
						<div class="a-title">FFT in Javascript using p5.js</div>
						<div class="a-desc">Decompose an audio signal from your microphone into its frequencies using this simple library.</div>
						<div class="a-tags">
							<div class="a-tag tag-purple">p5.js</div>
							<div class="a-tag tag-purple">Tools</div>
							<div class="a-tag tag-purple">Audio</div>
						</div>
					</div>
				</div>
			</div>
			<div id="articles-more">More</div>
		</section>

		<footer>
			<div id="footer">
				<div class="footer-item">
					<h2>About</h2>
					<p>Did you ever want to become a master in a particular technology, but you ended up searching the web for hours instead? <br><br>
						Our mission is to create projects based on that technology and teach you exactly how we have built them to give you the best introduction possible.</p>
				</div>
				<div class="footer-item" id="follow-box">
					<h2>Contact us</h2>
					<div id="social-links">
						<div><a href="mailto:admin@mindlabor.dev" target="_blank"><img src="assets/global/icons/mail.svg" alt="Email"></a></div>
						<div><a href="https://github.com/MindLabor" target="_blank"><img src="assets/global/icons/github.svg" alt="Github"></a></div>
						<div><a href="https://medium.com/@MindLabor" target="_blank"><img src="assets/global/icons/medium.svg" alt="Medium"></a></div>
						<div><a href="https://www.instagram.com/mindlabor/" target="_blank"><img src="assets/global/icons/instagram.svg" alt="Instagram"></a></div>
						<div><a href="https://twitter.com/labor_mind" target="_blank"><img src="assets/global/icons/twitter.svg" alt="Twitter"></a></div>
					</div>
					<p>Did you find any issues? Or do you want to contribute to this site?</p>
					<p>Visit our GitHub <span class="inline-link"><a id="github-inline" href="https://github.com/MindLabor">here</a></span>.</p>
				</div>
				<div class="footer-item" id="signup-box">
					<h2>Explore</h2>
					<p>Want to receive updates of new projects and get access to more content?</p>
					<div class="round-btn">Sign Up</div>
				</div>
			</div>
			<div class="footer-copy">
				© 2020 MindLabor. <span id="privacy">Privacy Policy</span>
			</div>
		</footer>
		
		<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "Product",
			  "name": "MindLabor",
			  "url": "https://www.mindlabor.dev/",
			  "address": "",
			  "sameAs": [
				"https://twitter.com/labor_mind",
				"https://www.linkedin.com/in/samuel-braun",
				"https://github.com/MindLabor",
				"https://medium.com/@MindLabor",
				"https://www.instagram.com/mindlabor/"
			  ]
			}
		</script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="vendor/jquery-3.5.1.min.js"></script>
		<script src="js/home.js"></script>
	</body>
</html>