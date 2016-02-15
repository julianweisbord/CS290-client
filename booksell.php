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
      <li><a href="./yourbooks.php">Your Books</a></li>
      <li class="active"><a href="./booksell.php">Sell A Book</a></li>
      <li><a href="./searchpage.php">Search Books</a></li>
      <li><a href="./locationpage.php">Books Near You</a></li>
      <li><a href="./about.php">About</a></li>
      <li style="float:right"><a href="./logout.php">Logout</a></li>
    </ul>

    <center><h1> Sell Your Book </h1></center>

    <div class="ui divider"></div>

    <div class="textbody">

      <div class="ui form">
        <div class="fields">
          <div class="field">
            <label>Subject</label>
            <input type="text" placeholder="e.g. MTH or math">
          </div>
          <div class="field">
            <label>Course Number</label>
            <input type="text" placeholder="e.g. 111">
          </div>
          <div class="field">
            <label>Book Title</label>
            <input type="text" placeholder="Book Title">
          </div>
          <div class="field">
            <label>Author</label>
            <input type="text" placeholder="Author">
          </div>
          <div class="field">
            <label>Price</label>
            <input type="text" placeholder="Price">
          </div>
        </div>
        <div>
          <label>Photos</label>
          <div class="ui card">
            <div class="image">
              <img src="http://semantic-ui.com/images/wireframe/image.png">
            </div>
            <div class="extra content">
              <a>
                <i class="plus icon"></i>
                Add Photo
              </a>
            </div>
          </div>
          <div class="grouped fields">
            <label>Book Condition:</label>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="condition">
                <label>Excellent</label>
              </div>
            </div>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="condition">
                <label>Good</label>
              </div>
            </div>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="condition">
                <label>Fair</label>
              </div>
            </div>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="condition">
                <label>Poor</label>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Book Description</label>
            <input type="text">
          </div>
        </div>

        <br>
        <button class="ui positive button">
          <p>Submit</p>
        </button>
      </div>

    </div>

  </body>
</html>
