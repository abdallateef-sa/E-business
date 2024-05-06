<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            // كلمة المرور والبريد الإلكتروني الثابتين
            $fixedEmail = "user@example.com";
            $fixedPassword = "password123";

            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                // التحقق من كلمة المرور والبريد الإلكتروني
                if ($email === $fixedEmail && $password === $fixedPassword) {
                    $_SESSION['valid'] = $email;
                    $_SESSION['username'] = "Abdallateef";
                    $_SESSION['age'] = 25;
                    $_SESSION['id'] = 1;

                    // تحويل المستخدم إلى الصفحة الرئيسية
                    header("Location: book.php");
                    exit;
                } else {
                    echo "<div class='message'>
                        <p>خطأ في اسم المستخدم أو كلمة المرور</p>
                    </div><br>";
                    echo "<a href='index.php'><button class='btn'>العودة</button>";
                }
            }
            ?>

            <header>تسجيل الدخول</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">كلمة المرور</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="تسجيل الدخول">
                </div>

               
            </form>
        </div>
    </div>
</body>

</html>