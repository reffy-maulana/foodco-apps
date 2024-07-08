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
        <div class="bg-light py-5">
            <div class="px-5 pb-5">
                <div class="container-menu row gx-5">
                    <div class="col-xxl-7">
                        <!-- Menu Section-->
                        <div class="py-5">
                            <div class="container py-5">
                                <div class="tab-class text-center">
                                    <div class="row mb-4">
                                        <div class="col-6 text-start text-gradient">
                                            <h1 class="fw-bolder">Menu {{ $partner->name }}</h1>
                                        </div>

                                        <div class="col-6 text-end">
                                            <ul class="nav d-inline-flex text-center mb-5 small fw-bolder gap-2">
                                                @auth
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahMenu">Tambah Menu</button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPartner">Edit Partner</button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">Delete Partner</button>
                                                @else
                                                @endauth
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="menu-content">
                                        <div id="tab-1" class="">
                                            <div class="row g-4">
                                                <div class="col-lg-12">
                                                    <div class="menu-container row g-4">
                                                        @foreach ($filteredMenuItems as $menu)
                                                        <div class="menu-items col-md-6 col-lg-4 col-xl-3">
                                                            <div class="rounded position-relative">
                                                                <div class="menu-img">
                                                                    <img src="{{ url('/') }}/uploads/menu/{{ $menu->photo }}" class="img-fluid w-100 rounded-top" alt="">
                                                                </div>
                                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Foods</div>
                                                                <div class="p-2 border border-secondary border-top-0 rounded-bottom">
                                                                    <h4 class="fw-bold text-secondary"><?= $menu->name; ?></h4>
                                                                    <p><?= $menu->Deskripsi; ?></p>
                                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                                        <p class="fs-5 fw-bold">Rp. 20.000</p>
                                                                        <a type="button" class="btn btn-primary rounded-pill px-3 text-light" href="#">Beli</a>
                                                                        @auth
                                                                        <button type="button" class="btn border border-secondary rounded-pill px-3 text-secondary" data-bs-toggle="modal" data-bs-target="#editMenu{{ $menu->id }}">Edit</button>
                                                                        @else
                                                                        @endauth
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

    {{-- Modal Tambah Menu --}}
    <div class="modal fade" id="tambahMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('partner', $partners->id).'/menu'  }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group first">
                            <label for="username">Nama Menu</label>
                            <input type="text" class="form-control" id="username" value="<?= old('name')  ?>" name="name">
                        </div>
                        <div class="form-group first">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" value="<?= old('deskripsi')  ?>" name="deskripsi">
                        </div>
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label"></label>
                            <input class="form-control" type="file" id="formFile" name="photo" accept=".png, .jpg, .jpeg">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Edit Menu --}}
    @foreach ($filteredMenuItems as $menu)

    @if (isset($menu))

    <div class="modal fade" id="editMenu{{ $menu->id }}" tabindex="-1" aria-labelledby="editMenuLabel{{ $menu->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMenuLabel{{ $menu->id }}">Edit Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menus.update', ['partner' => $menu->partner_id, 'menu' => $menu->id]) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="menuName{{ $menu->id }}">Nama Menu</label>
                            <input type="text" class="form-control" id="menuName{{ $menu->id }}" name="name" value="{{ old('name', $menu->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="menuDeskripsi{{ $menu->id }}">Deskripsi</label>
                            <input type="text" class="form-control" id="menuDeskripsi{{ $menu->id }}" name="Deskripsi" value="{{ old('Deskripsi', $menu->Deskripsi) }}">
                        </div>
                        <div class="mb-3">
                            <label for="menuPhoto{{ $menu->id }}" class="form-label">Photo</label>
                            <input class="form-control" type="file" id="menuPhoto{{ $menu->id }}" name="photo" accept=".png, .jpg, .jpeg">
                            @if ($menu->photo)
                            <img src="{{ url('/') }}/uploads/menu/{{ $menu->photo }}" class="img-fluid w-100 h-50 rounded-top" alt="">
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
    @endif
    @endforeach




    {{-- Modal Edit Partner --}}
    <div class="modal fade" id="editPartner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Partner</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('partner.update', $partner->id)  }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group first">
                            <label for="username">Nama Menu</label>
                            <input type="text" class="form-control" id="username" value="<?= old('name', $partner->name)  ?>" name="name">
                        </div>
                        <div class="form-group first">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" value="<?= old('deskripsi', $partner->Deskripsi)  ?>" name="deskripsi">
                        </div>
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label"></label>
                            <input class="form-control" type="file" id="formFile" name="photo" accept=".png, .jpg, .jpeg">
                            @if ($partner->photo != "")
                            <img src="{{ url('/') }}/uploads/{{ $partner->photo }}" class="img-fluid w-100 h-50 rounded-top" alt="">
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Delete Partner --}}
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('partner.destroy', $partner->id)  }}" method="post">
                    @method('delete')
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" id="delete_id">
                    <div class="modal-body">
                        <center>
                            <h1>Are You Sure?</h1>
                            <h6>You want to Delete the user!</h6>
                        </center>
                    </div>
                    <div class="row" style="margin-bottom: 50px; text-align: center;">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-dark btn-modal" data-bs-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-danger btn-modal">Delete</button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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