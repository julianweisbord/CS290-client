<?php include "./header.php" ?>

<?php
	if (checkAuth(true) != "") {
?>

<html>
  <head>
    <title>BeaverBooks</title>
    <link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="./bower_components/semantic/dist/semantic.css"/>
  </head>
  <body>
    <br><br>
    <left class="sitename"> BeaverBooks </left>

  <!--    <div>
        <center><h2><strong>Find a book you need, or sell your old one!</h2></strong></center>
      </div> -->
    <div>
      <ul class="navbar">
        <li class="active"><a href="./index.php">Home</a></li>
  <!--      <li><a href="./login.html">Login</a></li> -->
        <li><a href="./booksell.html">Sell Your Book</a></li>
        <li><a href="./searchpage.html">Search Books</a></li>
        <li><a href="./locationpage.html">Books Near You</a></li>
        <li><a href="./about.html">About</a></li>
        <li style="float:right"><a href="./logout.php">Logout</a></li>
      </ul>

      <div>
        <center><h1>Recent Posts</h1></center>
      </div>

      <div class="textbody">
        <p> This is where we put stuff, like recents </p>
      </div>
    </div>
  </body>
</html>

<?php } ?>
