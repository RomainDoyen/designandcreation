<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Design And Creation | Acceuil</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/articles.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/c84e6cfdfc.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="header_texture"></div>
			<div class="header_mask">
				<svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
					<path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#333"></path>
				</svg>
			</div>
			<div class="container">
				<div class="header_navbar">
					<div class="header_navbar--logo">
						<a href="#"><img src="images/profile1.png" class="header_navbar--logo-profile" width="45" /></a><h1 class="header_navbar--logo-title">DesignAndCreation</h1>
					</div>
					<div class="header_navbar--menu">
						<a href="" class="header_navbar--menu-link"><i class="fas fa-home"></i>&nbsp;Acceuil</a>
						<a href="html/article1.php" class="header_navbar--menu-link"><i class="fas fa-newspaper"></i>&nbsp;Articles</a>
						<a href="html/article3.php" class="header_navbar--menu-link"><i class="fas fa-phone"></i>&nbsp;Contact</a>
					</div>
					<div class="header_navbar--toggle">
						<span class="header_navbar--toggle-icons"></span>
					</div>
				</div>
				<div class="header_slogan">
					<h1 class="header_slogan--title">Dessinateur</h1>
					<a href="" class="header_slogan--btn"><i class="fas fa-address-card"></i>&nbsp;Conctatez-moi</a>
				</div>
			</div>
		</div>

		<div class="articles">
			<div class="container">
				<h2 class="articles_title"><img src="images/home.png"> - Menu - <img src="images/home.png"></h2>
				<div class="articles_items">
					<a href="html/article1.php" class="article" style="background: url('images/banniere.png'); background-size: cover;">
						<div class="article_filtre"></div>
						<div class="article_name"><i class="fas fa-user"></i>&nbsp; A propos</div>
						<div class="article_icon"><i class="fa fa-play"></i></div>
					</a>
					<a href="html/article2.php" class="article" style="background: url('images/banniere.png'); background-size: cover;">
						<div class="article_filtre"></div>
						<div class="article_name"><i class="fas fa-images"></i>&nbsp;  Portfolio dessins</div>
						<div class="article_icon"><i class="fa fa-play"></i></div>
					</a>
					<a href="html/article3.php" class="article" style="background: url('images/banniere.png'); background-size: cover;">
						<div class="article_filtre"></div>
						<div class="article_name"><i class="fas fa-address-card"></i>&nbsp; Contact</div>
						<div class="article_icon"><i class="fa fa-play"></i></div>
					</a>
					<a href="html/article4.php" class="article" style="background: url('images/banniere.png'); background-size: cover;">
						<div class="article_filtre"></div>
						<div class="article_name"><i class="fas fa-address-card"></i>&nbsp; Portfolio logo</div>
						<div class="article_icon"><i class="fa fa-play"></i></div>
					</a>
				</div>
			</div>
		</div>
		
		<footer>
			<div class="parent">
  				<div class="element_left">
  					<img src="images/profile1.png" class="header_navbar--logo-profile" width="45" /><h1 class="header_navbar--logo-title">DesignAndCreation</h1>
  					<p>&copy; Design And Creation 2016-2021 | Tous droits réservés.</p>
  				</div>
  				<div class="reseaux">
  					<span><i class="fa fa-share-alt"></i>&nbsp;Suivez-moi</span>
  					<a href="" class="sous_reseaux" id="facebook"><i class="fab fa-facebook-f"></i></a>
  					<a href="" class="sous_reseaux" id="instagram"><i class="fab fa-instagram"></i></a>
  					<a href="" class="sous_reseaux" id="email"><i class="fas fa-envelope"></i></a>
  				</div>
  				<div class="element_right">
					<div class="content_counter">
	  					<p id="msg"></p>
	  					<p id="counter">0</p>
  					</div>
				</div>
			</div>
			
			<div class="btn_up">
                <img id="btn_up" src="images/btn_up.png">
            </div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>