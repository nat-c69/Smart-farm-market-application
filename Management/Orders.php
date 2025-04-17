<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farm Manager Orders</title>
    <link rel="stylesheet" href="newstyle.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
    <script>
    </script>
</head>
<body>
    <?php 
        include("session.php");
        include ('conn.php');
        $sell = "SELECT * FROM listings WHERE UserID = $_SESSION[UserID]";
        //$buy = "SELECT * FROM cart WHERE UserID = $_SESSION[UserID]";
        $result = mysqli_query($con, $sell);
    ?>

<div class="top-bar">   
            <img class="logopic" src="/SFM/images/logo.png"> 
            <a href="-" class="logo">
                <img class="profilepic" src="/SFM/images/pic.webp">
            </a>  
            <h2 class="title">Management</h2> 
        </div>
        <div class="navi-bar">
                
            <ul class="option">
                <div class="MenuButton"><li><a href="/SFM/Main/MainPage.php"><i class="fa-solid fa-house"></i><p>Main Menu</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Social/homepage.php"><i class="fa-solid fa-users"></i><p>Social Hub</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Market/CreateListingPage.php"><i class="fa-solid fa-cart-shopping"></i><p>Marketplace</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Management/Schedule.php"><i class="fa-solid fa-screwdriver-wrench"></i><p>Managing Services</p></a></li></div>
            </ul>
            <ul class="option2">
                <div class="MenuButton"><li><a href="-"><i class="fa-solid fa-gears"></i><p>Settings</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Main/Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><p>Sign Out</p></a></li></div>
            </ul>
        </div>

    <div class="flex-container-tab">
        <div class="tab" id="schedule-tab" ><a href="Schedule.php"><h3>Schedule</h3></a></div>
        <div class="tab" id="inventory-tab-current" ><h3>Orders</h3></div>
    </div>

    <h2 class="table-title">Buy Orders</h2>
    <div class="flex-container-table">
        <a class="temp-not">This feature is temporarily unavailable. Sorry for any inconvenience caused o(TヘTo)</a>
    </div>


    <h2 class="table-title">Sell Orders</h2>
    <div class="flex-container-table">
    <?php
        if(mysqli_num_rows($result)>0) {
                echo '<table id="inventory-view">';
                echo '<tr>';
                echo '<th>Item Name</th>';
                echo '<th>Category</th>';
                echo '<th>Price</th>';
                echo '<th>Quant</th>';
                echo '<th>Description</th>';
                echo '</tr>';
                
            while ($row = mysqli_fetch_array($result))
            {
                        echo '<tr>';
                        echo '<td>'.$row['ListingName'].'</td>';
                        echo '<td>'.$row['ListingCtgy'].'</td>';
                        echo '<td>'.$row['ListingPrice'].'</td>';
                        echo '<td>'.$row['ListingUnit'].'</td>';
                        echo '<td>'.$row['ListingDesc'].'</td>';
                        echo '</tr>';
            }
            echo '</table>';
        }else {
                echo '<a class="temp-not">It seems you have not listed anything for sale yet (T_T)</a>';
            }

    ?>
    </div>


</body>
</html>
