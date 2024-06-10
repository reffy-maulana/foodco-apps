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
            <x-navbar></x-navbar>
            <div class="content">
                <div class="container px-5 py-5">
                  <div class="row justify-content-center py-5">
                    <div class="container-login-form col-md-6 py-5 bg-light">
                      <div class="row justify-content-center">
                        <div class="col-md-12">
                          <div class="form-block">
                            <div class="mb-4 text-center py-5">
                                <h3>Sign In to <span class="fw-bold text-gradient">Food.Co</span></h3>
                            </div>
                            <form action="<?=  url('login_post')  ?>" method="post">
                            <?=  csrf_field()  ?>

                              <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="<?= old('name')  ?>" name="name">
                              </div>
                              <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" value="" name="password">
                              </div>

                              <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                  <input type="checkbox" checked="checked"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </div>

                              <div class="text-center">
                                <input type="submit" value="Log In" class="fw-bold btn btn-form text-white btn-primary">
                              </div>

                              <span class="d-block text-center my-4 text-muted"> or sign in with</span>

                              <div class="social-login text-center px-4">
                                <a class="text-gradient"><i class="bi bi-facebook"></i></a>
                                <a class="text-gradient"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient"><i class="bi bi-google"></i></a>
                                </a>
                              </div>
                            </form>
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
