<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container px-5">
        <a class="navbar-brand" href="<?= route('base_url'); ?>"><span class="fw-bolder text-primary">Food.co</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-3 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= route('partner'); ?>">Our Partner</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>

                @auth
                <li class="nav-item"><a class="btn btn-primary btn-lg px-3 py-1 fs-6 fw-bolder" href="/logout">Logout</a></li>
                @else
                <li class="nav-item"><button class="btn btn-primary btn-lg px-3 py-1 fs-6 fw-bolder" data-bs-toggle="modal" data-bs-target="#loginModal">Admin</button></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-top-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=  url('login_post')  ?>" method="post">
                    <?=  csrf_field()  ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="name" value="<?= old('name')  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Log In</button>
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" checked> Remember me
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-dialog-top-right {
        position: absolute;
        top: 10%;
        right: 5%;
        margin: 0;
    }
</style>