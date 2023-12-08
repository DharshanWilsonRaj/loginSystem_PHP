<?php

require_once __DIR__ . "../../../includes/db.php";

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($username) && !empty($email) && !empty($password)) {
        $duplicate = mysqli_query($conn, "SELECT * FROM usersDetatils WHERE email = '$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('Email is already exist')</script>";
        } else {
            $password  = md5($password);
            $query = "INSERT INTO usersDetatils (username, email, password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($conn, $query)) {
                header("Location: /phpProject1/index.php");
            } else {
                echo "<script>alert('Error in registration')</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <h2>Register here</h2>
    <form action="" class="form" method="post">
        <label for="username"> Name</label>
        <input type="text" name="username" id="username" value="" autocomplete="off"> <br> <br>
        <label for="email"> Email</label>
        <input type="text" name="email" id="email" value="" autocomplete="off"> <br> <br>
        <label for="password"> Password</label>
        <input type="text" name="password" id="password" value="" autocomplete="off"> <br> <br> <br>

        <button type="submit" name="submit"> Submit</button>
    </form>


    <a href="/phpProject1/pages/login/login.php">Login</a>
</body>

</html>