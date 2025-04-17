<?php
include ("conn.php");
if (isset($_POST['ProfData'])) {
$sql = "INSERT INTO 'profile' (ProfileID, UserID, ProfLink, ProfData, ProfFile)
VALUES ('1','1','','$_POST[ProfData]','')";



if(mysqli_query($con, $sql)){
    echo "Data Uploaded";
}
else{
    echo "Data Not Uploaded";
}
}
mysqli_close($con);
?>
