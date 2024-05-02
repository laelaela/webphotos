<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />

    <!-- font awesome 6 offline -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/solid.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/regular.css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>"><i class="fa-solid fa-camera"></i> Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-user"></i> Rizky ilham maulana</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">laela05@gmail.com</a></li>
                            <li><a href="" class="dropdown-item"><i class="fa-solid fa-person-through-window"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Ela</h1>
                <p class="lead mb-0">Album Photos</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <h4>My Contents</h4>

        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Caption</th>
                    <th>Category</th>
                    <th>Album</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        Beberapa wisata curug terkenal di Jawa barat
                        <p>
                            <i class="fa-regular fa-heart"></i> 15
                            <i class="fa-regular fa-comment"></i> 110
                        </p>
                    </td>
                    <td>food</td>
                    <td>Travel</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">edit</a>
                        <a href="" class="btn btn-danger btn-sm">del</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>