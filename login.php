<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <link rel="stylesheet" href="stylelogin.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<div class="all-items">
    <form action="">
        <h1>Login</h1>
        <div class="item-box">
            <input type="text" placeholder="Username" required/>
            <i class='bx bx-user'></i>
        </div>

        <div class="item-box">
            <input type="password" placeholder="Password" required/>
            <i class='bx bx-lock-alt' ></i>
        </div>

        <div class="remember-pass">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div  class="register-link">
            <p>Belum punya Akun? <a href="Register.php">Register</a></p>
        </div>
    </form>
</body>
</html>
