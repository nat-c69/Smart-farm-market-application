<?php 
    include('conn.php');

    $UserID = $_GET["UserID"];
    $comp = "UPDATE `schedule` SET `TaskStatus` = 'incomplete' WHERE `schedule`.`UserID` =". $UserID;
    mysqli_query($con, $comp);
    mysqli_close($con); 

    header('Location: Schedule.php');
?>