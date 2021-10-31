<?php
include("common/head_scripts.php");
include("common/components.php");
include("common/website_info.php");
?>

<html>
<?= head("Guest Signup"); ?>

<body class="signup">
  <?=
  toTopBtn();
  navbar()
  ?>
  <main>
    <div class="container">
      <header class="text-center">
        <h1>Hi Guest</h1>
        <h1>Welcome to <span class="website_name"> <?= $website_name ?> </span></h1>
        <h4>Get started by creating your account.</h4>
      </header>

      <div class="col-md-5 mx-auto mt-5">
        <div class="card">
          <div class="card-header">Create Account</div>

          <div class="card-body">
            <form role="form" action="customer_registered_success.php" method="POST">
              <div class="row mb-3">
                <div class="form-group col-xs-12">
                  <label for="username"><span class="text-danger">*</span> Full Name: </label>
                  <div class="input-group">
                    <span class="input-group-text bi-person-fill"></span>
                    <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Full Name" required="" autofocus="">
                    </span>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-group col-xs-12">
                  <label for="username"><span class="text-danger">*</span> Username: </label>
                  <div class="input-group">
                    <span class="input-group-text bi-person-fill"></span>
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="">
                    </span>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-group col-xs-12">
                  <label for="username"><span class="text-danger">*</span> Email: </label>
                  <div class="input-group">
                    <span class="input-group-text bi-envelope-fill"></span>
                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
                    </span>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-group col-xs-12">
                  <label for="password"><span class="text-danger">*</span> Contact: </label>
                  <div class="input-group">
                    <span class="input-group-text bi-phone-fill"></span>
                    <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-group col-xs-12">
                  <label for="username"><span class="text-danger">*</span> Address: </label>
                  <div class="input-group">
                    <span class="input-group-text bi-house-fill"></span>
                    <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
                    </span>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-group col-xs-12">
                  <label for="password"><span class="text-danger">*</span> Password: </label>
                  <div class="input-group">
                    <span class="input-group-text bi-lock-fill"></span>
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                  </div>
                </div>
              </div>

              <!-- TODO: error message here
              <label class="text-danger mb-3"><span> <?php //echo $error;  ?> </span></label> -->

              <div class="row mb-3">
                <div class="form-group col-xs-4">
                  <button class="btn btn-primary" name="submit" type="submit" value="Login">Submit</button>
                </div>
              </div>

              <label>or</label> <br>
              <label><a href="customerlogin.php">Have an account? Login.</a></label>
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