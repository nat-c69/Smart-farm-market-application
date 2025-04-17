<?php

include("conn.php");

$sql = "UPDATE schedule SET
TaskName = '$_POST[TaskName]',
TaskTime = '$_POST[TaskTime]'

WHERE TaskID = $_POST[TaskID];";

if (!mysqli_query($con,$sql)) {
    die('Error! '.mysqli_error($con));
}

else {
    echo '<script>alert("Record added!");window.location.href="Schedule.php";</script>';
}
?>
