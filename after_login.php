<?php
    include 'Includes/header.php';
?>
<style>
   button{
      color: #fff;
      text-transform: uppercase;
      text-decoration: none;
      background: #0a3556;
      border-radius: 5px;
      padding: 20px;
      border: none;
      transition: all 0.4s ease 0s;
      text-align: center;
      cursor: pointer;
   a {
      text-decoration: none;
      color: black;
      font-size: 18px;
      padding: 0px 0px 0px 20px;
   }
</style>
 <div style =" width:100%;margin:0 auto; text-align:center;">
   <br>
   <br>
   <button type = "button" name = "add_project" id = 1 onclick = "window.location.href = 'Project_form.php'">ADD PROJECT</button>
   <br>
   <br>
   <button type = "button" name = "view_project" id = 2 onclick = "window.location.href = 'Project_view.php'"> VIEW PROJECTS</button>
   <br>
   <br>
   <button type = "button" name = "add_client" id = 3 onclick = "window.location.href = 'Client_form.php'"> ADD CLIENT</button>
   <br>
   <br>
   <button type = "button" name = "view_client" id = 4 onclick = "window.location.href = 'Client_view.php'"> VIEW CLIENTS</button>
   <br>
   <br> 
 </div>
 
 <?php
    include 'Includes/footer.php';
?>
 