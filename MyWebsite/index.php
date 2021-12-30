<?php
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
  </head>
  <body>
    <div class="header">
      <div class="heading">
        <h1>Homepage</h1>
        <h4>This is Freddie Banfields Website!</h4>
      </div>
      <div class="top-menu">
        <ul>
          <li><a href="index.php" class="current_page">Homepage</a></li>
          <li><a href="aboutme.php">About Me</a></li>
          <li><a href="contactme.php">Contact Me</a></li>
          <li><a href="mytranscript.php">My Transcript</a></li>
          <li style="position: absolute; right: 10em;">
            <div class="dropdown">
                <a href="#">Lab 10</a>
                  <div class="dropdown-content">
                    <a href="Lab10/formvalidation.php">FORM Validation</a>
                    <a href="Lab10/formandreport.php">FORM and REPORT</a>
                    <a href="Lab10/ajax.php">AJAX GET versus POST</a>
                    <a href="Freddie_Banfield_Resume_2021.pdf" target="_blank">My Resume</a>
                    <a href="https://www.linkedin.com/in/freddie-banfield-9508a69a/" target="_blank">My Linked In Account</a>
                    <a href="https://freddiebanfield.wordpress.com/" target="_blank">My Wordpress Blog</a>
                    <a href="Lab10/myjquery.php">My JQuery Demo</a>
                    <a href="Lab10/myotherprojects.php">My Other Projects</a>
                  </div>
            </div>
          </li>
        </ul>
      </div>
      </div>
      <div class="body">
        <div class="profile enlarge">
          <p>
            <a href="https://www.facebook.com/Freddie.C.Banfield">Facebook</a>
          </p>
        </div>
        <div class="profile enlarge">
          <p>
            <a href="https://www.linkedin.com/in/freddie-banfield-9508a69a/">LinkedIn</a>
          </p>
        </div>
        <div class="profile enlarge">
          <p>
            <a href="https://github.com/FreddieBanfield?tab=repositories">Github</a>
          </p>
        </div>
      </div>
      <footer>
        <p>Website Created by: Freddie Banfield | Date: 26/10/2021</p>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type = "text/javascript"  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
      <script src="myscript.js"></script>
  </body>
</html>
