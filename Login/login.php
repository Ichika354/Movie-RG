<?php
require '../function/function.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM users WHERE username_login = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        $verif = password_verify($password, $row["password"]);
        if ($verif) {
            //set session
            //$_SESSION["login"] = true;
            echo "<script>
                    window.location.href = '../homepage.php'
                  </script>";
            exit;
        }
    }

    $result2 = mysqli_query($connect, "SELECT * FROM users WHERE username_login = '$username' AND password = '$password' ");
    $cek = mysqli_num_rows($result2);

    if ($cek > 0) {
        global $result2;

        $data = mysqli_fetch_assoc($result2);

        if ($data["level"] === "admin") {

            echo "<script>
                    window.location.href = '../admin/dashboard/dashboard.php'
                </script>";
        }
    }

    $error = true;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="p">

    <!-- Intro -->

    <div class="login">

        <div class="sign-up">
            <span class="form-title">Sign In</span>

            <form action="" method="post">
                <?php if (isset($error)) : ?>
                    <p class="text-danger text-center">Username atau password salah</p>
                <?php endif; ?>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                    <span class="bar"></span>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Confirm Password" required>
                    <span class="bar"></span>
                </div>
                <button type="submit" name="login" name="login" class="form-button">Login</button>

            </form>
            <div class="regis text-center">
                <p>Don't have an account? <a href="../Regis/regis.php">Sign Up now</a></p>

            </div>
        </div>
    </div>


    <!-- Intro end -->

    <!-- Home -->




    <!-- Home end -->




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>