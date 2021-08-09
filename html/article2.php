<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Design And Creation | Portfolio</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/articles.css">
		<link rel="stylesheet" type="text/css" href="../css/article-view.css">
		<link rel="stylesheet" type="text/css" href="../css/portfolio.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/c84e6cfdfc.js"></script>
	</head>
	<body>
		<div class="header header_article">
			<div class="header_texture2 header_article"></div>
			<div class="header_mask">
				<svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
					<path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#333"></path>
				</svg>
			</div>
			<div class="container">
				<div class="header_navbar">
					<div class="header_navbar--logo">
						<a href="../index.php"><img src="../images/profile1.png" class="header_navbar--logo-profile" width="45" /></a><h1 class="header_navbar--logo-title">DesignAndCreation</h1>
					</div>
					<div class="header_navbar--menu">
						<a href="../index.php" class="header_navbar--menu-link"><i class="fas fa-home"></i>&nbsp;Acceuil</a>
						<a href="../html/article2.php" class="header_navbar--menu-link"><i class="fas fa-newspaper"></i>&nbsp;Articles</a>
						<a href="../html/article3.php" class="header_navbar--menu-link"><i class="fas fa-phone"></i>&nbsp;Contact</a>
					</div>
					<div class="header_navbar--toggle">
						<span class="header_navbar--toggle-icons"></span>
					</div>
				</div>
				<div class="header_slogan">
					<h1 class="header_slogan--title">Mon portfolio</h1>
					<a href="../index.php" class="header_slogan--btn"><i class="fa fa-chevron-left"></i>&nbsp;Retour</a>
				</div>
			</div>
		</div>

		<div class="gallery-section">
      		<div class="inner-width">
        		<div class="gallery">
					<?php 
						require_once('../config/db_config.inc');
						$req = $db -> query('SELECT name FROM portfolio_dessins');
						while ($data = $req -> fetch()) {
							// var_dump($data);
							echo '
								<a href="../upload/dessins/'.$data['name'].'" class="image">
									<img src="../upload/dessins/'.$data['name'].'">
								</a>   
							';
						}
					?> 
        		</div>
      		</div>
    	</div>

    	<script>
		    $(".gallery").magnificPopup({
		      delegate: 'a',
		      type: 'image',
		      gallery:{
		        enabled: true
		      }
		    });
  		</script>

		<footer>
			<div class="parent">
  				<div class="element_left">
  					<img src="../images/profile1.png" class="header_navbar--logo-profile" width="45" /><h1 class="header_navbar--logo-title">DesignAndCreation</h1>
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
                <img id="btn_up" src="../images/btn_up.png">
            </div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="../js/main.js"></script>
	</body>
</html>