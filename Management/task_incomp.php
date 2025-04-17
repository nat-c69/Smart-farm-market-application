<?php
    include('conn.php');

    $TaskID = $_GET["TaskID"];
    $incomp = "UPDATE `schedule` SET `TaskStatus` = 'incomplete' WHERE `schedule`.`TaskID` =". $TaskID;
    mysqli_query($con, $incomp);
    mysqli_close($con); 

    header('Location: Schedule.php');
?>