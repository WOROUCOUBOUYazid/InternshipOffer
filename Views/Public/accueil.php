<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="<?=ASSETS?>welcome_page/styles/index.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<title>Home page</title>
	</head>
	<body>
		<!-- navbar-->
		<?php include("_navbar.php") ?>
		
		<Section class="section home-section" id="home">
			<div class="home-img">
				<img src="<?=ASSETS?>welcome_page/img/img_home.jpg" alt="Home image">
			</div>
			<div class="home-text">
				<h1>Cherchez, trouvez et postulez</h1>
				<p>Vous êtes étudiants et vous recherchez à mettre en application ce que vous avez appris
				en formation ? Les meilleures opportunités de stage vous attendent ! <br>
				Franchissez le pas et inscrivez vous.</p>
				<button><a href="<?=HOST?>studentRegister">S'inscrire</a></button>
			</div>
		</Section>

		<!-- Test -->
		<!-- <form action="add-user" method="post">
			<input type="text" name="firstname" id="firstname">
			<input type="text" name="lastname" id="lastname">
			<input type="number" name="phone" id="phone">
			<input type="email" name="email" id="email">
			<input type="text" name="profile" id="profile">
			<input type="password" name="password" id="password">
			<input type="submit" value="envoyer" name="envoyer">
		</form>

		<?php /*foreach ($users as $user): ?>
			<div>
				<h4> <?=$user->getFirstname()?> </h4>
				<p> <?=$user->getEmail()?> </p>
				<p> <?=$user->getProfile()?> </p>
			</div>
		<?php endforeach;*/ ?> -->
		<!-- FinTest -->
		
		<section class="section about-section" id="about">
			<div class="title"><h1>A Propos</h1></div>
			<div class="about-content"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores illo, amet cum eius voluptas perspiciatis ad molestiae optio neque itaque molestias accusamus expedita nobis! Debitis omnis deserunt perferendis provident earum.
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta amet iste atque tempora obcaecati in deserunt ut reprehenderit, dolorum aut quod, asperiores sint odit ducimus voluptas itaque laudantium cum. Ullam.
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor officia, esse alias placeat vero maxime atque reiciendis ea, soluta aliquid magnam, obcaecati facilis in provident nam? Ipsum possimus veritatis cupiditate?</p></div>
		</section>
		
		<section class="section latest-offers-section">
			<div class="title"><h1>Nos dernières offres</h1></div>
			<div class="offers-row">
				<div class="offers-box">
					<h3>Développeur web</h3>
					<h4>IT Company</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
				</div>
				<div class="offers-box">
					<h3>Comptable</h3>
					<h4>IT Company</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
				</div>
				<div class="offers-box">
					<h3>Graphiste designer</h3>
					<h4>Octogone</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
				</div>
				<div class="offers-box">
					<h3>Développeur Java</h3>
					<h4>IT Company</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
				</div>
				<div class="offers-box">
					<h3>Devops</h3>
					<h4>Hp computing</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
				</div>
				<div class="offers-box">
					<h3>Développeur mobile</h3>
					<h4>Fords</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit..</p>
				</div>
			</div>
		</section>

		<section class="section partners-section">
			<div class="title"><h1>Our Partners</h1></div>
			<div class="partners-grid">
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/11244276.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/11495742.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/11508404.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/1239608.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/14016474.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/2891415.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/3050438.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/3135684.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/9422919.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/read.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/639394.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/6479337.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/7458531.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/9240330.png" alt="Img"></div>
				<div class="partners-box"><img src="<?=ASSETS?>welcome_page/icons/partners_icons/9254658.png" alt="Img"></div>
			</div>
		</section>

		<!-- footer -->
		<?php include("_footer.php") ?>
		
		<!-- JavaScript files-->
		
	</body>
</html>