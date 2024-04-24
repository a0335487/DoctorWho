<? 
include "path.php"; 
include "app/controllers/users.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <title>Main</title>
</head>
<body>
    <div class="logo">
        <img class="kem-logo" src="img/Логотип КГПИ КемГУ.png" alt="logo">
    </div>
    <div class="wrapper">
        <form method="post" action="register.php">
            <h1>Register</h1>
            <div class="input-box">
                <input name="username" type="text" placeholder="Login" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input name="password_1" type="password" placeholder="Password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <input name="password_2" type="password" placeholder="Repeat password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember">
                <label for=""><input type="checkbox">Remember me </label>
                <!-- <a href="#">Forgot password?</a> -->
            </div>
            <button type="submit" class="btn" name="btn-reg">Register</button>
            <div class="register-link">
                <p>Have an account? <a href="<?=BASE_URL . "index.php"?>">LogIn</a></p>
            </div>

        </form>
    </div>
</body>
</html>