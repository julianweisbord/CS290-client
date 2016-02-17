<!DOCTYPE html>

<html>
  <head>
    <title>Sell Your Book</title>
    <link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="./bower_components/semantic/dist/semantic.css"/>
  </head>
  <body>
    <br><br>
    <left class="sitename">BEAVERBOOKS</left>

    <ul class="navbar">
      <li><a href="./home.php">Home</a></li>
      <li class="active"><a href="./yourbooks.php">Your Books</a></li>
      <li><a href="./booksell.html">Sell A Book</a></li>
      <li><a href="./searchpage.html">Search Books</a></li>
      <li><a href="./locationpage.html">Books Near You</a></li>
      <li><a href="./about.html">About</a></li>
      <li style="float:right"><a href="./logout.html">Logout</a></li>
    </ul>

    <center><h1> Your Books </h1></center>

    <div class="ui divider"></div>

		<div class="ui relaxed grid books">
			<script>
			var prices = [35, 30, 45, 60];
			var dates = [13, 13, 13, 9];
			var i = 0;
			</script>
			<div class="four column row">
				<?php
				for ($x = 0; $x < 4; $x++) {
				?>
				<div class="column">
					<div class="ui card books" data-content="Edit" data-variation="basic">
						<div class="content">
							<div class="header">Example Book <script> document.write(i+1) </script></div>
							<div class="meta">
								<span class="date">Posted: February <script> document.write(dates[i]) </script>, 2016</span>
							</div>
							<div class="description">
								Book description goes here.
							</div>
							<h3>$<script> document.write(prices[i]) </script></h3>
						</div>
						<div class="extra content">
							<a><b>Edit</b></a>
						</div>
					</div>
				</div>
				<script> i++ </script>
				<?php } ?>
			</div>
		</div>

		<br>

    <div class="quicknav">
      <a href="./booksell.html">
        <button class="circular ui icon button one">
          <i class="plus icon"></i>
          <p>Sell A Book</p>
        </button>
      </a>
      <a href="./yourbooks.php">
        <button class="circular ui icon button two">
          <i class="book icon"></i>
          <p>Your Books</p>
        </button>
      </a>
      <a href="./searchpage.html">
        <button class="circular ui icon button three">
          <i class="search icon"></i>
          <p>Search</p>
        </button>
      </a>
      <a href="./locationpage.html">
        <button class="circular ui icon button four">
          <i class="location arrow icon"></i>
          <p>Near You</p>
        </button>
      </a>
    </div>

  </body>
</html>
