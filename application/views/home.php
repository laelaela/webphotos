<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
   <title>Blog Ela</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />

    <!-- base_url() = localhost/ci_ela, untuk manggil css,javascript, images -->
    <!-- site_url() = localhost/index.php/ci_ela, untuk memanggil halaman lain -->

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
            <a class="navbar-brand" href="<?= base_url() ?>"><i class="fa-solid fa-camera"></i>Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url() ?>post/profil" role="button">click</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
            <div class="text-bg-info p-3"><h1 class="fw-bolder">Welcome To Gallery Photos</h1>
                <p class="lead mb-0">Tugas UKK</p>
            </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col">
                
                <!-- Nested row for non-featured blog posts-->
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                    <?php foreach ($data as $d) : ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?= base_url('assets/images/') . $d->lokasi_file; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="reaction">
                                        <small><i class="fa-regular fa-heart"></i> 1000K</small>
                                        <!-- Button trigger modal -->
                                        <small><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-comment"></i> 600k 
                                        </button></small>

                                        <small><i class="fa-solid fa-share-nodes"></i></small>
                                    </div>
                                    <h5 class="card-title"><?php echo $d->judul_foto; ?></h5>
                                    <p class="card-text"><?php echo $d->deskripsi_foto; ?></p>
                                </div>
                                <div class="card-footer">
                                <button type="button" class="btn btn-secondary">Last minute 4 ago</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Selanjutnya</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">100</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Lainnya</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                <div class="text-bg-warning p-3">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Cari foto" aria-label="Cari wisata..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">enter</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="text-bg-warning p-3">Pilihan daerah</div>
                    <div class="card-body">
                        <form action="">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                    <label class="form-check-label" for="firstCheckbox">Pantai Bali Island</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                    <label class="form-check-label" for="secondCheckbox">Arsitek</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Kawah Ijen</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                                    <label class="form-check-label" for="fourthCheckbox">Jepang</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                                    <label class="form-check-label" for="fourthCheckbox">Universitas Stanford</label>
                                </li>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                                    <label class="form-check-label" for="fourthCheckbox">Makkah</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                                    <label class="form-check-label" for="fourthCheckbox">RS pondok indah</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                                    <label class="form-check-label" for="fourthCheckbox">Psikolog</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
                                    <label class="form-check-label" for="fourthCheckbox">Dokter Bedah</label>
                                </li>
                            </ul>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-primary btn-sm" role="button" type="reset">Reset</button>
                    </div>
                    </form>
                </div>
                <!-- Side widget-->
                <!-- <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Comment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
</body>

</html>