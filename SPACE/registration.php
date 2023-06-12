<?php
include("path.php");
include("app/controllers/reg.php");
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Мой сайт</title>
    <link rel="stylesheet" href="assets/css/reg.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
<!-- Header -->

<?php include("app/include/header.php"); ?>

<section class="home show">
    <div class="form_container">
        <!-- Signup From -->
        <div class="form signup_form">
            <form action="registration.php" method="post">
                <h2>Signup</h2>
                <div class="err">
                    <p style="color:#ff6a00;"><?=$errorMessage?></p>
                </div>
                <div class="input_box">
                    <input name="name" value="<?=$username?>" type="text" placeholder="Enter your nickname" required />
                    <i class="uil uil-envelope-alt name"></i>
                </div>
                <div class="input_box">
                    <input name="email" value="<?=$email?>" type="email" placeholder="Enter your email" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input name="password" type="password" placeholder="Create password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                    <input name="password-repeat" type="password" placeholder="Confirm password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <button type="submit" class="button" name="button-reg">Signup Now</button>

                <div class="signup">Already have an account? <a href="<?php echo BASE_URL . 'login.php'?>">Login</a></div>
            </form>
        </div>
    </div>
</section>

<script src="assets/js/authorization.js"></script>
<script src="assets/js/cookies.js"></script>

</body>
</html>
