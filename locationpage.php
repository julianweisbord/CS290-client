<script src="./js-samples/markeranimations/markeranimations.html"></script>

<html>
  <head>
    <title>Books Near You</title>
    <link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="./bower_components/semantic/dist/semantic.css"/>
  </head>
  <body>
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
    <br><br>
    <left class="sitename">BEAVERBOOKS</left>

    <ul class="navbar">
      <li><a href="./home.php">Home</a></li>
      <li><a href="./yourbooks.php">Your Books</a></li>
      <li><a href="./booksell.php">Sell Your Book</a></li>
      <li><a href="./searchpage.php">Search Books</a></li>
      <li class="active"><a href="./locationpage.php">Books Near You</a></li>
      <li><a href="./about.php">About</a></li>
      <li style="float:right"><a href="./logout.php">Logout</a></li>

    </ul>

    <center><h1> Books Near You </h1></center>

    <div class="ui divider"></div>

    <div class="textbody">
      <center><p>Here we will use the google maps api with updates to the locations of
        where people are selling their books</p>

        <button class="ui positive button">Current Location</button>
        <br><br>
        <div class="ui basic label">OR</div>
        <br><br>
        <div class="ui form">
          <div class="four wide field">
            <label>Zip Code</label>
            <input type="text" placeholder="Zip Code">
          </div>
					<button class="ui positive button">Submit</button>
        </div></center>
    </div>
    <br>

		<script>
		$("button:last").click(function() {makemap()});

		function makemap() {
			var markers = [];

			var stockholm = new google.maps.LatLng(59.312608,18.070107);
			var mapOptions = {
				zoom: 12,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: stockholm
			};

			var map = new google.maps.Map(document.getElementById("map_canvas"),
							mapOptions);

			function drop5() {
				var sw = map.getBounds().getSouthWest();
				var ne = map.getBounds().getNorthEast();
				for (var i = 0; i < 5; i++) {
					setTimeout(function() {
						var lat = Math.random() * (ne.lat() - sw.lat()) + sw.lat();
						var lng = Math.random() * (ne.lng() - sw.lng()) + sw.lng();
						markers.push(new google.maps.Marker({
							position: new google.maps.LatLng(lat, lng),
							map: map,
							draggable: true,
							animation: google.maps.Animation.DROP
						}));
					}, i * 200);
				}
			}
			document.getElementById("drop5").onclick = drop5;

			document.getElementById("bounce").onclick = function() {
				for (var i = 0; i < markers.length; i++) {
					markers[i].setAnimation(google.maps.Animation.BOUNCE);
				}
			};

			document.getElementById("stop").onclick = function() {
				for (var i = 0; i < markers.length; i++) {
					markers[i].setAnimation(null);
				}
			};

			google.maps.event.addListenerOnce(map, 'tilesloaded', drop5);
		}
		</script>

  </body>
</html>
