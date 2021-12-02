<?php
if(isset($_POST['submit'])){
    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $con_password = $_POST['confirm_password'];

    if(empty($username) || empty($password) || empty($con_password)){
        header("Location: ../register.php?error=EmptyFields&username=". $username);
        exit();
    }else if(!preg_match("/^[a-zA-Z0-9]/",$username)){
        header("Location: ../register.php?error=InvalidUsername&username=". $username);
        exit();
    }
    else if($password !== $con_password){
        header("Location: ../register.php?error=passwordsdonotmatch&username=". $username);
        exit();
    }
    else{
        $sql = "SELECT username FROM user WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../register.php?error=mysqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if($rowCount > 0){
                header("Location: ../register.php?error=usernametaken");
                exit();
            }else{
                $sql = "INSERT INTO user (username, password) VALUES (?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../register.php?error=mysqlerror");
                    exit();
                }else{
                    $hashedPass = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,'ss',$username,$hashedPass);
                    mysqli_stmt_execute($stmt);
                        header("Location: ../login.php?success = registered");
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>