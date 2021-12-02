<?php
if(isset($_POST['submit'])){
    
    require 'database.php';

    $C_id = $_POST['C_id'];
    $C_name = $_POST['C_name'];

    if(empty($C_id) || empty($C_name)){
        header("Location: ../Project_form.php?error = emptyfields&name= ".$C_name);
        exit();
    }else{
        $sql = "SELECT Client_ID FROM client WHERE Client_ID = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../Client_form.php?error=mysqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$C_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if($rowCount > 0){
                header("Location: ../Client_form.php?error=clientIDtaken");
                exit();
            }else{
                    $sql = "INSERT INTO client (Client_ID,Client_Name) VALUES (?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../register.php?error=mysqlerror");
                        exit();   
                    }else{
                        mysqli_stmt_bind_param($stmt,"is",$C_id,$C_name);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../after_login.php?success = added");
                            exit();
                    }
                }
            }   
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }