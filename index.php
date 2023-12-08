<!-- header -->
<?php
session_start();
require_once __DIR__ . "/components/header/header.php";
require_once __DIR__ . "/includes/db.php";
require_once __DIR__ . "../../phpProject1/includes/functions.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# Initialize the session

if (!empty($_SESSION['auth_user_id'])) {
    $user_id = $_SESSION['auth_user_id'];
    $res = mysqli_query($conn, "SELECT username from usersDetatils where id=$user_id");
    if (mysqli_num_rows($res) <= 0) {
        $_SESSION['auth_user_id'] = null;
    } else {
        $data = mysqli_fetch_array($res);
        echo ("<h2>Welcome, " . $data['username'] . "</h2>");
    }
}

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
//   echo "<script>" . "window.location.href='./pages/login/login.php';" . "</script>";
//   exit;
// }

?>

<!-- footer -->
<?php require_once __DIR__ . "/components/footer/footer.php";
