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
        <div class="bg-light px-5 pb-5">
            <div class="container-menu row gx-5">
                <div class="col-xxl-7">
                    <!-- Partner Section-->
                    <section>
                        <div class="container py-5">
                            <div class="text-center pb-5 text-gradient">
                                <h1 class="fw-bolder">Our Partner</h1>
                            </div>
                            <div class="row g-4">
                                @foreach ($partners as $partner)
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="card shadow mb-4" style="height: 450px;">
                                        <img src="{{ url('/') }}/uploads/{{ $partner->photo }}" class="card-img-top img-fluid rounded-top" alt="gambar-partner" style="height: 200px; object-fit: cover; object-position: center;">
                                        <div class="card-body">
                                            <h4 class="fw-bold text-primary">{{ $partner->name }}</h4>
                                            <p class="card-text">{!! nl2br(e($partner->Deskripsi)) !!}</p>
                                        </div>
                                        <div class="card-footer bg-transparent d-flex justify-content-between">
                                            <a href="{{ route('menus', $partner->id) }}" class="btn btn-primary rounded-pill px-3 text-light">Order Menu</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
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