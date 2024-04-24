<?
include "app/database/db.php";

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
    <!-- <div class="title"></div> -->
    <div class="wrapper wrapper2"> 
        <div class="user">
        <span><i class='bx bxs-user-circle'></i><?echo $_SESSION['login'];?></span>
        </div>
        <h2><span>quest</span> to the lost world</h2>
            <div class="input-box">
                <a href="page_1.php" class="start">Начать игру</a>
                <i class='bx bxs-rocket' ></i>
            </div>
            <div class="input-box">
                <a class="new">Начать заново</a>
                <i class='bx bxs-planet' ></i>
            </div>
            <div class="input-box">
                <a class="achiev">Результаты</a>
                <i class='bx bxs-medal' ></i>
            </div>
            <div class="input-box">
                <a class="setting">Настройки</a>
                <i class='bx bxs-cog' style="color: #000" ></i>
            </div>
         
            <div class="register-link">
                <p>Don't know the rules? <a href="#">Read</a></p>
            </div>
    </div>
</body>
</html>