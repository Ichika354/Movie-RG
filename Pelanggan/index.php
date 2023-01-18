<?php 
    require 'function/function.php';

    $movies = query("SELECT * FROM film");


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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg nav sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="assets/images/logo/logo.png" width="35" height="29">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item">
                        <button class="nav-link active btn text-black" onclick="return window.location.href = 'index.php';">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar end -->

    <!-- Intro -->

    <div class="intro d-flex justify-content-center align-items-center gap-3 text-white">
        <div class="first">
            <h1>ANIME</h1>
        </div>
        <div class="second">
            <h1>MOVIES</h1>
        </div>
    </div>


    <!-- Intro end -->

    <!-- Home -->
    <br><br>
    <div class="home">
        <div class="home-content row d-flex justify-content-center align-items-center gap-4 w-100 ps-3">
            <?php $i = 1; ?>
            <?php foreach($movies as $movie) : ?>
            <div class="card col-sm-6 " style="width: 15rem;">
                <img src="assets/images/anime/<?= $movie["tumbnail"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-text"> <?= $i; ?> <?= $movie["judul"]; ?></h5>
                    <p><?= $movie["deskripsi_judul"]; ?></p>
                    <a href="#" class="btn bg-primary btn-primary">Go somewhere</a>
                </div>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>

        </div>

    </div>

    <br><br>

    <iframe width="550" height="300" src="https://www.youtube.com/embed/a7TZEthPHoU?list=PLPanbgyToztaDhNmS0krUvUkYmylqD7Mi" title="Fairy Tail (Final Arc) - Episode 278 [Takarir Indonesia]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <!-- Home end -->



    <!-- <br><br><br><br> -->

    <!-- Footer -->

    <footer>
        <div class="kontak">
            <img src="assets/images/logo/logo.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maiores.</p>
        </div>
        <div class="list">
            <div class="icon">
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-github"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <div class="help">
                <div class="w">

                    <a href="">help</a>
                    <a href="">help</a>
                    <a href="">help</a>
                </div>
                <br>
                <div class="w">
                    <a href="">help</a>
                    <a href="">help</a>
                    <a href="">help</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="copy">
        <p>© 2022 ‧ Anime Movie. All rights reserved.</p>
    </div>




    <!-- Footer end -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>