<?php
include('login_u.php');
include('common/website_info.php');
include("common/head_scripts.php");
include("common/components.php");

if (isset($_SESSION['login_user2'])) {
  header("location: foodlist.php");
}
?>

<!DOCTYPE html>
<html>
<?= head("Guest Login"); ?>

<body>
  <?=
  toTopBtn();
  navbar()
  ?>
  <main>
    <div class="container">
      <div class="jumbotron">
        <center>
          <h1>Hi Guest,<br> Welcome to <span style=" color: gold;" class="edit"> <?= $website_name ?> </span></h1>
        </center>
        <br>
        <p>Kindly LOGIN to continue.</p>
      </div>
    </div>

    <div class="container">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
        <div class="card">
          <div style="background-color:rgb(1, 1, 85);" class="panel-heading"> Login </div>
          <div class="card-body">

            <form action="" method="POST">

              <div class="row">
                <div class="form-group col-xs-12">
                  <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                  <div class="input-group">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
                    <span class="input-group-btn">
                      <label style="background-color:rgb(1, 1, 85);" class="btn btn-primary"><span class="bi-person-fill" aria-hidden="true"></label>
                    </span>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-xs-12">
                  <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                  <div class="input-group">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                    <span class="input-group-btn">
                      <label style="background-color:rgb(1, 1, 85);" class="btn btn-primary"><span class="bi-lock-fill" aria-hidden="true"></span></label>
                    </span>

                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-xs-4">
                  <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
                </div>

              </div>
              <label style="margin-left: 5px;">or</label> <br>
              <label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>

            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?=
  footer();
  scripts();
  ?>
</body>

</html>