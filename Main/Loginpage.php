<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, 
        initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="MainCSS/Loginpagestyle.css">
    </head>
    
    <body>
        <div class="wrapper">
            <form action="loginprocess.php" method="post">
                <h1>Login</h1>
                
                <div class="input-box">
                    <input type="text" name="username" placeholder="username", required>
                </div>
                
                <div class="input-box">
                    <input type="password" name="password" placeholder="password", required>
                </div>
                
                <button type="submit" class="button" value="submit">Login</button>
                
                <div class="signup-link">
                <a href="SignUpPage.php">Don't have an account? Sign up instead!</a>
                </div>
            </form>
        </div>
        
        
        
    </body>
</html>

