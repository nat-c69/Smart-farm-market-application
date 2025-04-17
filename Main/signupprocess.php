<?php
        $username = "";
        $email = "";
        $password = "";
        $confirm_password = "";

           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['username'])) {
                    
                    $username = $_POST['username'];
                
                } 
                
                else {
                    
                    $username = ""; 
                }
                
                if (isset($_POST['email'])) {
                
                    $email = $_POST['email'];
                
                } 
                
                else {
                
                    $email = ""; 
                }

            }
            
                include("conn.php");

                $checkUserQuery = "SELECT * FROM user WHERE UserName = '$username'";
                $result = mysqli_query($con, $checkUserQuery);

                if (mysqli_num_rows($result)>0){

                        header("Location: Usercreated.html");
                    } 

                    elseif ($password != $confirm_password) {

                        header(Location:"Passwordnotmatch.html");
                    }

                    else{
          
                        $sql = "INSERT INTO user (UserName, UserEmail, UserPass)
                                VALUES ('$_POST[username]','$_POST[email]','$_POST[password]')";
            
                        if(!mysqli_query($con,$sql)) {
                            
                            die('Error: ' . mysqli_error($con));

                        }

                        else {
                            
                            header("Location: Loginpage.php");
                            
                        }
                    }
                    mysqli_close($con);
        ?>