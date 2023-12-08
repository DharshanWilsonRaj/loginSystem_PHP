<?php
session_start();
require_once __DIR__ . "../../../components/header/header.php";
require_once __DIR__ . "../../../includes/db.php";
require_once __DIR__ . "../../../includes/functions.php";



?>

<div class="form_container">
    <form method="post">
        <label for="email"> Email</label>
        <input type="text" name="email" id="email" value="" autocomplete="off"> <br> <br>

        <label for="password"> Password</label>
        <input type="text" name="password" id="password" value="" autocomplete="off"> <br> <br> <br>

        <button type="submit" name="login_submit" value="submit" class="btn btn-primary">Submit</button>

        <a href="../register/register.php">Register</a>
    </form>

</div>

<?php
require_once __DIR__ . "../../../components/footer/footer.php";
?>