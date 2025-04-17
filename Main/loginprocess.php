<?php      
include("conn.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$UserName = $_POST['username'];
$UserPassword = $_POST['password'];
$sql="SELECT * FROM user WHERE UserName='$UserName' and UserPass='$UserPassword'";

$result=mysqli_query($con,$sql);

// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
if($rowcount==1) {
    session_start();
    $row = mysqli_fetch_array($result);           
                $_SESSION["UserName"] = $row['UserName'] ;
                $_SESSION["UserID"] = $row['UserID'] ;
            
                header("location: MainPage.php");
}
else {
header("location: FailLogin.html");
}
mysqli_close($con);
}


?>
