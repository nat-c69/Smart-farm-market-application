<?php
session_start();
session_destroy();
header("location: /SFM/Main/Loginpage.php");
?>