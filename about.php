<!DOCTYPE html>
<html>
  <head>
    <title>About</title>
    <link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="./bower_components/semantic/dist/semantic.css"/>
  </head>
  <body>
    <br><br>
    <left class="sitename">BEAVERBOOKS</left>

    <center><ul class="navbar">
      <li><a href="./home.php">Home</a></li>
      <li><a href="./yourbooks.php">Your Books</a></li>
      <li><a href="./booksell.php">Sell A Book</a></li>
      <li><a href="./searchpage.php">Search Books</a></li>
      <li><a href="./locationpage.php">Books Near You</a></li>
      <li class="active"><a href="./about.php">About</a></li>
      <li style="float:right"><a href="./logout.php">Logout</a></li>
    </ul></center>

    <center><h1>About</h1></center>

    <div class="ui divider"></div>

      <center><div class="textbody">
        <h2><u>Creators</u></h2>
        <h3>Julian Weisbord</h3>
        <h3>Bradley Imai</h3>
        <h3>Omeed Habibelahian</h3>
        <h3>Benny Wick</h3>
        <h3>Andrew Davis</h3>
        <h3>Brennan Giles</h3>

        <br>

        <h2><u>About the Creators</u></h2>
        <h3>We are all undergrad students taking a Web Development course at Oregon State University.</h3>
        <br>
        <div id="map"></div>
        <script>
        function initMap() {
          var myLatLng = {lat: 44.5638754, lng: -123.2798948};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Where We Are From'
          });
        }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
          async defer></script>

        <br>
      </div></center>




    </div>


  </body>
</html>
