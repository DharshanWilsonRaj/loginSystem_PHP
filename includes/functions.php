<?php
session_start();

// login submit
if (isset($_POST['login_submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($email) && !empty($password)) {
        $password = md5($password);
        $query = mysqli_query($conn, "SELECT id FROM usersDetatils WHERE email = '$email' and password='$password'");

        if (mysqli_num_rows($query) == 0) {
            echo "<script>alert('Invalid email/password')</script>";
        } else {
            $row = mysqli_fetch_assoc($query);
            $user_id = $row['id'];
            $_SESSION['auth_user_id'] = $user_id;

            header("Location: /phpProject1/index.php");
        }
    }
}
