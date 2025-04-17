<?php
include ("conn.php");
if (isset($_POST['submitbtn'])) {
$sql = "INSERT INTO editlinks (Links) VALUES('$_POST[Links]');";



if(mysqli_query($con, $sql)){
    echo "Data Uploaded";
}
else{
    echo "Data Not Uploaded";
}
}
mysqli_close($con)
?>