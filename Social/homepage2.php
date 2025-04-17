
<?php
    include("session.php");
    include ("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Hub Homepage</title>
    <link rel="stylesheet" href="SocialCSS/homepage.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="background">
        <div class="top-bar">   
            <img class="logopic" src="/SFM/images/logo.png"> 
            <a href="-" class="logo">
                <img class="profilepic" src="/SFM/images/pic.webp">
            </a>  
        </div>
        <div class="navi-bar">
                
            <ul class="option">
                <div class="Menu"><li><a href="/SFM/Main/MainPage.php"><i class="fa-solid fa-house"></i><p>Main Menu</p></a></li></div>
                <div class="Social"><li><a href="/SFM/Social/homepage.php"><i class="fa-solid fa-users"></i><p>Social Hub</p></a></li></div>
                <div class="Market"><li><a href="/SFM/Market/CreateListingPage.php"><i class="fa-solid fa-cart-shopping"></i><p>Marketplace</p></a></li></div>
                <div class="Service"><li><a href="/SFM/Management/Schedule.php"><i class="fa-solid fa-screwdriver-wrench"></i><p>Managing Services</p></a></li></div>
            </ul>
            <ul class="option2">
                <div class="Settings"><li><a href="-"><i class="fa-solid fa-gears"></i><p>Settings</p></a></li></div>
                <div class="Signout"><li><a href="/SFM/Main/Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><p>Sign Out</p></a></li></div>
            </ul>
        </div>
        
        <div class="wrapper2">
        
            <div id="Welcome"><h1 style="color: azure;">Smart Farm's Social Hub</div></h1>

            <div class="searchbar">
                <form method="post">
                    <input type="text" placeholder=" Search" name="search">
                    <button name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="searchresult">
                <table class="table-result">
                    <?php
                        if(isset($_POST['submit'])){
                            $search=$_POST['search'];

                            $sql="SELECT * from articles 
                            where UserID like '%$search%' 
                            or Title like '%$search%'
                            or UserName like '%$search%'";
                            $result=mysqli_query($con,$sql);

                            $pic="/SFM/images/";
                            if($result){
                                if(mysqli_num_rows($result)>0){
                                    echo '<thead>
                                    <tr>
                                    <th>ID</th>
                                    <th> Article Title</th>
                                    <th>Author</th>
                                    <th>Date Published</th>
                                    </tr>
                                    </thead>';

                                    while($row=mysqli_fetch_assoc($result)){
                                    echo '<tbody>
                                    <tr>
                                    <td>'.$row['Article_ID'].'</td>
                                    <td><a href="'.$row['ArticleLink'].'">'.$row['Title'].'</td>
                                    <td>'.$row['UserName'].'</td>
                                    <td>'.$row['PublishedDate'].'</td>
                                    </tr>
                                    <tbody>';
                                    }
                                }else{
                                    echo "<div class='result-fail'>";
                                        echo'<h2>Sorry, we can\'t find what you were looking for :(</h2>';
                                    echo "</div>";
                                }
                            }
                        }
                        
                    ?>
                </table>
            </div>    


            
        </div>
    </div>    
</body>
</html>
