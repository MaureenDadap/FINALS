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
          <div class="text-start">
            <h1>Hello Manager! </h1>
            <p>Manage all your restaurant from here</p>
          </div>
          <div class="list-group">
            <a href="myrestaurant.php" class="list-group-item active">My Restaurant</a>
            <a href="view_food_items.php" class="list-group-item ">View Food Items</a>
            <a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
            <a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
            <a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-area px-lg-5 mx-lg-5" >
            <form action="myrestaurant1.php" method="POST">
              <br style="clear: both">
              <h3 class="text-center mb-4">MY RESTAURANT</h3>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Restaurant's Name" required="">
              </div>

              <div class="form-group mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Restaurant's Email" required="">
              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Restaurant's Contact Number" required="">
              </div>

              <div class="form-group mb-3">
                <input type="text" class="form-control" id="address" name="address" placeholder="Your Restaurant's Address" required="">
              </div>

              <div class="form-group mb-3">
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD RESTAURANT </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <?= footer();
  scripts(); ?>
</body>

</html>