<?php
session_start();

// قم بتعيين البيانات المثبتة
$fixedUsername = "Abdallateef";
$fixedEmail = "user@example.com";
$fixedAge = 25;

// تحقق من صلاحية الجلسة
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Readme</a></p>
        </div>

        <div class="right-links">
           
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $fixedUsername ?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $fixedEmail ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php echo $fixedAge ?> years old</b>.</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>