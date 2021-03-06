<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link href="http://allfont.net/allfont.css?fonts=freestyle-script-normal" rel="stylesheet" type="text/css" />

    <title>Emma Watt Art</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="EWA.css">
    <style>
      body {font-family: "Bungee", Arial, sans-serif}
      #bg{opacity: 0.1;}
      .title{text-align: center; font-family: "Raleway", Arial, sans-serif; font-size: 130px;}
      #subtitle{text-align: center;}
      .w3-row img {margin-bottom: -8px}
      @media screen and (max-width: 600px){
        .title{font-size: 50px;}
      }
      body, html {
        height: 100%;
        margin: 0;
      }

      .bgimg {
          background-image: url('images/photography/reddoor-faded.png');
          height: 100%;
          background-position: center;
          background-size: cover;
          position: relative;
          color: black;
          font-size: 20px;
      }

      .middle {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
          width: 100%;
      }

    </style>
  </head>
  <body>
     <!-- background="images/photography/reddoor-faded.png -->
    <?php
      session_start();
      session_destroy();
    ?>
    <div class="bgimg">
      <div class="middle">
        <h1 class="title" style="font-family: Raleway;"><b id="typewriter"></b></h1>
        <h3 id="subtitle" style="font-family: Raleway">Mixed media contemporary art work by Emma Watt.</h3>
        <h3 id="subtitle" style="font-family: Raleway"><a href="home.php">Enter</a></h3>
      </div>
    </div>
    <script>
        /** Title, displayed using typewriter effect */
        /** Copied and modified from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_typewriter [Last Accessed 19th December 2017]. */
        var i     = 0;
        var fact  = 'Emma Watt Art';
        var speed = 120;

         function typeWriter() {
           if (i < fact.length) {
             document.getElementById("typewriter").innerHTML += fact.charAt(i);
             i++;
               setTimeout(typeWriter, speed);
             }
         }
         typeWriter();
       </script>
  </body>
