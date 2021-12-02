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
        height: 30px;
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
<div class="form-popup" id = "C_form">
    <form action = "Includes/C_form-inc.php" method = "post">
        <h2>NEW CLIENT</h2>
        <label for = "id"><b>CLIENT ID</b></label>
        <input type = "number" name = "C_id" placeholder = "ClientId">
        <label for = "name"><b>CLIENT NAME</b></label>
        <input type = "text" name = "C_name" placeholder = "ClientName">
        <button type = "submit" name = "submit">ADD</button>
    </form>
</div>
<?php
    include 'Includes/footer.php';
?>