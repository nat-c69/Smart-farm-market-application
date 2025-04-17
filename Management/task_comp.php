<?php 
    include('conn.php');

    $TaskID = $_GET["TaskID"];
    $comp = "UPDATE `schedule` SET `TaskStatus` = 'complete' WHERE `schedule`.`TaskID` =". $TaskID;
    mysqli_query($con, $comp);
    mysqli_close($con); 

    header('Location: Schedule.php');
?>