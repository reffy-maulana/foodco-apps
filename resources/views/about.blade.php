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
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="/"><span class="fw-bolder text-primary fst-italic">Food.co</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                            <li class="nav-item"><a class="nav-link" href="#aboutus">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ourteam">Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="/partner">Our Partner</a></li>
                            <li class="nav-item"><a class="btn btn-primary btn-lg px-3 py-1 fs-6 fw-bolder" href="/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Location Section-->
            <section class="bg-white py-5" id="location">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <h2 class="display-5 fw-bolder text-center"><span class="text-gradient d-inline">Our Outlet</span></h2>
                        <div class="col-xxl-5 my-auto">
                            <div class="text-center my-5">
                                <p class="lead fw-light mb-4">You can find our location in the right map</p>
                                <p class="text-muted">Our location is at Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15324</p>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="iframe-container text-center my-5">
                                <iframe style="border: 3px solid #e21e80" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.217853707533!2d106.67159007586825!3d-6.23498876105943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fba8f472b4e5%3A0xfdb086c844eb32cc!2sISTANA%20KULINER!5e0!3m2!1sid!2sid!4v1717209279987!5m2!1sid!2sid" width="500" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section-->
            <section class="bg-light py-5" id="aboutus">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-9">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Us</span></h2>
                                <p class="lead fw-light mb-4">Our Website is called Food.co where you can find menu at Foodcourt Istana Kuliner Pakujaya</p>
                                <p class="text-muted">This website purpose is to help Foodcourt Istana Kuliner Pakujaya gaining customer, to get easy access to view the available menu</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://www.instagram.com/istanakulinerpakujaya?igsh=MXZmbXV1bXQ2YTBycw=="><i class="bi bi-instagram"></i></a>
                                </div>
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
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Our Team</span></h2>
                                <p class="lead fw-light mb-4">This website builded by bootcamp student from Baparekraf Digital Talent Web Development 2024 Program</p>
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
                    <div class="col-auto "><div class="small m-0 text-center">Copyright &copy; Food.co Project 2024</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
