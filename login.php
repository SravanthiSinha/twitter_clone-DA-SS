<!DOCTYPE html>

<html lang="en" xml:lang="en">

<head>
    <title>Dan and Sravanthi's Twitter Clone Adventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS style sheet -->
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/mediaqueryhigh.css">
    <link rel="stylesheet" href="styles/mediaquerymid.css">
    <link rel="stylesheet" href="styles/mediaquerylow.css">
    <!-- CSS style sheet -->
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="images/leaf_960_720.png">
    <!-- Fav Icon -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container">
        <header class="header" style="top:0px;">
            <div class="top-header">
                <div class="logo-wrapper">
                    <img class="logo" src="images/leaf_960_720.png" alt="Logo">
                    <div class="tagline">Nexus of people</div>
                </div>
            </div>
        </header>

        <main>
            <h2>Login:</h2>
            <form class="form-horizontal" method="post" action="index.php" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Name">Name:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="email" placeholder="Enter User Name" name="login">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                </div>
                <!--  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </main>
        <footer class="footer" style="bottom:0px;">
            <nav class="nav-hide">
                <!--  <a href="maps.html" class="navButton nav-bottom"> We are Here </a>-->
            </nav>
            <span class="author-info">Created by : Daniel Alzugaray & Sravanthi Sinha </span>
        </footer>


    </div>
</body>

</html>