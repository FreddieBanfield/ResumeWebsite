<?php
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>JQuery</title>
  </head>
  <body>
    <div class="header">
      <div class="heading">
        <h1>JQuery Examples</h1>
        <h4>This is my JQuery example!</h4>
      </div>
      <div class="top-menu">
        <ul>
          <li><a href="../index.php">Homepage</a></li>
          <li><a href="../aboutme.php">About Me</a></li>
          <li><a href="../contactme.php">Contact Me</a></li>
          <li><a href="../mytranscript.php">My Transcript</a></li>
          <li style="position: absolute; right: 10em;">
            <div class="dropdown">
                <a href="#">Lab 10</a>
                  <div class="dropdown-content">
                    <a href="formvalidation.php">FORM Validation</a>
                    <a href="formandreport.php">FORM and REPORT</a>
                    <a href="ajax.php">AJAX GET versus POST</a>
                    <a href="../Freddie_Banfield_Resume_2021.pdf" target="_blank">My Resume</a>
                    <a href="https://www.linkedin.com/in/freddie-banfield-9508a69a/" target="_blank">My Linked In Account</a>
                    <a href="https://freddiebanfield.wordpress.com/" target="_blank">My Wordpress Blog</a>
                    <a href="myjquery.php" class="current_page_dropdown">My JQuery Demo</a>
                    <a href="myotherprojects.php">My Other Projects</a>
                  </div>
            </div>
          </li>
        </ul>
      </div>
      </div>
      <div class="body">
          <div class="profile">
            <h1 class="btn_click enlarge">Show/Hide!</h1>
            <h3 class="hide_show center-text" style="display:none;">Jquery is a higher order library for javascript</h3>
            <br><br>
            <h1 class="btn_fade enlarge">FadeIn/FadeOut!</h1>
            <h3 class="hide_show_fade center-text" style="display:none;">Jquery is a higher order library for javascript</h3>
          </div>
      </div>
      <footer>
        <p>Website Created by: Freddie Banfield | Date: 26/10/2021</p>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type = "text/javascript"  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
      <script>
          $(".btn_click").click(function() {
                      $(".hide_show").toggle();
          });
          $(".btn_fade").click(function() {
                      $(".hide_show_fade").fadeToggle("slow");
          });
      </script>
  </body>
</html>
