<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Food.Co - Istana Kuliner Pakujaya</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset ('import/assets/profile.png')}}" type="image/x-icon">
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href={{asset ('import/css/styles.css')}} rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Navigation-->
        <x-navbar></x-navbar>
    </header>
    
    <main class="flex-shrink-0">

        <!-- About Section-->
        <section class="bg-light py-5" id="aboutus">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <h2 class="display-5 text-center fw-bolder mb-5"><span class="text-gradient d-inline">Tentang Kami</span></h2>
                    <hr class="mb-5">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="text-center my-5 my-lg-0">
                            <h2 class="mb-5 fw-bolder"><span class="text-gradient d-inline">Tentang Website</span></h2>
                            <hr>
                            <p class="lead fw-light mb-4">"Temukan beragam menu menarik di Istana Kuliner Pakujaya melalui Food.Co"</p>
                            <p class="text-muted mb-4">
                                Food.Co adalah sebuah aplikasi berbasis website yang bertujuan sebagai platform untuk memasarkan Food Court Istana Kuliner Pakujaya. Aplikasi ini dirancang untuk memfasilitasi interaksi antara pengguna dengan Food Court Istana Kuliner Pakujaya, menyediakan informasi yang komprehensif tentang menu makanan, harga, promosi, serta acara khusus yang diselenggarakan di sana. Dengan fitur-fitur yang inovatif dan user-friendly, Food.Co membantu memperluas jangkauan Food Court Istana Kuliner Pakujaya serta meningkatkan keterlibatan pengguna dalam menikmati pengalaman kuliner yang unik dan beragam.
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center my-5 my-lg-0">
                            <h2 class="fw-bolder mb-5"><span class="text-gradient d-inline">Kontak Kami</span></h2>
                            <hr>
                            <p class="text-muted mb-4">Hubungi kami melalui informasi berikut:</p>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-3"><i class="bi bi-telephone-fill me-2"></i>Nomor Telepon: +62 123 4567 890</li>
                                <li class="mb-3"><i class="bi bi-envelope-fill me-2"></i>Email: info@food.co</li>
                                <li class="mb-3"><i class="bi bi-instagram me-2"></i>Instagram: <a href="https://www.instagram.com/istanakulinerpakujaya?igsh=MXZmbXV1bXQ2YTBycw==" class="text-decoration-none text-gradient">istanakulinerpakujaya</a></li>
                                <li class="mb-3"><i class="bi bi-facebook me-2"></i>Facebook: <a href="https://www.facebook.com/istanakulinerpakujaya" class="text-decoration-none text-gradient">Istana Kuliner Pakujaya</a></li>
                                <li class="mb-3"><i class="bi bi-twitter me-2"></i>Twitter: <a href="https://twitter.com/istanakuliner" class="text-decoration-none text-gradient">@istanakuliner</a></li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section-->
        <section class="bg-white py-5" id="ourteam">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-10">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tim Kami</span></h2>
                            <p class="lead fw-light mb-4">Website ini dibangun oleh peserta program Baparekraf Digital Talent Web Development Bootcamp 2024</p>
                            <div class="team-container">
                                <div class="team-items">
                                    <img src="{{asset ('import/assets/reffy.png')}}" alt="">
                                    <h2 class="fw-bold text-gradient">Reffy</h2>
                                    <p><span class="fw-semibold">Fullstack</span> Developer</p>
                                </div>
                                <div class="team-items">
                                    <img src="{{asset ('import/assets/dwi.png')}}" alt="">
                                    <h2 class="fw-bold text-gradient">Dwi</h2>
                                    <p><span class="fw-semibold">Backend</span> Developer</p>
                                </div>
                                <div class="team-items">
                                    <img src="{{asset ('import/assets/rayhan.png')}}" alt="">
                                    <h2 class="fw-bold text-gradient">Rayhan</h2>
                                    <p><span class="fw-semibold">FrontEnd</span> Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-center flex-column flex-sm-row">
                <div class="col-auto ">
                    <div class="small m-0 text-center">Copyright &copy; Food.co Project 2024</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>