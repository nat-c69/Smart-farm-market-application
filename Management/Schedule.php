<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farm Manager Schedule</title>
    <link rel="stylesheet" href="newstyle.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
    <script>
    </script>
</head>
<body>
<?php 
        include("session.php");
        include ('conn.php');
        $sql = "SELECT * FROM schedule 
        WHERE UserID = $_SESSION[UserID]
        ORDER BY TaskTime";
        $result = mysqli_query($con, $sql);
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
        <div class="tab" id="schedule-tab-current"><h3>Schedule</h3></div>
        <div class="tab" id="inventory-tab"><a href="Orders.php"><h3>Orders</h3></a></div>
    </div>

    <div class="flex-container-table">
    <?php 
        if(mysqli_num_rows($result)>0) {
            echo '<table id="schedule-view">
                <tr>
                    <th>Name</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th></th>
                </tr>';
                while ($row = mysqli_fetch_array($result))
                {
                    echo '<tr>';
                    echo '<td>'.$row['TaskName'].'</td>';
                    echo '<td>'.$row['TaskTime'].'</td>';
                    if ($row['TaskStatus'] == 'incomplete') {
                        echo '<td><a href="task_comp.php?TaskID=' .$row['TaskID'].'" style="color:red;">'.$row['TaskStatus'].'</a></td>';
                    }
                    elseif ($row['TaskStatus'] == 'complete') {
                        echo '<td><a href="task_incomp.php?TaskID=' .$row['TaskID'].'" style="color:green;">'.$row['TaskStatus'].'</a></td>';
                    }
                    echo '<td><a href="EditSched.php?TaskID=' .$row['TaskID'].'">Edit</a></td>';
                    echo '</tr>';
                }

            
            echo '</table>';
        }else{
            echo '<a class="temp-not">It seems you have not added any tasks yet (T_T)</a>';
        }
    ?>    
    </div>

    <button type="button" class="add-sched"><a href="AddSchedForm.php">Add Task</a></button>
    
    <?php 
    {
        echo '<button type="button" class="add-sched-2"><a onclick="return confirm(\'Reset all task status?\')" href="ResetTaskStatus.php?UserID=' .$_SESSION['UserID'].'">Reset Status</a></button>';
    }
    
    mysqli_close($con); 
    
    ?>


</body>
</html>
