
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>User Table</title>
  </head>
  <body>
    <div class="header">
      <div class="heading">
        <h1>Users Table</h1>
        <h4>All the users who have signed up!</h4>
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
                    <a href="formandreport.php" class="current_page_dropdown">FORM and REPORT</a>
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
<?php
    //session_start();

        //Set database variables
        $servername = "localhost";
        $username = "root";
        $password = "wta7CRrVayri";
        $database = "FBWebsite";
        $sql = "SELECT * FROM users;";

        //connect to server and select database
        $mysqli = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$mysqli) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        
        //Query the table
        $result = mysqli_query($mysqli, $sql) or die(print mysqli_error($mysqli));
        
        //get the number of rows in the result set; should be 1 if a match
        if (mysqli_num_rows($result) >= 1) {
            
            //Print the heading of the table
            echo "
                <table class=\"form-table\">
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Start Date</th>
                    </tr>
            ";
            
            //Print out table data
            while ($row = mysqli_fetch_array($result)) {
                
                $username = stripslashes($row['username']);
                $password = stripslashes($row['password']);
                $fname = stripslashes($row['first_name']);
                $lname = stripslashes($row['last_name']);
                $email = stripslashes($row['email']);
                $startDate = stripslashes($row['start_date']);
                echo "
                        <tr>
                            <td>$username</td>
                            <td>$password</td>
                            <td>$fname</td>
                            <td>$lname</td>
                            <td>$email</td>
                            <td>$startDate</td>
                        </tr>
                            
                ";
            }
            //Close table
            echo "</table>";
        }else{
            echo "No output, check the sql query!";
        }
        
        //set authorization cookie using curent Session ID
	setcookie("auth", session_id(), time()+60*30, "/", "", 0);
        
        //End connection with database
        $mysqli->close();
?>
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
