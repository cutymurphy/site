<?php
include("path.php");
include("app/controllers/acc.php");
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Мой сайт</title>
    <link rel="stylesheet" href="assets/css/log.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
<!-- Header -->

<?php include("app/include/header.php"); ?>

<section class="home show">
    <div class="form_container">
        <!-- Login From -->
        <div class="form login_form">
            <form action="account.php" method="post">
                <h2>Привет <?php echo $_SESSION['username']; ?>!!! Здесь можно сменить свой пароль или удалить аккаунт.</h2>
                <div class="err">
                    <p style="color:#ff6a00;"><?=$errorMessage?></p>
                </div>
                <div class="input_box">
                    <input name="old-password" type="password" placeholder="Enter your old password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                    <input name="new-password" type="password" placeholder="Enter your new password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <button type="submit" class="button" name="button-log">Change password</button>

                <div class="signup">Want to delete your account?
                    <a href="<?php echo BASE_URL . 'delete.php'?>">Delete</a></div>
            </form>
        </div>
    </div>
</section>

<script src="assets/js/cookies.js"></script>

</body>
</html>
