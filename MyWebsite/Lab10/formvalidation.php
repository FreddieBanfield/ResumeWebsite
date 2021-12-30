<?php
    //session_start();
    if ((filter_input(INPUT_POST, 'username'))){
        //Set database variables
        $servername = "localhost";
        $username = "root";
        $password = "wta7CRrVayri";
        $database = "FBWebsite";
        
        //Insert username SQL query string
        $sqlinsert = "INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `email`, `start_date`)
                      VALUES ('" . filter_input(INPUT_POST, 'username') . "', PASSWORD('" . filter_input(INPUT_POST, 'password') . "'), '" . filter_input(INPUT_POST, 'fname') . "', '" . filter_input(INPUT_POST, 'lname') . "', '" . filter_input(INPUT_POST, 'email') . "', current_timestamp());";
        
        //connect to server and select database
        $mysqli = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$mysqli) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        
        //Query the table
        mysqli_query($mysqli, $sqlinsert) or die(print mysqli_error($mysqli));
        
        //End connection with database
        $mysqli->close();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Form</title>
  </head>
  <body>
    <div class="header">
      <div class="heading">
        <h1>Form Validation</h1>
        <h4>Please complete the form!</h4>
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
                    <a href="formvalidation.php" class="current_page_dropdown">FORM Validation</a>
                    <a href="formandreport.php">FORM and REPORT</a>
                    <a href="ajax.php">AJAX GET versus POST</a>
                    <a href="../Freddie_Banfield_Resume_2021.pdf" target="_blank">My Resume</a>
                    <a href="https://www.linkedin.com/in/freddie-banfield-9508a69a/" target="_blank">My Linked In Account</a>
                    <a href="https://freddiebanfield.wordpress.com/" target="_blank">My Wordpress Blog</a>
                    <a href="myjquery.php">My JQuery Demo</a>
                    <a href="myotherprojects.php">My Other Projects</a>
                  </div>
            </div>
          </li>
        </ul>
      </div>
      </div>
      <div class="body">
        <div id="form-indent">
            <div id="contact-form" class="enlarge">
              <form action="formvalidation.php" method="POST" onsubmit="return userValidateForm()" name="adduser">
                Username:<br>
                <input type="text" size="25" name="username" required>
                <br><br>
                Password:<br>
                <input type="password" size="25" name="password" required>
                <br><br>
                First Name:<br>
                <input type="text" size="25" name="fname">
                <br><br>
                Last Name:<br>
                <input type="text" size="25" name="lname">
                <br><br>
                Email:<br>
                <input type="text" size="50" name="email">
                <p id="email"></p>
                <br><br>
                <input type="submit" value="Submit">
              </form>
              <button style="margin-top: 16px;"><a href="./formandreport.php">Show me the users!</a></button>
           </div>
        </div>
      </div>
      <footer>
        <p>Website Created by: Freddie Banfield | Date: 26/10/2021</p>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type = "text/javascript"  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
      <script type = "text/javascript"  src="formvalidation.js"></script>
  </body>
</html>
