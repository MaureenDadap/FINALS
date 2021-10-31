<?php
session_start();
?>

<html>
<head>
  <title> Home | Le Comscie' </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url('images/Logo.jpg');background-size:cover;">
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button>
  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Le Comscie'</a>
      </div>

      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
        </ul>

        <?php
        if (isset($_SESSION['login_user1'])) {

        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else if (isset($_SESSION['login_user2'])) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                (<?php
                  if (isset($_SESSION["cart"])) {
                    $count = count($_SESSION["cart"]);
                    echo "$count";
                  } else
                    echo "0";
                  ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>
  <div>
    <div style="position:relative;text-align:center">
      <img src="images/bulldog.png" alt="NU LOGO" width="80px" height="80px" style="border-radius:100%;margin-top:80px;">
    </div>
  </div>

  <div class="wide">
    <div class="col-xs-5 line">
      <hr>
    </div>
    <div class="col-xs-5 line">
      <hr>
    </div>
    <div style="color: rgb(1, 1, 85);" class="tagline">Eat Right, Food is Life.</div>
  </div>
  <br>
  <div style="height:500px;margin-top:100px ;">
    <center><a class="btn btn-success btn-lg" style="background-color:gold;border:none;color:chocolate;" href="customerlogin.php" role="button"> Order Now </a></center>
    <br><br>
  </div>
  <footer>
    <center>
      <p style="color:gray;">Bulanon, Katigbak Inc.</p>
    </center>
    <center>
      <p style="color:gray;">BSCS-191A</p>
    </center>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>