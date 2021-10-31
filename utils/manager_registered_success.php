<!-- TODO: unused file delete later -->

<?php
include("common/head_scripts.php");
include("common/components.php");
?>

<html>
<?= head("Manager Login") ?>

<body>
<main>
  <header>
    <div class="container text-center">
      <h2> <?php echo "Welcome $fullname!" ?> </h2>
      <h1>Your account has been created.</h1>
      <p>Login Now from <a href="managerlogin.php">HERE</a></p>
    </div>
    </header>
  </main>
  <?= footer();
  scripts(); ?>
  <?=
  toTopBtn();
  navbar();
  ?>
  <?php
  require 'utils/connection.php';
  $conn = Connect();

  $fullname = $conn->real_escape_string($_POST['fullname']);
  $username = $conn->real_escape_string($_POST['username']);
  $email = $conn->real_escape_string($_POST['email']);
  $contact = $conn->real_escape_string($_POST['contact']);
  $address = $conn->real_escape_string($_POST['address']);
  $password = $conn->real_escape_string($_POST['password']);

  $query = "INSERT into MANAGER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address . "','" . $password . "')";
  $success = $conn->query($query);

  if (!$success) {
    die("Couldnt enter data: " . $conn->error);
  }

  $conn->close();

  ?>

  <main>
    <div class="container text-center">
      <h2> <?php echo "Welcome $fullname!" ?> </h2>
      <h1>Your account has been created.</h1>
      <p>Login Now from <a href="managerlogin.php">HERE</a></p>
    </div>
  </main>
  <?= footer();
  scripts(); ?>
</body>

</html>