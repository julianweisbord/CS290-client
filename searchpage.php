

<html>
  <head>
    <title>Search</title>
    <link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
    <link type="text/css" rel="stylesheet" href="./bower_components/semantic/dist/semantic.css"/>
  </head>
  <body>
    <br><br>
    <left class="sitename">BEAVERBOOKS</h1></left>

    <ul class="navbar">
      <li><a href="./home.php">Home</a></li>
      <li><a href="./yourbooks.php">Your Books</a></li>
      <li><a href="./booksell.php">Sell A Book</a></li>
      <li class="active"><a href="./searchpage.php">Search Books</a></li>
      <li><a href="./locationpage.php">Books Near You</a></li>
      <li><a href="./about.php">About</a></li>
      <li style="float:right"><a href="./logout.php">Logout</a></li>

    </ul>

    <center><h1> Search Books </h1></center>

    <div class="ui divider"></div>

      <div class="textbody">
        <center><p>Here we will let the user search for the book they want,
        with multiple forms and options for how they want to search.
        The results will be displayed on the same page below these fields</p></center>
        <br>

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
          </div>
          <button class="ui positive button">
            <p>Search</p>
          </button>
        </div>

      </div>
      <br>

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

  </body>
</html>
