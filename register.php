<!DOCTYPE html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>

    <?php
    include('header.html');
    ?>
    
    <h3>Account Registration</h3>
    <div class="box">
        <hr class="hr1">
        <form action="" method="post" name="login">
            <input type="email" name="email" placeholder="Email" required/><br><br>
            <input type="text" name="username" placeholder="Username" required/><br><br>
            <input type="password" name="password1" placeholder="Password" required/><br><br>
            <input type="password" name="password2" placeholder="Confirm Your Password" required/><br><br>
            <button class="button">Register</button>
        </form>
    </div>
        <br>
        <p class=sigin>Already have an account? <a class="login" href="login.php">Log In</a> </p>
        
</body>