<!-- Emma Watt Art - Homepage. Free template taken from
   - https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_streetart&stacked=h
   -->
<!DOCTYPE html>
<html>
  <head>
    <title>Emma Watt Art</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <style>
      body {font-family: "Raleway";}
      #title{font-family: "Raleway", Arial, sans-serif; font-size: 30px;}
      .w3-row img {margin-bottom: -8px}
    </style>
  </head>
  <body>
    <?php
      session_start();
      session_destroy();
    ?>
    <!-- Header -->
    <header class="w3-container w3-xlarge w3-padding-24">
      <a class="w3-left w3-button w3-white" id="title"><b>Emma Watt Art</b></a>
      <a href="about.php" class="w3-right w3-button w3-white">About</a>
      <a href="portfolio.php" class="w3-right w3-button w3-white">Portfolio</a>
    </header>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width:1500px">
      <!-- Photo Grid -->
      <div class="w3-row">
        <div class="w3-half">
          <img src="images/img10.jpg" style="width:100%">
          <img src="images/mixed_media/IMG_1526.JPG" style="width:100%">
          <img src="images/photography/IMG_1312.JPG" style="width:100%">
          <img src="images/photography/IMG_1395.JPG" style="width:100%">
        </div>

        <div class="w3-half">
          <img src="images/mixed_media/IMG_1018.JPG" style="width:100%">
          <img src="images/img5.jpg" style="width:100%">
          <img src="images/printmaking/IMG_1120.JPG" style="width:100%">
        </div>
      </div>
    <!-- End Page Content -->
    </div>
    <p align="center">Website by <a target="_blank" href="http://ronanjsmith.com">Ronan Smith</a></p>
  </body>
</html>
