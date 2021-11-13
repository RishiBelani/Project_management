<?php
    include 'Includes/header.php';
?>
<div>
    <h1>Log In</h1>
    <p>No Account ? <a href = "register.php">Register here!</a></p>

    <form action = "Includes/login-inc.php" method = "post" >
        <input type = "text" name = "username" placeholder = "Username">
        <input type = "password" name = "password" placeholder = "Password">
        <button type = "submit" name = "submit">LOGIN</button>
    </form>
</div>
<?php
    include 'Includes/footer.php';
?>
 