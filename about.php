<!-- Emma Watt Art - About Page.
  -->
<!DOCTYPE html>
<html>
  <head>
    <title>Emma Watt Art - About</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <style>
      body {font-family: "Raleway", Arial, sans-serif}
      footer {font-family: "Raleway", Arial, sans-serif}
      #title{font-family: "Raleway", Arial, sans-serif; font-size: 30px;}
      .w3-row img {margin-bottom: -8px}
      .form{
        margin:auto;
        width:60%;
      }
      @media screen and (max-width: 600px){
        .form{
          width: 90%;
        }
      }
    </style>
  </head>
  <body>
    <?php
      session_start();
    ?>
    <!-- Header -->
    <header class="w3-container w3-xlarge w3-padding-24">
      <a href="home.php" class="w3-left w3-button w3-white" id="title"><b>Emma Watt Art</b></a>
      <a class="w3-right w3-button w3-white">About</a>
      <a href="portfolio.php" class="w3-right w3-button w3-white">Portfolio</a>
    </header>

    <!-- Footer / About Section -->
    <footer class="w3-light-grey w3-padding-16 w3-center" id="about">
      <h1 style="font-family: Raleway">Artist Information</h1>
      <h2 style="font-family: Raleway">-</h2>
      <img src="images/Shambles2.jpg" class="w3-image w3-padding-64" width="300" height="300">
      <form class="form" method="post" name="emailform" action="PHP/email.php" target="_blank">
        <p align="left">
          My interest in art was from an early age, where it was a mixture of inspirations from people such as my mother and
          gran portraying their creative skills in contrasting ways. My mother loved to draw & paint, whereas my gran loved
          textiles, materials, cake design, sewing & knitting as they both still do to this day.
        </p>
        <p align="left">
          From my own experiences with art and my personal creative industries, I find that I like to explore mixed mediums of
          all sorts, depending on the projects and the new opportunities that have arisen so far throughout my artistic lifestyle.
        </p>
        <p align="left">
          I currently undertake an Honors Degree of ‘Contemporary Art Practice’ at ‘Robert Gordon University’; where I have come
          to be introduced to many new materials to explore. For example, even though I had briefly been introduced to the
          minimalistic values for printmaking, within university I have been provided with the great opportunities to extend
          my knowledge further by learning about my two favorite processes; Silk Screen Printing & Lithography printing.
          As well as this, I have been exposed to the dark room antics and the true nature behind photography, which in my opinion
          are wonderful.
        </p>
        <p align="left">
          Throughout my growing portfolio, my will audiences become exposed to my understanding and precision of the human body, emotions & sexual pretentions. I take a wide interest in not just feminism, but the beauty of the world and how we as humans devote our lives to it.
        </p>
        <p>View Emma Watt Art on Instagram:
          <a target="_blank" href="https://www.instagram.com/wattcap21/"><img src="images/instagram.jpg" class="w3-image w3-padding-32" width="20" height="20"></a>
        </p>
        <?php
          if(!isset($_SESSION['sent']))
          {
            echo "<p class='w3-large w3-text-pink'>For any enquiries, or if you would just like a chat, don't hesitate to contact me below!</p>";
          }
          else
          {
              if($_SESSION['sent'] == true)
              {
                  echo "<p class='w3-large w3-text-green'>Your message has been sent, thank you!</p>";
              }
              else
              {
                  echo "<p class='w3-large w3-text-red'>There was a problem sending your message, please try again later.</p>";
              }
          }
        ?>
        <div class="w3-section" id="input-box">
          <label><b>Name</b></label>
          <input class="w3-input w3-border" type="text" required name="Name">
        </div>
        <div class="w3-section" id="input-box">
          <label><b>Your Email</b></label>
          <input class="w3-input w3-border" type="email" required name="Email">
        </div>
        <div class="w3-section" id="input-box">
          <label><b>Message</b></label>
          <textarea class="w3-input w3-border" required name="Message"></textarea>
        </div>
        <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
      </form>
      <br>
    </footer>
    <p align="center">Website by <a target="_blank" href="http://ronanjsmith.com">Ronan Smith</a></p>
  </body>
