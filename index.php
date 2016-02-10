<?php
session_start();


function checkAuth($doRedirect) {
	if (isset($_SESSION["onidid"]) && $_SESSION["onidid"] != "") return $_SESSION["onidid"];

	 $pageURL = 'http';
	 if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
	 }

	$ticket = isset($_REQUEST["ticket"]) ? $_REQUEST["ticket"] : "";

	if ($ticket != "") {
		$url = "https://login.oregonstate.edu/cas/serviceValidate?ticket=".$ticket."&service=".$pageURL;
		$html = file_get_contents($url);
		$pattern = '/\\<cas\\:user\\>([a-zA-Z0-9]+)\\<\\/cas\\:user\\>/';
		preg_match($pattern, $html, $matches);
		if ($matches && count($matches) > 1) {
			$onidid = $matches[1];
			$_SESSION["onidid"] = $onidid;
			return $onidid;
		}
	} else if ($doRedirect) {
		$url = "https://login.oregonstate.edu/cas/login?service=".$pageURL;
		echo "<script>location.replace('" . $url . "');</script>";
	}
	return "";
}

?>


<?php
	if (checkAuth(true) != "") {
?>

<html>
  <head>
    <title>BeaverBooks</title>
    <link type="text/css" rel="stylesheet" href="../css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="../bower_components/semantic/dist/semantic.css"/>
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
