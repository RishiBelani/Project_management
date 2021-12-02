<?php
    include 'Includes/header.php';
    require 'Includes/database.php';
    $sql = "SELECT Client_Name,Project_Name from client,project where client.Client_ID = project.Client_ID";
    $result = mysqli_query($conn,$sql);
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
            <th>Client Name</th>  
            <th>Project Associated</th> 
        </tr>  
        <?php  
            if(mysqli_num_rows($result) > 0)  
            {  
               while($row = mysqli_fetch_array($result))  
                    {  
        ?>  
                        <tr>  
                            <td><?php echo $row["Client_Name"];?></td>  
                            <td><?php echo $row["Project_Name"]; ?></td>
                        </tr>  
                        <?php  
                    }  
            }  
            ?>  
    </table>  
</div>
</body>
</html>