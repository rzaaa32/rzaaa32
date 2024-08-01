<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styleregister.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="register-item">
    <form>
        <h1>Register</h1>
        <div class="register-box">
            <input type="text" placeholder="Username" required />
        </div>

        <div class="register-box">
            <input type="password" placeholder="Password"required/>
        </div>

        <div class="register-box">
            <input type="password" placeholder="Konfirmasi Password"required/>
        </div>

        <div class="register-box">
            <input type="email" placeholder="Alamat Email Anda"required/>
        </div>

        <div class="register-box">
            <input type="text" inputmode="numeric" placeholder="Nomor Telepon"/>
        </div>
       <button type="sumbmit" class="btnreg">Daftar</button>

       <div class="login-ref">
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
       </div>
    </form>

   </div>
</body>
</html>