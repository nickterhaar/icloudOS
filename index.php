<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>icloudOS</title>
</head>
<body>
    <?php
        if (isset($_SESSION['first-name'])) {
            header("Location: icloudos.php");
            exit();
        }

        if (isset($_POST['login'])) {
            $_SESSION['first-name'] = $_POST['first-name'];
            $_SESSION['last-name'] = $_POST['last-name'];
            header("Location: icloudos.php");
            exit();
        }

    ?>
    <img src="assets/images/backgrounds/bigsur-light.jpeg" alt="">
    <div class="login-container">
        <i class="fab fa-apple"></i>
        <form action="" method="POST">
            <input type="text" name="first-name" id="first-name" placeholder="First Name">
            <input type="text" name="last-name" id="last-name" placeholder="Last Name">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <div class="small-screen">
        <h1>icloudOS</h1>
        <p>Unfortunately for now your screen is too small to use icloudOS.</p>
        <p>A version for smaller screensizes will come later. For now your screen has to be at least 1920 by 1080 to use icloudOS.</p>
    </div>
</body>
</html>