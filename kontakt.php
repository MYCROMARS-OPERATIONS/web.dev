<!DOCTYPE html>
<!--Language:-->
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Seiten Infos:-->
  <title>MMO-WDE::Kontakt</title>
  <meta name="description" content="Web Development Examples">
  <meta name="Autor" content="Alexander Rudi">
  <meta name="copyright" content="MYCROMARS OPERATIONS">
  <link rel="icon" type="x-icon" href="favicon.ico">
  <!--CSS Datei:-->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!--Menu 1-->
  <nav class="navi">
    <ul class="navi_list">
      <li> <a href="index.html" class="navi_link">Start</a> </li>
      <li> <a href="html.html" class="navi_link">HTML</a> </li>
      
      <li> <a href="kontakt.html" class="navi_link--current navi_link">Kontakt</a> </li>
    </ul>
  </nav>

  <header>
    <!--Logo-->
    <div class="site_header">
      <div class="header_logo">
        <a href="index.html">
          <img src="images/logo.png" alt="Logo" width="199" height="199">
       
        </a>
      </div>
      <div class="header_title">
        <h1>MYCROMARS OPERATIONS</h1>
        <h2>Software Developer</h2>
      </div>
    </div>
  </header>

  <main class="main_content">

    <!--Artikel 1-->
    <article class="content">

      <header class="content_header">
        <h2 class="contact_title">Kontakt</h2>
      </header>

      <figure class="text-align">
        <div class="contact_address">
          <strong>Alexander Rudi </strong>| Software Developer
        </div>
        <?php
        if (isset($_POST["submit"])) {
          mail(
            "mail@mycromars-operations.com",
            "Kontaktformular",
            'Name: ' . $_POST["name"] .
            ' Email: ' . $_POST["email"] .
            ' Nachricht: ' . $_POST["message"]
          );
        ?>
          <h3 style="color: rgb(135, 254, 130)">Die Email wurde versendet!</h3>
        <?php
          }
        ?>
      </figure>

      <div class="contact_form">
        <form action="kontakt.php" method="post">
          <h2 class="contactform_title">Senden Sie eine Nachricht</h2>
          <input type="text" name="name" placeholder="Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <textarea name="message" cols="20" rows="5" placeholder="Ihr Text..." required></textarea>

          <!-- button 2 -->
          <button id="b2" type="submit" name="submit">Senden</button>

          <!-- Input -->
          <input id="i" type="text" placeholder="Activiere JavaScript!">

          <!-- button 1 -->
          <button id="b1">ok</button>

          <script>
            var num1 = 0;
            var num2 = 0;
            var sum = 0;

            // Random ------------------------------------------
            function randomInt(min, max) {
              var numOfValues = max - min + 1;
              var randomNum = Math.random();
              var randomVal = randomNum * numOfValues;
              var roundedRandomVal = Math.floor(randomVal);

              num1 = min + roundedRandomVal;
              num2 = num1 + 4;
              sum = num1 + num2;
            }
            randomInt(0, 10);

            // Output ------------------------------------------
            document.getElementById("i").placeholder = "Was ist " + num1 + " + " + num2 + " = ?";

            // Check Button 1 ------------------------------------------
            var mySubmit = document.getElementById("b1");
            mySubmit.addEventListener('click', function(e) {
              e.preventDefault();
              var myInput = document.getElementById('i').value;

              // Check Input ------------------------------------------
              if (myInput == sum) {
                document.getElementById("b1").style.visibility = "hidden";
                document.getElementById("b2").style.visibility = "visible";
                document.getElementById("i").style.visibility = "hidden";
              }
            });
          </script>
        </form>
      </div>

    </article>

  </main>

  <!--Footer/Menu 2-->
  <footer class="footer_content">
    <nav class="footer_navi">
      <ul class="footer_navi_list">
        <li> <a href="impressum.html" class="navi_link">Impressum</a> </li>
        <li> <a href="datenschutz.html" class="navi_link">Datenschutz</a> </li>
        <li> <a href="#top" class="navi_link">Scroll up</a></li>
      </ul>
    </nav>
    <p id="copyright"> &copy; MYCROMARS OPERATIONS e. U.</p>
  </footer>

  <!--Copyright-->
  <script src="script/copyright.js"></script>

</body>

</html>