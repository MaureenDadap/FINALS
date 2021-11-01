<?php
include('utils/session_m.php');
include("common/head_scripts.php");
include("common/components.php");


if (!isset($login_session)) {
  header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<?= head("My Restaurant") ?>

<body>
  <?=
  toTopBtn();
  navbar();
  ?>
  <main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <?= adminSideBar("add"); ?>
        </div>
        <div class="col-md-8">
          <div class="form-area px-lg-5 mx-lg-5">
            <form action="add_food_items1.php" method="POST">
              <br style="clear: both">
              <h3 class="text-center mb-4">ADD NEW FOOD ITEM HERE</h3>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="price" name="price" placeholder="Your Food Price (PHP)" required="">
              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="description" name="description" placeholder="Your Food Description" required="">
              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
              </div>

              <div class="form-group mb-3">
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">ADD FOOD</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?= footer();
  scripts(); ?>
</body>

</html>