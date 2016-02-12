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
    <left class="sitename"> BEAVERBOOKS </left>

  <!--    <div>
        <center><h2><strong>Find a book you need, or sell your old one!</h2></strong></center>
      </div> -->
    <div>
      <ul class="navbar">
        <li class="active"><a href="./home.php">Home</a></li>
				<li><a href="./yourbooks.php">Your Books</a></li>
        <li><a href="./booksell.php">Sell A Book</a></li>
        <li><a href="./searchpage.php">Search Books</a></li>
        <li><a href="./locationpage.php">Books Near You</a></li>
        <li><a href="./about.php">About</a></li>
        <li style="float:right"><a href="./logout.php">Logout</a></li>
      </ul>

      <div>
        <center><h1>Recent Posts</h1></center>
      </div>

			<div class="ui divider"></div>

      <div class="textbody">
        <center><p> This is where we put stuff, like recents </p></center>
      </div>
			<br>

			<div align="right" position="absolute">
				<a href="./booksell.html">
					<button class="circular ui icon button one">
						<i class="plus icon"></i>
						<p>Sell A Book</p>
					</button>
				</a>
				<a href="yourbooks.html">
					<button class="circular ui icon button two">
						<i class="book icon"></i>
						<p>Your Books</p>
					</button>
				</a>
				<a href="searchpage.html">
					<button class="circular ui icon button three">
						<i class="search icon"></i>
						<p>Search</p>
					</button>
				</a>
				<a href="locationpage.html">
					<button class="circular ui icon button four">
						<i class="location arrow icon"></i>
						<p>Near You</p>
					</button>
				</a>
			</div>

    </div>
  </body>
</html>

<?php } ?>
