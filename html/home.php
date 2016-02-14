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
				<li><a href="./yourbooks.html">Your Books</a></li>
        <li><a href="./booksell.html">Sell A Book</a></li>
        <li><a href="./searchpage.html">Search Books</a></li>
        <li><a href="./locationpage.html">Books Near You</a></li>
        <li><a href="./about.html">About</a></li>
        <li style="float:right"><a href="./logout.php">Logout</a></li>
      </ul>

      <div>
        <center><h1>Recent Posts</h1></center>
      </div>

			<div class="ui divider"></div>

			<div class="ui relaxed grid books">
				<script>
				var prices = [60, 47, 35, 58, 47, 26, 86, 37, 42, 47, 37, 35, 46, 31, 73, 53];
				var i = 0;
				</script>
				<?php
				$x = 13;
				for ($i = 0; $i < 4; $i++) {
				?>
				<div class="four column row">
					<?php
					for ($j = 0; $j < 4; $j++) {
					 ?>
					<div class="column">
						<div class="ui card books" data-content="Edit" data-variation="basic">
							<div class="image crop">
								<img src="http://cdn.innovativelanguage.com/wordlists/media/thumb/14441_fit512.jpg">
							</div>
							<div class="content">
								<div class="header">Example Book</div>
								<div class="meta">
									<span class="date">Posted: February <?php echo($x) ?>, 2016</span>
								</div>
								<div class="description">
									Book description goes here.
								</div>
								<h3>$<script> document.write(prices[i]) </script></h3>
							</div>
							<div class="extra content">
								<a><b>View Book</b></a>
							</div>
						</div>
					</div>
					<script> i++ </script>
					<?php	} ?>
				</div>
				<?php
				$x--;
				}
				?>
			</div>

			<div class="quicknav">
				<a href="./booksell.php">
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
				<a href="./searchpage.php">
					<button class="circular ui icon button three">
						<i class="search icon"></i>
						<p>Search</p>
					</button>
				</a>
				<a href="./locationpage.php">
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
