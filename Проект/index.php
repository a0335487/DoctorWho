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
        <form method="post" action="index.php">
            <h1>Login</h1>
            <div class="input-box">
                <input name="login" type="text" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="Password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember">
                <label for=""><input type="checkbox">Remember me </label>
                <a href="#">Forgot password?</a>
            </div>
            <button name="log-btn" type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="<?=BASE_URL . "register.php"?>">Register</a></p>
            </div>

        </form>
    </div>
</body>
</html>
