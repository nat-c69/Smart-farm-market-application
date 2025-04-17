<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, 
        initial-scale=1.0">
        <title>Sign Up Page</title>
        <link rel="stylesheet" href="MainCSS/SignUpPagestyle.css">
    </head>
    
    <body>
        <div class="wrapper">
            <form action="signupprocess.php" method="POST">
                <h1>Sign Up</h1>
                <p>Please insert the revelant information<p>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Insert Username" required>
                </div>

                <div class="input-box">
                    <input type="email" name="email" placeholder="Insert email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Insert Password" required>
                </div>
                <div class="input-box">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <button type="submit" class="btn">Sign Up</button>
                <div class="login-link">
                <a href="Loginpage.php">Already have an account? Login instead!</a>
                </div>
            </form>
        </div>

    

    </body>
</html>