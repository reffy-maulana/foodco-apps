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
        <div class="bg-light">
            <div class="px-5 pb-5">
                <div class="container-menu row gx-5">
                    <div class="col-xxl-7">
                        <!-- Menu Section-->
                        <div class="py-5">
                            <div class="container py-5">
                                <div class="tab-class text-center">
                                    <div class="row">
                                        <div class="col-12 pb-5 text-center text-gradient">
                                            <h1 class="fw-bolder">Our Partner</h1>
                                        </div>
                                    </div>

                                    <div class="partner-content">
                                        <div id="tab-1" class="">
                                            <div class="row g-4">
                                                <div class="col-lg-12">
                                                    <div class="partner-container row g-4">
                                                        @foreach ($partners as $partner)
                                                        <div class="partner-items col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                                            <div class="rounded position-relative">
                                                                <div class="partner-img">
                                                                    <img src="{{ url('/') }}/uploads/{{ $partner->photo }}" class="img-fluid w-100 rounded-top" alt="gambar-partner" style="width: 100%; height: 150px; object-fit: cover; object-position: center;">
                                                                </div>
                                                                <div class="p-2 border border-primary border-top-0 rounded-bottom">
                                                                    <h4 class="fw-bold text-primary"><?= $partner->name; ?></h4>
                                                                    <p class="flex-grow-1">{!! $partner->Deskripsi !!}</p>
                                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                                        <a href="{{ route('menus',$partner->id)}}" class="btn btn-primary rounded-pill px-3 text-light"> Order Menu </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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