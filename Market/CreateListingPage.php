<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, 
        initial-scale=1.0">
        <title>Create Listing Page</title>
        <link rel="stylesheet" href="CreateListingPage.css">
        <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include("session.php");
        include("conn.php");
    ?>
    <div class="background">
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
    </div>

    <div class="wrapper">
        <div id="PageTitle"><h1 style="color: azure;">Create Listing</div></h1>
            
            <div class="details">

            <form action="createlistingprocess.php" method=post>
                <!-- Listing Title-->
                <div class="input-box">
                    <input type="text" name="name" placeholder="Product Name ", required>
                </div>
        
                <!-- Category -->
                <div class="category">
                    <select class="Options" name="category" name="category">
                    <option value="">Select a Category</option>
                    <option value="crops">Crops</option>
                    <option value="fertilizer">Fertilizer</option>
                    <option value="tools">Tools</option>
                    <option value="others">Others</option>
                </select>
                </div>
            
                <!-- Price -->
                <div class="input-box">
                    <input type="number" id="price" name="price" step="0.01" min="0"  placeholder="Price", required>
                </div>

                <!-- Units -->
                <div class="input-box">
                <input type="number" id="unit" name="unit" step="1" min="1"  placeholder="Units", required>
                </div>

                <!-- Listing Description -->
                <div class="input-box2">
                    <textarea id="description" name="description" placeholder="Description" rows="5", required></textarea>
                </div>

                <!-- Upload Photo -->
                <div class = "uploadphoto">
                    <button type="button">
                        <label>Upload Photo</label>
                        <input type="file" id="image" accept="image/*" multiple>
                    </button>
                </div>

                <div class="submit">
                    <button type="submit">Create Listing</button>
                </div>

            </form>
            </div>
        </div>

    
    
</body>

</html>
