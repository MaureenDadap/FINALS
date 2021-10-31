<?php

function navbar()
{
    echo <<<EOT
<nav class="navbar navbar-expand-lg" role="navigation">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <img src="images/bulldog.png" alt="logo" class="d-inline-block align-top">
        <span>Le Comscie'</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="bi-list"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a href="aboutus.php" class="nav-link">About</a></li>
        </ul>
EOT;
    if (isset($_SESSION['login_user1'])) {
        echo <<<EOT
            <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="#" class="nav-link"><span class="bi-person-fill"></span> Welcome 
            EOT;
        $_SESSION['login_user1'];
        echo <<<EOT
            </a></li>
            <li class="nav-item"><a href="myrestaurant.php" class="nav-link"><span class="fa fa-tools"></span> MANAGER CONTROL PANEL</a></li>
            <li class="nav-item"><a href="logout_m.php" class="nav-link"><span class="bi-box-arrow-left"></span> Log Out </a></li>
          </ul>
          EOT;
    } else if (isset($_SESSION['login_user2'])) {
        echo <<<EOT
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#" class="nav-link"><span class="bi-person-fill"></span> Welcome 
        EOT;
        $_SESSION['login_user2'];
        echo <<<EOT
        </a></li>
        <li class="nav-item"><a href="foodlist.php" class="nav-link"><span class="fa fa-cutlery"></span> Food Zone </a></li>
        <li class="nav-item"><a href="cart.php" class="nav-link"><span class="bi-cart-fill"></span> Cart (
        EOT;
        if (isset($_SESSION["cart"])) {
            $count = count($_SESSION["cart"]);
            echo "$count";
        } else
            echo "0";
        echo <<<EOT
                   )
            </a></li>
        <li class="nav-item"><a href="logout_u.php" class="nav-link"><span class="bi-box-arrow-left"></span> Log Out </a></li>
    </ul>
    EOT;
    } else {
        echo <<<EOT
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bi-person-fill"></span> Sign Up
            </a>
            <ul class="dropdown-menu">
                <li><a href="customersignup.php" class="dropdown-item">User Sign-up</a></li>
                <li><a href="managersignup.php" class="dropdown-item">Manager Sign-up</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bi-box-arrow-right"></span> Login
            </a>
            <ul class="dropdown-menu">
                <li><a href="customerlogin.php" class="dropdown-item">User Login</a></li>
                <li><a href="managerlogin.php" class="dropdown-item">Manager Login</a></li>
            </ul>
        </li>
    </ul>
EOT;
    }
    echo '</div>';
    echo '</div>';
    echo '</nav>';
}
