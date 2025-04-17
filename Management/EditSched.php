<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farm Manager Edit Task</title>
    <link rel="stylesheet" href="newstyle.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
    <script>
    </script>
</head>
<body>
    <?php 
        include ('session.php');
        include ('conn.php');
        $result = mysqli_query($con,"SELECT * FROM schedule");
    ?>

<div class="top-bar">   
            <img class="logopic" src="/SFM/images/logo.png"> 
            <a href="-" class="logo">
                <img class="profilepic" src="/SFM/images/pic.webp">
            </a>  
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

    <div class="flex-container">
        <div class="tab" id="schedule-tab-current">Schedule</div>
        <div class="tab" id="inventory-tab"><a href="Inventory.php">Inventory</a></div>
    </div>

    <div class="flex-container-form">
        <h2>Edit Task</h2>

        <?php 
        include("conn.php");
        $id = intval($_GET['TaskID']);
        $result = mysqli_query($con,"SELECT * FROM schedule WHERE TaskID = $id");
        while($row = mysqli_fetch_array($result))
         {
        ?>
        
        <form method="post" action="UpdateSched.php">

            <input type="hidden" name="TaskID" value="<?php echo $row['TaskID'] ?>">
            
            <label>Task Name</label>
            <br>
            <input type="text" name="TaskName" required value="<?php echo $row['TaskName'] ?>">
            <br><br>

            <label>Task Name</label>
            <br>
            <input type="time" name="TaskTime" required value="<?php echo $row['TaskTime'] ?>">
            <br><br>

            <button type="submit" class="change-sched-button" value="Submit">Submit</button>
            <?php
                echo '<button type="button" class="change-sched-button" style="background-color:red;"><a onclick="return confirm(\'Delete this task from the Schedule?\')" href="DeleteSched.php?TaskID=' .$id.'" >Delete Task</a></button>'
            ?>
            <button type="button" class="change-sched-button"><a href="Schedule.php">Back to Schedule</a></button>
        </form>    
        <?php
        }
        mysqli_close($con);
        ?>
    </div>
    

</body>
</html>
