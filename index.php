<?php
    include 'Includes/header.php';
?>
<?php
    if(isset($_SESSION['sessionId'])){
        echo "You Are Logged In!";
    }else{
        echo "HOME";
    }
?>

<?php
    include 'Includes/footer.php';
?>
 