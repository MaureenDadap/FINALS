<?php
session_start();
include("common/head_content.php");
include("common/navbar.php");
?>

<html>
<?= head("Home | Le Comscie'"); ?>

<body style="background-image: url('images/Logo.jpg');background-size:cover;">
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="bi-chevron-up"></i>
  </button>
  <?= navbar() ?>
  <main>
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
  </main>

  <footer>
    <center>
      <p style="color:gray;">Bulanon, Katigbak Inc.</p>
    </center>
    <center>
      <p style="color:gray;">BSCS-191A</p>
    </center>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>