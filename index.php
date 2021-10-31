<?php
session_start();
include("common/head_scripts.php");
include("common/components.php");
?>

<html>
<?= head("Home"); ?>

<body>
  <?= 
  toTopBtn();
  navbar() 
  ?>
  
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

  <?=
  footer();
  scripts();
  ?>
</body>

</html>