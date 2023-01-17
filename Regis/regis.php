<?php 

require '../function/function.php';

if(isset($_POST["submit"])) {

    if ( regis($_POST) > 0 ){
        echo
        "<script>
            alert('Akun berhasil terbuat');
            window.location.href = '../Login/login.php'
        </script>";
    } else {
        echo mysqli_error($connect);
    }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="p">

    <!-- Intro -->

    <div class="login">

        <div class="sign-up">
            <span class="form-title">Sign Up</span>
            <form action="" class="daftar" method="post">
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Username..." required>
                    <span class="bar"></span>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="email" placeholder="email..." required>
                    <span class="bar"></span>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" name="password" placeholder="Password..." required>
                    <span class="bar"></span>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirm-password" placeholder="Confirm Password...." required>
                    <span class="bar"></span>
                </div>
                <div class="tombol d-flex justify-content-center align-items-center flex-column">
                    <!-- <a class="text-dark" href="../Login/login.php">Back</a> -->
                    <button type="submit" class="form-button" name="submit">Regis</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Intro end -->

    <!-- Home -->




    <!-- Home end -->




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>