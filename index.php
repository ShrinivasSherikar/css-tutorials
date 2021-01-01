<?php session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
      
      <script src="script.js" defer></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tools</title>
    </head>
    <body>
      <nav class="navbar">
        <div class="brand-title"><a href="index.php">Tools</a></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="tools.html">Tool</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </body>
</html>