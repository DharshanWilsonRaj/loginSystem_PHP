<!-- header -->
<?php
require_once __DIR__ . "/components/header/header.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# Initialize the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./pages/login/login.php';" . "</script>";
  exit;
}

?>

<!-- footer -->
<?php require_once __DIR__ . "/components/footer/footer.php";
