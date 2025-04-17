<?php
include ("conn.php");
if (isset($_POST['submit'])) {
    $image = file_get_contents($_FILES['FileToUpload']['tmp_name']);
    $image = mysqli_real_escape_string($con, $image);
    $sql= "INSERT INTO upload (FileToUpload) VALUES ('$image')";
if(mysqli_query($con, $sql)){
    echo "File Uploaded";
}
else{
    echo "File Not Uploaded";
}
}
mysqli_close($con)
?>