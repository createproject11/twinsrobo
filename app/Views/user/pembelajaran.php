<?= $this->extend('/templates/super_user2'); ?>

<?= $this->section('content'); ?>
<!-- Awal Jumbotron -->
<div class="jumbotron jumbotron-fluid" style="position: relative;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-8 d-flex flex-column">
                <h1 class="display-4">Kuy Kita Belajar Bersama Twins Robo!</h1>
                <p class="lead">Bersenang-senang dan belajar aplikasi robot secara lengkap di Twins Robo</p>

                <div class="col-lg-12">
                    <form class="form-row">
                        <div class="col-auto">
                            <input class="form-control mr-md-2" type="search" placeholder="Search Blog Post..." aria-label="Search" />
                        </div>

                        <button class="btn btn-primary my-2 my-sm-0" type="submit">
                            <i class="fas fa-search" style="font-weight: 200;"></i>
                            Cari
                        </button>
                    </form>
                </div>

            </div>
            <div class="col-lg-4 animasi">
                <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_nIhxTu.json" background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
            </div>
        </div>
        <!-- Akhir Row -->
    </div>
    <!-- Akhir Container -->
    <svg style="position: absolute; bottom:0; left:0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#BCE5FF" fill-opacity="0.20" d="M0,160L48,165.3C96,171,192,181,288,181.3C384,181,480,171,576,154.7C672,139,768,117,864,133.3C960,149,1056,203,1152,197.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

</div>
<!-- Akhir Jumbotron -->

