<?php
include 'Includes/header.php';
?>
<style>
    input {
        display: block;
        margin: 20px auto;
        text-align: center;
        box-shadow: 0 0 10px #666;
        width: 240px;
        height: 25px;
        background-color: #f2f2f2;
    }
    button {
        width: 240px;
        height: 40px;
        background-color: #000;
        color: #ffffff;
        cursor: pointer;
    }
</style>
<div class="form-popup" id = "P_form">
    <form action = "Includes/P_form-inc.php" method = "post">
        <h2>NEW PROJECT</h2>
        <label for = "name"><b>NAME</b></label>
        <input type = "text" name = "name" placeholder = "ProjectName">
        <label for = "name"><b>START DATE</b></label>
        <input type = "date" name = "s_date" placeholder = "MM/DD/YY">
        <label for = "name"><b>END DATE</b></label>
        <input type = "date" name = "e_date" placeholder = "MM/DD/YY">
        <br>
        <label for = "status" ><b>PROGRESS STATUS</b></label>
        <select name = "status" id = "status" onchange = "CheckOther(this);">
            <option value = "In Queue">In Queue</option>
            <option value = "In Progress">In Progress</option>
            <option value = "Completed">Completed</option>
            <option value = "Cancelled">Cancelled</option>
        </select>
        <br/> <input type="text" id = "txt" name = "txt" style = "display:none;" placeholder = "reason for cancellation"/>
        <br>
        <label for = "name"><b>CLIENT ID</b></label>
        <input type = "number" name = "C-id" placeholder = "Client ID">
        <button type = "submit" name = "submit">ADD</button>
    </form>
</div>
<script type = "text/javascript">
    function CheckOther(selectBox)
    {
        if(selectBox.selectedIndex == selectBox.options.length-1)
        {
            document.getElementById("txt").style.display = "inline";
        }
    }
</script>

 