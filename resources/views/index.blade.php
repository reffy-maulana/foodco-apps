<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Food.Co - Istana Kuliner Pakujaya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset ('import/assets/profile.png')}}" type="image/x-icon">
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tambahkan referensi CSS slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href={{asset ('import/css/styles.css')}} rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Navigation-->
        <x-navbar></x-navbar>
    </header>

    <main class="flex-shrink-0">
        <div class="bg-white py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Header text content-->
                        <div class="text-center text-lg-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase">Order &middot; Menu &middot; Marketing</div>
                            </div>
                            <div class="fs-3 fw-normal text-muted">Come order to</div>
                            <h1 class="display-3 fw-bolder mb-3"><span class="text-gradient d-inline">Istana Kuliner Pakujaya</span></h1>
                            <div class="text-center text-lg-start">
                                <div class="text-gradient p-1 mb-4">
                                    <i class="fas fa-clock me-2"></i>
                                    <span class="fw-bold">Open Every Day</span><br>
                                    <span class="fw-bold">10:00 AM - 22:00 PM</span>
                                </div>
                            </div>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-lg-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="<?= route('partner'); ?>">Order</a>
                                <a class="btn btn-success btn-lg px-5 py-3 fs-6 fw-bolder" href="#location">View Outlet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Header profile picture-->
                        <x-hero-picture></x-hero-picture>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Berita / Event -->
        <section class="py-5 container bg-white">
            <h2 class="fw-bolder mb-4 text-gradient text-center">News & Events</h2>
            <div id="newsCarousel" class="slick-carousel">
                @foreach ($news as $berita)
                <div class="news-item p-3">
                    <div class="card shadow mb-4" style="height: 550px;">
                        <a class="d-block" href="#">
                            <img class="card-img-top img-fluid" src="{{ url('/') }}/uploads/news/{{ $berita->photo }}" alt="Image Title" style="object-fit: cover; height: 300px;" />
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h2 class="h3"><a class="text-black text-decoration-none" href="#">{{ $berita->headline }}</a></h2>
                            <div class="small text-muted mb-2">
                                <i class="fas fa-calendar-alt me-2"></i>{{ $berita->created_at->format('l, d F Y') }}
                            </div>
                            <p class="text-black flex-grow-1">{{ $berita->Deskripsi }}</p> 
                            <p class="text-dark mt-2">Author: {{$berita->author}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-outline-primary me-2" type="button" id="news-prev">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-arrow-left"></i>
                    </span>
                </button>
                <button class="btn btn-outline-primary" type="button" id="news-next">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </button>
            </div>
        </section>

        <!-- Partners Carousel Section -->
        <section class="py-5 container bg-white">
            <h2 class="fw-bolder mb-4 text-gradient text-center">Our Partners</h2>
            <div id="partnersCarousel" class="slick-carousel row mb-5">
                @foreach ($partners as $partner)
                <div class="p-3" style="padding-right: 15px;">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ asset('uploads/' . $partner->photo) }}" alt="{{ $partner->name }}" style="width: 100%; height: 250px; object-fit: cover;" />
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">{{ $partner->name }}</h5>
                            <p class="card-text mb-0">{{ $partner->deskripsi }}</p>
                        </div>
                        <div class="card-footer p-2 pt-0 bg-transparent border-top-0">
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-outline-primary" href="{{ route('menus', ['partner' => $partner->id]) }}">Order Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-outline-primary me-2" type="button" id="prevBtn">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-arrow-left"></i>
                    </span>
                </button>
                <button class="btn btn-outline-primary" type="button" id="nextBtn">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </button>
            </div>
        </section>

        <!-- Location Section-->
        <section class="bg-white py-5" id="location">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center align-items-center">
                    <h2 class="fw-bolder text-center"><span class="text-gradient d-inline">Outlet Kami</span></h2>
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                        <div class="text-center my-5">
                            <p class="lead fw-light mb-4">"Kamu bisa temukan lokasi outlet kami disini!"</p>
                            <p class="text-muted">Lokasi kami berada di Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15324</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center">
                        <div class="iframe-container text-center my-5">
                            <iframe class="border border-primary" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.217853707533!2d106.67159007586825!3d-6.23498876105943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fba8f472b4e5%3A0xfdb086c844eb32cc!2sISTANA%20KULINER!5e0!3m2!1sid!2sid!4v1717209279987!5m2!1sid!2sid" width="500" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <button id="btnScrollToTop" class="btn btn-primary d-block mx-auto mt-3">
            <i class="bi bi-arrow-up-short"></i>Top
        </button>
        <div class="container px-5 mt-5">
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
    <script src="js/script.js"></script>

    <!-- JS slick -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    {{-- Script untuk news carousel --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('#newsCarousel').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                prevArrow: false,
                nextArrow: false,
                responsive: [
                    {
                        breakpoint: 992, // lg
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768, // md
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $('#news-prev').click(function(){
                $('#newsCarousel').slick('slickPrev');
            });

            $('#news-next').click(function(){
                $('#newsCarousel').slick('slickNext');
            });
        });
    </script>

    {{-- Script untuk Partner Carousel --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('#partnersCarousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                prevArrow: false,
                nextArrow: false,
                responsive: [
                    {
                        breakpoint: 992, // lg
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768, // md
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $('#prevBtn').click(function(){
                $('#partnersCarousel').slick('slickPrev');
            });

            $('#nextBtn').click(function(){
                $('#partnersCarousel').slick('slickNext');
            });
        });
    </script>
</body>
</html>