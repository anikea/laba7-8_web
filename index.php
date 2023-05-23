<?php
session_start();
require_once './src/auth.php';
logout();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Chill Marcy Story</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Global CSS -->
	<link rel="stylesheet" href="assets/Style.css">
</head>

<body>
	<header id="header" class="header">
		<div class="container">
			<p class="story">Story</p>
			<div class="top-bar">
				<div class="block">
					<p class="marcy">Marcy</p>
				</div>
			</div>
		</div>
	</header>

	<main class="main content"> </main>
	<h1 class="welcome">Welcome!</h1>

	<main class="main content">
		<div class="row custom_new">
			<div class="div-text">
				<h3 class="title">What is Lorem Ipsum?</h3>
				<p class="text">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					when an unknown printer
					took a galley of type and scrambled it to make a type specimen book. It has
					survived not only five
					centuries, but also the leap into electronic typesetting, remaining essentially
					unchanged.
				</p>
				<p class="text">
					It was popularised in the 1960s with the release of Letraset sheets containing
					Lorem Ipsum passages,
					and more recently with desktop publishing software like Aldus PageMaker including
					versions of Lorem Ipsum.
				</p>
				<p class="link">
					<a href="views/article/article.php" class="full-story">Full Story</a>
				</p>
			</div>
			<div class="image-block">
				<img src="assets/img/right-image.jpg" alt="Right Image" class="image">
			</div>
			<div class="img-absolute">
				<img src="assets/img/image-top.jpg" alt="Image on Top" class="img-above">
			</div>
		</div>

		<div class="row">
			<div class="div-quotation div-text">
				<h3 class="title">We travel not to escape from our life but we travel our life not to
					escape from
					us.... </h3>
				<div class="image-block">
					<img src="assets/img/center-image.jpg" alt="Centre Image" class="image">
				</div>
				<p class="text">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					when an unknown printer
					took a galley of type and scrambled it to make a type specimen book. It has
					survived not only five
					centuries, but also the leap into electronic typesetting, remaining essentially
					unchanged.
				</p>
				<p class="text">
					It was popularised in the 1960s with the release of Letraset sheets containing
					Lorem Ipsum passages,
					and more recently with desktop publishing software like Aldus PageMaker including
					versions of Lorem
					Ipsum.
				</p>
				<p class="link">
					<a href="views/article/article.php" class="full-story">Full Story</a>
				</p>
			</div>
		</div>
	</main>
	<div class="row iframe">
		<iframe width="100%" height="480" src=https://www.youtube.com/embed/OHAWwaYu2H0?autoplay=0&color=white
			frameborder="0" allowfullscreen></iframe>
	</div>

	<section class="container_block">
		<div class="row">
			<div class="after-iframe">
				<div class="image-block">
					<img src="assets/img/left-image.jpg" alt="Left Image" class="image1">
					<div class="text">
						<h2>Quote</h2>
						<p>Nullam id dolor id nibh ultricies vehicula elit. </p>
					</div>
					<div class="f_text">
						<p>“Donec id elit non mi porta gravida at eget metus. Vestibulum id
							ligula porta felis euismod
							semper. Curabitur blandit tempus porttitor”</p>
						<div class="author">
							<p>VEN DIESEL </p><span>1962-2006</span>
						</div>
						<a href="views/article/article.php" class="more">Full Story</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="nav-menu">
		<div id="burger">
			<span></span><span></span><span></span>
		</div>
		<ul class="menu">
			<li><a href="#">Home Page</a></li>
			<li><a href="views/about/about.php">About Us</a></li>
			<li><a href="login.php">Log in</a></li>
		</ul>
	</div>
	<footer class="footer">
		<section class="sub_block new_dex">
			<form id="subscription_form" class="form_sub">
				<p class="title">Like what you're reading? Get weekly updates that will help
					<br> you grow as a designer.
				</p>
				<div class="inputs">
					<input type="text" name="name" required placeholder="Name">
					<input type="email" name="email" required placeholder="email">
				</div>
				<button type="submit">Subscribe</button>
			</form>
		</section>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>