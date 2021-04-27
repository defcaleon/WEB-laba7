<?php
require("scripts/laba7/dateCookies.php");
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="scripts/ajax.js"></script>
	<title></title>

</head>
<body>

<img id="toTop"  class="img__class"src="assets/images/top_btn1.png"/>
<header class="header">
	<div class="container">
		<div class ="header__iner">


			<nav class="nav">
				<a class="nav__link scrollto" href="#about_us">About us</a>
				<a class="nav__link scrollto" href="#work">Work</a>
				<a class="nav__link scrollto" href="#shop">Shop</a>
				<a class="nav__link scrollto" href="#contact">Contact</a>
			</nav>	
		</div>
	</div>
</header>

<div class="intro">
	<div class="container">
	</div>
</div>

<section class="section" id="about_us">
	<div class="container">
		<div class="section__logo"><img src="assets/images/icon_aboutUs.png" alt="2"/></div>
		<h2 class="section__title">Vintage bicycles</h2>
		<div class="section__text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
		</div>
		
	</div>
</section>


<section >
	<div class="card">
		<div class="card__photo"><img  class="img__class" src="assets/images/photo_1_card1.jpg"></div>
		<div class="container__card">
			<div class="card__main">
				<div class="section__logo"><img src="assets/images/icon_card1.png" alt="4"/></div>
				<h2 class="section__title">De Rosa</h2>
				<div class="card__text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
				</div>
			</div>
			<div class="container__card__image"><img  class="img__class2" src="assets/images/photo_2_card1.jpg" alt="5"/></div>
		</div>
	</div>

	<div class="card" id="work">
		
		<div class="container__card">
			<div class="card__main">
				<div class="section__logo"><img src="assets/images/icon_card2.png" alt="4"/></div>
				<h2 class="section__title">Miguel Indurain</h2>
				<div class="card__text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
				</div>
			</div>
			<div class="container__card__image"><img  class="img__class2" src="assets/images/photo_2_card2.jpg" alt="5"/></div>
		</div>
		<div class="card__photo"><img  class="img__class" src="assets/images/photo_1_card2.jpg"></div>
	</div>


	<div class="card">

		<div class="card__photo__small"><img  class="img__class" src="assets/images/photo_1_card3.jpg"></div>
		<div class="container__card__small">
			<div class="card__main">
				<div class="section__logo"><img src="assets/images/icon_card3.png" alt="4"/></div>
				<h2 class="section__title">Daccordi Griffe</h2>
				<div class="card__text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
				</div>
			</div>
			<div class="container__card__image"><img  class="img__class2" src="assets/images/photo_3_card3.jpg" alt="5"/></div>
		</div>
		<div class="card__photo__small"><img  class="img__class" src="assets/images/photo_2_card3.jpg"></div>

	</div>	
</section>

<section class="section">
	<div class="container">
		<div class="section__logo"><img src="assets/images/icon_twitter.png" alt="2"/></div>
		<h2 class="section__title">Vintage bicycles</h2>
		<div class="section__text"> 
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
		</div>
		
	</div>
</section>

<section class="grid" id="shop">

	<div class = "box__1 box"><img  class="img__class" src="assets/images/gallery_1.jpeg"></div>
	<div class = "box__2 box"><img  class="img__class" src="assets/images/gallery_2.jpeg"></div>
	<div class = "box__3 box"><img  class="img__class" src="assets/images/gallery_4.jpeg"></div>
	<div class = "box__4 box"><img  class="img__class" src="assets/images/gallery_5.jpeg"></div>
	<div class = "box__5 box"><img  class="img__class" src="assets/images/gallery_6.jpeg"></div>
	<div class = "box__6 box"><img  class="img__class" src="assets/images/gallery_3.jpeg"></div>
	<div class = "box__7 box"><img  class="img__class" src="assets/images/gallery_7.jpeg"></div>
	<div class = "box__8 box"><img  class="img__class" src="assets/images/gallery_8.jpeg"></div>

</section>


<section class="shop">
	<div class="shop__btn">
		<form method="POST"  action="scripts/laba3/laba3.html">
    		<input type="submit" class="btn" value="DISCOVER THE SHOP" />
		</form>
	</div>
	
</section>

<section class="email">
	<div class="email__text">Stay on the saddle!</div>
	<div class="email__block">
		<input type="e-mail" placeholder="enter e-mail" class="email_mail" required >
		<form method="POST"  action="scripts/laba8/laba8.php">
			<button class="btn_email" >GO</button>
		</form>
		
	</div>
</section>

 <footer class="footer" id="contact" >
    <div>
    	<p>Made by Nikita Parmon </p>
    </div>
    <div class="aaaa">
    	<div class="ico_container">

    		<a href="https://www.facebook.com/" target="_blank"><img class="small_ico"  src="assets/images/facebook.ico"></a>
    		<a href="https://www.instagram.com/" target="_blank"> <img  class="small_ico" src="assets/images/instagram.ico"></a>
    		<a href="https://twitter.com/" target="_blank"><img  class="small_ico" src="assets/images/twitter.ico"></a>
    	</div>
    </div>
  </footer>




</body>
</html>