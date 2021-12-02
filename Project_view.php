<?php
    include 'Includes/header.php';
    require 'Includes/database.php';
    $sql = "SELECT Project_Name,Start_Date,End_Date,Progress_Status,Client_Name,Reason_for_cancel from project,client where project.Client_ID = client.Client_ID";
    $result = mysqli_query($conn,$sql)
?>

<!DOCTYPE html>
<html>
<style>
    table,td,th{
        padding: 10px;
        border-collapse: collapse;
        font-family: Georgia,"Times New Roman",Times, serif;
        border: solid #ddd 2px;
    }
</style>
<body>
<div class="table-responsive">  
    <table class="table table-striped">  
        <tr>  
            <th>Project Name</th>  
            <th>Start Date</th> 
            <th>End Date</th>   
            <th>Progress Staus</th>  
            <th>Client Name</th>
            <th>Reason for cancellation</th>
        </tr>  
        <?php  
            if(mysqli_num_rows($result) > 0)  
            {  
               while($row = mysqli_fetch_array($result))  
                    {  
        ?>  
                        <tr>  
                            <td><?php echo $row["Project_Name"];?></td>  
                            <td><?php echo $row["Start_Date"]; ?></td>
                            <td><?php echo $row["End_Date"]; ?></td> 
                            <td><?php echo $row["Progress_Status"]; ?></td>   
                            <td><?php echo $row["Client_Name"]; ?></td> 
                            <td><?php echo $row["Reason_for_cancel"]; ?></td> 
                        </tr>  
                        <?php  
                    }  
            }  
            ?>  
    </table>  
</div>
</body>
</html>