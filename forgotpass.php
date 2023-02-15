<!DOCTYPE html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>

    <?php
    include('header.html');
    ?>
    
    <h3>Forgot Password</h3>
    <p class="a">Enter your email address</p>
    <div class="box">
        <hr class="hr1">
        <form action="" method="post" name="login">
            <input type="email" name="email" placeholder="Email" required/><br><br>
            <button class="button">Continue</button>
        </form>
    </div>
        <br>
        <p class=sigin>Already have an account? <a class="login" href="login.php">Log In</a> </p>
        
</body>