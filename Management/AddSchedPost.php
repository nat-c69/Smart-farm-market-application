<?php
include("session.php");
include("conn.php");

$sql = "INSERT INTO schedule (UserID, TaskName, TaskTime, TaskStatus)

VALUES ('$_SESSION[UserID]','$_POST[TaskName]','$_POST[TaskTime]','incomplete')";

if (!mysqli_query($con,$sql)) {
    die('Error! '.mysqli_error($con));
}

else {
    echo '<script>alert("Record added!");window.location.href="Schedule.php";</script>';
}

mysqli_close($con);
?>