<?php
        $name = "";
        $category = "";
        $price = "";
        $unit = "";
        $description = "";
        include("session.php");
        include("conn.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $unit = $_POST['unit'];
            $description = $_POST['description'];
        
            if (mysqli_connect_error()) {
                die("Connection failed: " . mysqli_connect_error());
            }
        
            $sql = "INSERT INTO listings (UserID, ListingName, ListingCtgy, ListingPrice, ListingUnit, ListingDesc) 
                    VALUES ('$_SESSION[UserID]', '$name', '$category', '$price', '$unit', '$description')";
        
            if ($con->query($sql) === true) {
                echo "Listing created successfully.";
                header("Location: /SFM/Market/CreateListingPage.php");
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        
            $con->close();
        }

    
    
    ?>
