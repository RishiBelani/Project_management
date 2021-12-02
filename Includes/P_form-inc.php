<?php
if(isset($_POST['submit'])){
    
    require 'database.php';
    
    $P_name = $_POST['name'];
    $S_date = $_POST['s_date'];
    $E_date = $_POST['e_date'];
    $P_status = $_POST['status'];
    $C_id = $_POST['C-id'];
    $reason = $_POST['txt'];

    if(empty($P_name) || empty($S_date) || empty($E_date) || empty($P_status) || empty($C_id)){
        header("Location: ../Project_form.php?error = emptyfields&name= ".$P_name);
        exit();
    }else{
        $sql = "INSERT INTO project (Project_Name,Start_Date,End_Date,Progress_Status,Client_ID,Reason_for_cancel) VALUES (?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../Project_form.php?error=mysqlerror");
            exit();   
        }else{
            mysqli_stmt_bind_param($stmt,"ssssis",$P_name,$S_date,$E_date,$P_status,$C_id,$reason);
            mysqli_stmt_execute($stmt);
            header("Location: ../after_login.php?success = added");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }