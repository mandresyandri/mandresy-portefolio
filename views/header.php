<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

    <!-- 
      TODO

      Upload your Unemployable (or whatever photo you like) to the assets/images folder
      and change the name of the image below to match the uploaded one

      Change the title in the <title> tag to whatever you would like the title of your portfolio to be

      This should be the same across all pages.
     -->
    <link rel="icon" href="#" />
		<title>Mandresy Andri</title>
    <meta name="description" content="Portefolio de Mandresy">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/typography.css">
    <link rel="stylesheet" href="./css/utilities.css">

		<script defer src="./js/script.js"></script>
		<script defer src="./js/typingEffect.js"></script>
    <script src="https://unpkg.com/typewriter-effect/dist/core.js"></script>
	</head>
	<body>
    <!-- NAVBAR -->
    <div class="navbar">
      <a class="nav-title-link" href="./index.html">
        <!-- TODO - Change the "Portfolio Title" to whatever you want displayed in the top left -->
        <span class="nav-title">Mandresy Portfolio</span>
         <!-- TODO - Change the email after 'mailto:' to your email address for contact -->
        <a class="button" href="mailto:whitevans.eth@gmail.com">
          <span class="button-text">Contact</span>
        </a>
      </a>
    </div>

    <!-- MAIN PAGE CONTENT -->
    <div id="main-content">

      <!-- PORTFOLIO HEADER -->
      <div id="portfolio-header">
        <div id="portfolio-header-image-container">
          <!-- 
            TODO

            - Change the img "src" attribute to point to the Unemployable image you uploaded (or whatever image).
            - Change the number to point to your Unemployable & replace the OpenSea link with your own
            - If you aren't using an Unemployable as your image, remove the entire "a" element
          -->
          <img src="./assets/images/1311.png" class="portfolio-header-image">
            <span class="image-caption">mandresyandri <a class="hashtag" href="https://vanves.fr" target="_blank">#92170</a></span>
        </div>


          <!-- 
            TODO

            - Change the main-title to whatver you want
            - Change the body-text after that to a quick introduction to what you do
            - Edit the button text if you feel like it. It will link to the projects section below.
          -->
          <div id="portfolio-header-text-container">
            <div class="header-text">
              <span class="main-title">Bonjour ! Je suis <a href="https://www.linkedin.com/in/mandresy-andriantsoanavalona-27aabb21a/" target="_blank">@mandresyandri</a>.</span>
              <div class="body-text">Apprenti à la <a href="https://meudon.fr" target="_blank">Ville de Meudon</a> intéressé par la science des données <span id="typing-text"></span></div>
            </div>
            <a class="button" id="my-work-link">
              <span class="button-text">Découvrez mes projets</span> 
              <image src="./assets/icons/arrow-right.svg" class="right-arrow-icon"/>
            </a>
        </div>
      </div>