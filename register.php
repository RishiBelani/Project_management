<?php
    include 'Includes/header.php';
?>
<div>
    <h1>Register</h1>
    <p>Already Have a Account? <a href = "login.php">LOGIN!</a></p>

    <form action = "Includes/register-inc.php" method = "post" >
        <input type = "text" name = "username" placeholder = "Username">
        <input type = "password" name = "password" placeholder = "Password">
        <input type = "password" name = "confirm_password" placeholder = "Confirm Password">
        <button type = "submit" name = "submit">REGISTER</button>
    </form>
</div>
<?php
    include 'Includes/footer.php';
?>