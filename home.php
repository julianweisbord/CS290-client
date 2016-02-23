<!DOCTYPE html>

<?php include "./header.php" ?>

<?php
	if (checkAuth(true) != "") {
?>

<html>
  <head>
    <title>BeaverBooks</title>
    <link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="./bower_components/semantic/dist/semantic.css"/>
		<script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="../CS290-server/server.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>

		$(document).ready(function() {
			$("#bookinfo").accordion({
				collapsible: true;
			});
		});

		</script>
  </head>
  <body>
    <br><br>
    <left class="sitename"> BEAVERBOOKS </left>

    <div>
      <ul class="navbar">
        <li class="active"><a href="./home.php">Home</a></li>
				<li><a href="./yourbooks.php">Your Books</a></li>
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

			<div class="ui relaxed grid">
				<script>
				var prices = [60, 47, 35, 58, 47, 26, 86, 37, 42, 47, 37, 35, 46, 31, 73, 53];
				var i = 0;
				</script>
				<?php
				$x = 21;
				for ($i = 0; $i < 4; $i++) {
				?>
				<div class="four column row">
					<?php
					for ($j = 0; $j < 4; $j++) {
					?>
					<div class="column">
						<div class="ui card books" data-content="Edit" data-variation="basic">
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
							<!--	<i class="dropdown icon"></i> -->
								Contact Info
								<div class="ui divider"></div>
								<div class="content">
									<p>
										<i class="phone icon square" style="zoom:150%"></i>
										<script> document.write("(555) 111-1234") </script>
									</p>
									<p>
										<i class="mail icon square" style="zoom:150%"></i>
										<script> document.write("fakeemail@lolsofake.com") </script>
									</p>
									<p>
										<i class="facebook icon square" style="zoom:150%"></i>
										<script> document.write("-") </script>
									</p>
  							</div>
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

			<script>
			if ($(window).scrollTop() > 150) {
				$('quicknav').removeClass("off");
				$('quicknav').addClass("on");
			}
			else {
				$('quicknav').removeClass("on");
				$('quicknav').addClass("off");
			}
			</script>

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

    </div>
  </body>
</html>

<?php } ?>
