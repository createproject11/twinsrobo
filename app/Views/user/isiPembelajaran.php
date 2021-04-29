<?= $this->extend('/templates/super_user2'); ?>

<?= $this->section('content'); ?>
<!-- Awal Jumbotron -->
<div class="jumbotron jumbotron-fluid" style="position: relative;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-8 d-flex flex-column">
                <h1 class="display-4">PEMROGRAMMAN ROBOT</h1>
                <p class="lead">Bersenang-senang Belajar Pemrogramman Robot Bersama Twins Robo.</p>

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
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_UbErcC.json" background="transparent" speed="1" style="width: 100%; height: 300px;" loop autoplay></lottie-player>
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

<!-- Materi Pembelajaran -->
<div class="materiPembelajaran">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Materi Pembelajaran</h1>
            </div>

            <div class="col-sm-12">
                <a href="">Featured</a>
                <a href="">Started</a>
                <a href="">Freemium</a>
                <a href="">Premium</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3>Top Featured</h3>
                <p>Kelas yang pilih langsung oleh
                    kebanyakan member di Twins Robo</p>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Materi Pembelajaran -->

<!-- Awal Blog -->
<div id="blog">
    <!--Awal Blog Bagian Bawah -->
    <div class="blogBawah">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="gambar">
                            <img src="img/Dashboard.png" class="card-img-top" style="width: fit-content;" alt="" />
                        </div>
                        <div class="card-body">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="date">Twins Robo / 3 Maret 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="gambar">
                            <img src="img/dashboard.png" class="card-img-top" alt="" style="width: fit-content;" />
                        </div>
                        <div class="card-body">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="date">Twins Robo / 3 Maret 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="gambar">
                            <img src="img/dashboard.png" class="card-img-top" alt="" style="width: fit-content;" />
                        </div>
                        <div class="card-body">
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p class="date">Twins Robo / 3 Maret 2021</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Akhir Blog Bagian Bawah -->
</div>
<!-- Akhir Blog -->

<?= $this->endSection(); ?>