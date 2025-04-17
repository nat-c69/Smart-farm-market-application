<?php
session_start();
if (!isset($_SESSION["UserID"]))
{
header("location: /SFM/Main/Loginpage.php");
}
?>