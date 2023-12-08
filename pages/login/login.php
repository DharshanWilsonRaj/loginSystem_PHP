<?php
require_once __DIR__ . "../../../components/header/header.php";
require_once __DIR__ . "../../../includes/db.php";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $isLoggedUser = mysqli_query($conn, "SELECT * FROM usersDetatils WHERE email = '$email'");
    

    // if (mysqli_num_rows($isLoggedUser) > 0) {
    //     echo "<script>alert('Email is already exist')</script>";
    // } else {
    //     $query = "INSERT INTO usersDetatils (username, email, password) VALUES ('$username', '$email', '$password')";
    //     if (mysqli_query($conn, $query)) {
    //         echo "<script>" . "window.location.href='/phpProject1/pages/login/login.php';" . "</script>";
    //     } else {
    //         echo "<script>alert('Error in registration')</script>";
    //     }
    // }
}

?>

<div class="form_container">
    <form>
        <label for="email"> Email</label>
        <input type="text" name="email" id="email" value="" autocomplete="off"> <br> <br>

        <label for="password"> Password</label>
        <input type="text" name="password" id="password" value="" autocomplete="off"> <br> <br> <br>

        <button type="submit" name="login_submit" class="btn btn-primary">Submit</button>

        <a href="../register/register.php">Register</a>
    </form>

</div>

<?php
require_once __DIR__ . "../../../components/footer/footer.php";
?>