<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?= route('base_url'); ?>"><span class="fw-bolder text-primary fst-italic">Food.co</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about#location">Location</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= route('partner'); ?>">Our Partner</a></li>

                            @auth
                            <li class="nav-item"><a class="btn btn-primary btn-lg px-3 py-1 fs-6 fw-bolder" href="/logout">Logout</a></li>
                                @else
                                <li class="nav-item"><a class="btn btn-primary btn-lg px-3 py-1 fs-6 fw-bolder" href="/login">Login</a></li>

                            @endauth
                        </ul>
                    </div>
                </div>
</nav>