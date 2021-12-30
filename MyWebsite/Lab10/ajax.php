<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Ajax</title>
  </head>
  <body>
    <div class="header">
      <div class="heading">
        <h1>Ajax Example</h1>
        <h4>This is my Ajax Example!</h4>
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
                    <a href="ajax.php" class="current_page_dropdown">AJAX GET versus POST</a>
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
        <div id="hide_ajax_content" style="display:none;">
         <div class="profile enlarge">
             <div id="ready1"></div>
         </div>
         <div class="profile enlarge">
             <div id="ready2"></div>
         </div> 
         <div class="profile enlarge">
             <div id="ready3"></div>
         </div>
         <div class="profile enlarge">
             <div id="ready4"></div>
         </div>
         <div class="profile enlarge">
             <div id="callback"></div>
         </div>
        </div>
        <div class="profile enlarge">
            <div id="henryFord">
                <button type="button" onclick="ajaxPost()">Post "Henry Ford" to Database</button>
            </div>
         </div>
        <div class="profile enlarge">
            <div id="end">
                <button type="button" onclick="runDocument()">Load Text-file Via Ajax</button>
            </div>
        </div>
      </div>
      <footer>
        <p>Website Created by: Freddie Banfield | Date: 26/10/2021</p>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type = "text/javascript"  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
      <script>
        function runDocument(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            $("#hide_ajax_content").css("display", "block");
                if (this.readyState === 1 ) {
                    document.getElementById("ready1").innerHTML =
                    "Readystate = 1 and server connection established";
                }
                if (this.readyState === 2 ) {
                    document.getElementById("ready2").innerHTML =
                    "Readystate = 2 and Request has been received.";
                }
                if (this.readyState === 3 ) {
                    document.getElementById("ready3").innerHTML =
                    "Readystate = 3 and Request is being processed.";
                }
                if (this.readyState === 4 ) {
                    document.getElementById("ready4").innerHTML =
                    "Readystate = 4 and Request finished and Response is ready. ";
                }
                if (this.readyState === 4 && this.status === 200) {
                   document.getElementById("end").innerHTML =
                   this.responseText;
                   document.getElementById("callback").innerHTML = "THIS IS THE CALLBACK!!!!"
                }
                };
                xhttp.open("GET", "responsetext.txt", true);
                xhttp.send();
        }
        
        //Posts henry ford to database
        function ajaxPost(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
                window.alert("New user added: HenryFord" + usernameNum);
              }
            };
            //Creates a random number
            let usernameNum = Math.floor(Math.random() * (9999-1000) + 1000);
            var output = "username=HenryFord" + usernameNum + "&fname=Henry&lname=Ford&password=letmein&email=henryford@gmail.com";
            xhttp.open("POST", "formvalidation.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(output);
        }
        
        //Ajax callback function!
        function greeting(name) {
          alert('Hello ' + name);
        }

        function processUserInput(callback) {
          var name = prompt('Please enter your name.');
          callback(name);
        }

        processUserInput(greeting);
      </script>
  </body>
</html>