<!-- Awal Blog -->
<div id="blog2">
    <!--Awal Blog Bagian Atas -->
    <div class="blogAtas">
        <div class="container">
            <h2 class="title mb-5">Top 5 Course</h2>
            <div class="row">
                <!-- Awal atasKiri -->
                <div class="atasKiri col-lg-6">
                    <div class="card">
                        <div class="gambar">
                            <img src="img/dashboard.png" class="card-img-top" alt="" style="width: 100%;" />
                        </div>
                        <div class="card-body">
                            <div class="isiSub">
                                <img src="img/Logo Apps Twins Robo.png" alt="" />
                                <h4 class="sub-title">Twins Robo App</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="title">
                                        Pemrogramman Robot Dasar
                                    </h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="diskon">Rp 355,000</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="setelahDiskon">Rp 123,321</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(35)</span>
                                        </div>
                                        <i class="bar bi bi-bar-chart-fill"></i>
                                    </div>
                                </div>
                                <hr style="height:1px; width: 100%; color:aqua;">
                            </div>

                            <form>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="centang">
                                    <label form-check-label for="centang">Bayar Sekali Akses Selamanya</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir atasKiri -->

                <!-- Awal atasKanan -->
                <div class="atasKanan col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="gambar">
                                    <img src="img/dashboard.png" class="card-img-top" alt="" style="width: 171px; height: 128px" />
                                </div>
                                <div class="card-body">
                                    <h2 class="title">Pemrogramman Arduino Dasar</h2>
                                    <div class="row d-flex" style="font-size: .6em;">
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="diskon">Rp 355,000</p>
                                        <!-- </div> -->
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="setelahDiskon">Rp 123,321</p>
                                        <!-- </div> -->
                                    </div>

                                    <div class="row" style="font-size: .9em;">
                                        <div class="col-sm-12">
                                            <div class="rating">
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(35)</span>
                                                </div>
                                                <i class="bar bi bi-bar-chart-fill"></i>
                                            </div>
                                        </div>
                                        <hr style="height:1px; width: 100%; color:aqua;">
                                    </div>

                                    <form>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="centang2">
                                            <label form-check-label for="centang2" class="form-atasKanan">Bayar Sekali Akses Selamanya</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="gambar">
                                    <img src="img/dashboard.png" class="card-img-top" alt="" style="width: 171px; height: 128px" />
                                </div>
                                <div class="card-body">
                                    <h2 class="title">Pemrogramman IoT Dasar</h2>
                                    <div class="row d-flex" style="font-size: .6em;">
                                        <!-- <div class=" col-sm-6"> -->
                                        <p class="diskon">Rp 355,000</p>
                                        <!-- </div> -->
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="setelahDiskon">Rp 123,321</p>
                                        <!-- </div> -->
                                    </div>

                                    <div class="row" style="font-size: .9em;">
                                        <div class="col-sm-12">
                                            <div class="rating">
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(35)</span>
                                                </div>
                                                <i class="bar bi bi-bar-chart-fill"></i>
                                            </div>
                                        </div>
                                        <hr style="height:1px; width: 100%; color:aqua;">
                                    </div>

                                    <form>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="centang3">
                                            <label form-check-label for="centang3" class="form-atasKanan">Bayar Sekali Akses Selamanya</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="gambar">
                                    <img src="img/dashboard.png" class="card-img-top" alt="" style="width: 171px; height: 128px" />
                                </div>
                                <div class="card-body">
                                    <h2 class="title">Merancang IoT Dasar</h2>
                                    <div class="row d-flex" style="font-size: .6em;">
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="diskon">Rp 355,000</p>
                                        <!-- </div> -->
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="setelahDiskon">Rp 123,321</p>
                                        <!-- </div> -->
                                    </div>

                                    <div class="row" style="font-size: .9em;">
                                        <div class="col-sm-12">
                                            <div class="rating">
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(35)</span>
                                                </div>
                                                <i class="bar bi bi-bar-chart-fill"></i>
                                            </div>
                                        </div>
                                        <hr style="height:1px; width: 100%; color:aqua;">
                                    </div>

                                    <form>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="centang4">
                                            <label form-check-label for="centang4" class="form-atasKanan">Bayar Sekali Akses Selamanya</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="gambar">
                                    <img src="img/dashboard.png" class="card-img-top" alt="" style="width: 171px; height: 128px" />
                                </div>
                                <div class="card-body">
                                    <h2 class="title">Pengenalan Elektronika Dasar</h2>
                                    <div class="row" style="font-size: .6em;">
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="diskon">Rp 355,000</p>
                                        <!-- </div> -->
                                        <!-- <div class="col-sm-6"> -->
                                        <p class="setelahDiskon">Rp 123,321</p>
                                        <!-- </div> -->
                                    </div>

                                    <div class="row" style="font-size: .9em;">
                                        <div class="col-sm-12">
                                            <div class="rating">
                                                <div class="stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(35)</span>
                                                </div>
                                                <i class="bar bi bi-bar-chart-fill"></i>
                                            </div>
                                        </div>
                                        <hr style="height:1px; width: 100%; color:aqua;">
                                    </div>

                                    <form>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="centang5">
                                            <label form-check-label for="centang5" class="form-atasKanan">Bayar Sekali Akses Selamanya</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Akhir atasKanan -->
            </div>
        </div>
    </div>
    <!--Akhir Blog Bagian Atas -->
</div>
<!-- Akhir Blog -->

<!-- Awal Kategori Pembelajaran -->
<div id="kategoriPembelajaran">
    <!-- Awal Container -->
    <div class="container">
        <h1>Kategori Pembelajaran Twins Robo</h1>
        <div class="kategori">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="" class="h-100">
                        <img src="img/kategori1.png" alt="" />
                        <p>Pemrograman Robot</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="" class="h-100">
                        <img src="img/kategori5.png" class="bg-primary" alt="" />
                        <p>Merakit Robot</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="" class="h-100">
                        <img src="img/kategori6.png" class="bg-danger" alt="" />
                        <p>Pemrograman Arduino</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="" class="h-100">
                        <img src="img/kategori7.png" class="bg-primary" alt="" />
                        <p>Pembelajaran Internet of Things</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="" class="h-100">
                        <img src="img/kategori8.png" class="bg-primary" alt="" />
                        <p>Pengenalan Elektronika</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="" class="h-100">
                        <img src="img/kategori9.png" class="bg-primary" alt="" />
                        <p>Pemrograman Android</p>
                    </a>
                </div>


            </div>
            <!-- Akhir Row -->
        </div>
        <!-- Akhir Kategori -->
    </div>
    <!-- Akhir Container -->
</div>
<!-- Akhir Kategori Pembelajaran -->

<?= $this->endSection(); ?>