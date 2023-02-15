<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    
    <?php
    include('header.html');
    ?>

    <h3>Account Log In</h3>
    <div class="box">
        <hr class="hr1">
        <form action="" method="post" name="login">
            <input type="text" name="username" placeholder="Username" required/><br><br>
            <input type="password" name="password" placeholder="Password" required/><br><br>
            <button class="button">Submit</button>
        </form>
    </div>
        <br>
        <a class="password" href="forgotpass.php">Forgot Password?</a>
        <a class="register" href="register.php">Register Here</a>
    
</body>
