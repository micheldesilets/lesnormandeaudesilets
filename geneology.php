<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Famille Normandeau-Desilets - Lectures</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/main.js"></script>
  <!--  <link rel="stylesheet" href="css/media_query.css" media="screen">-->
  <!--  <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Raleway:400,400i,700,700i" rel="stylesheet">-->
  <!--[if lt IE 9]>
  <!--<script src="js/html5shiv.js"></script>-->
  <![endif]-->
</head>
<body>
<div class="page">
  <!-- ==== START MASTHEAD ==== -->
  <div class="header-cont">
    <header class="masthead" role="banner">
      <!--    <p class="logo"><a href="/"><img .../></a></p>-->
      <ul class="social-sites">
      </ul>

      <h1>Les Normandeau-Desilets</h1>
      <h2>Une courte histoire de Nous</h2>

      <nav role="navigation">
        <ul class="nav-main">
          <li><a href="index.php">Acceuil </a>
          </li>
          <li><a href="#">Généalogie</a>
          </li>
          <li><a href="#">Objets de famille</a>
          </li>
          <li><a href="family_photos.php">La famille en photos</a>
          </li>
          <li><a href="trash/photo_arch_desilets.phpNG">Photos d'archives</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <!-- end masthead -->
  <div class="page">
    <div class="container">
      <ul id="family">
        <li id="family-left">
        </li>
        <li id="family-right" onclick="javascript:getReadings()">
        </li>
      </ul>
      <main role=main>
        <!--        <article class="clearfix,about">
                  <p>
                    Cette page contient un ensemble de documents (livres,lettres personnelles, etc.) que vous trouverez
                    surement intéressants.
                  </p>
                </article> -->
        <!--The section element represents a generic section of a document or application. -->
        <section id="readings-list"></section>
      </main>
    </div>
  </div>
  <script>assignReadingTitle()</script>
  <script>getReadings()</script>
</body>
</html>
