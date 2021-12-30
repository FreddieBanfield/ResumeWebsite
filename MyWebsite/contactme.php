<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Contact Me</title>
  </head>
  <body>
    <div class="header">
      <div class="heading">
        <h1>Contact Me</h1>
        <h4>How to contact me!</h4>
      </div>
      <div class="top-menu">
        <ul>
          <li><a href="index.php">Homepage</a></li>
          <li><a href="aboutme.php">About Me</a></li>
          <li><a href="contactme.php" class="current_page">Contact Me</a></li>
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
        <div id="contact-form" class="enlarge">
          <form action="mailto:freddiebanfield@googlemail.com" method="POST" enctype="multipart/form-data" name="EmailForm">
            Name:<br>
            <input type="text" size="19" name="ContactName">
            <br><br>
            Message:<br>
            <textarea name="ContactComment" rows="6" cols="20">
            </textarea>
            <br><br>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
      <footer>
        <p>Website Created by: Freddie Banfield | Date: 26/10/2021</p>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="myscript.js"></script>
  </body>
</html>
