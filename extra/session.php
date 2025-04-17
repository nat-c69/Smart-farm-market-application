<?php
session_start();
if (!isset($_SESSION['UserID']))
{
header("location: /SFMFinal/Louis/Loginpage.php");
}
?>