<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <img src="../assets/images/logo/logo.png" class="ms-3" alt="" width="40" height="40">
        <a class="navbar-brand ps-3" href="#">Admin</a>
        <!-- Sidebar Toggle-->
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search here..." aria-label="Search here." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../Login/login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Navbar end  -->


    <!-- sidebar  -->
    <!-- sidebar end  -->


    <!-- judul  -->
    <div class="col-md-10 p-5 pt-5"><br>
        <h3><i class="fa-solid fa-clipboard"></i> EDIT FILM </h3>
        <hr>
        <div class="col-md-10 p-1 pt-3 text-secondary">
            <h6> Edit Film</h6>
        </div>
        <!-- judul end  -->


        <!-- content  -->
        <form action="" method="post">
            <div class="mb-3">
                <label for="judul_film" class="form-label text-dark">Judul Film</label>
                <input type="text" name="judul_film" id="judul_film" required class="form-control" placeholder="masukkan judul film..">
            </div>
            <label for="basic-url" class="form-label">Deskripsi</label>
            <div class="input-group">
                <span class="input-group-text">Deskripsi</span>
                <textarea class="form-control" aria-label="With textarea" placeholder="masukkan deskripsi film..."></textarea>
            </div>

            <br>

            <label for="basic-url" class="form-label">Link Film</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">URL</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="masukkan link...">
            </div>

            <label for="basic-url" class="form-label">Upload</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>

            <br>

            <button type="submit" name="submit" class="btn btn-success text-light">Submit</button>
            <a href="../Admin/film.php" class="btn btn-secondary">Kembali</a>
        </form>
        <!-- content end  -->

        </main>
    </div>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>