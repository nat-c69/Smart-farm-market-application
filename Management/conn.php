<?php
$con = mysqli_connect("localhost","root","","sfm");

// Check connection
if (mysqli_connect_error()){
    echo "Failed to connect to DB".mysqli_connect_error();
}

?>