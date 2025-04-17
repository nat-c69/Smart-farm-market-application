<?php
    include("conn.php");

    $id = intval($_GET['TaskID']);

    $result = mysqli_query($con,"DELETE FROM schedule WHERE TaskID=$id");

    mysqli_close($con); 
    header('Location: Schedule.php');
?>