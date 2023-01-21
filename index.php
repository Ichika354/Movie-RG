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
                        <button class="nav-link active btn text-black" onclick="return window.location.href = 'login/login.php';">Sign In</button>
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
            <div class="card col-sm-6 " style="width: 15rem;">
                <img src="assets/images/anime/Crunchyroll.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card col-sm-6 " style="width: 15rem;">
                <img src="assets/images/anime/ASilentVoice.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card col-sm-6 " style="width: 15rem;">
                <img src="assets/images/anime/Fairy.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card col-sm-6 " style="width: 15rem;">
                <img src="assets/images/anime/NInoKuni.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card col-sm-6 " style="width: 15rem;">
                <img src="assets/images/anime/Weathering-with-You.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>

        </div>

    </div>

    <br><br>

    <hr>


    <!-- Home end -->

    <div class="content-1">
        <div class="deskripsi-1">
            <h1>Enjoy Your Movie</h1>
            <h5>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</h5>
        </div>
        <div class="gambar-deskripsi-1">
            <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png" class="img-fluid" alt="">
        </div>
    </div>

    <hr>

    <div class="content-1">
        <div class="deskripsi-1 kedua">
            <h1>Anime Movies or Series</h1>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores praesentium sunt maxime sed
                nulla alias dignissimos enim fuga voluptas.</h5>
        </div>
        <div class="gambar-deskripsi-1 ketiga">
            <img src="https://occ-0-6701-64.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABfpnX3dbgjZ-Je8Ax3xn0kXehZm_5L6-xe6YSTq_ucht9TI5jwDMqusWZKNYT8DfGudD0_wWVVTFLiN2_kaQJumz2iivUWbIbAtF.png?r=11f" class="img-fluid" alt="">
        </div>
    </div>

    <hr>

    <div class="accordion accordion-flush p-5" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
                    being filled with some actual content.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
              
        </div>
    </div>

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