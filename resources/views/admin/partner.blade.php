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
            <div class="container px-5 pb-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPartner">Tambah Partner</button>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Partner</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @php
                        $counter = 1;
                        @endphp
                        @foreach ($partners as $partner)
                        <tr>

                            <th scope="row">{{ $counter++ }}</th>
                            <td>{{ $partner->name }}</td>
                            <td>{{ $partner->Deskripsi }}</td>
                            <td><img style="width: 100px; height: 100px; object-fit: cover; object-position: center;" src="{{ url('/') }}/uploads/{{ $partner->photo }}" alt=""></td>
                            <td>
                                <a class="btn btn-primary btn-lg px-3 py-1 fs-6 fw-bolder" href="{{ route('adminmenus',$partner->id)}}">Lihat</a>
                                <button type="button" class="btn btn-warning btn-lg px-3 py-1 fs-6 fw-bolder" data-bs-toggle="modal" data-bs-target="#editPartner{{ $partner->id }}">Edit</button>
                                <button type="button" class="btn btn-danger btn-lg px-3 py-1 fs-6 fw-bolder" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $partner->id }}">Hapus</button>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
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


    {{-- Modal Tambah Partner --}}
    <div class="modal fade" id="tambahPartner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Partner</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/partner') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group first">
                            <label for="username">Nama Partner</label>
                            <input type="text" class="form-control" id="username" value="<?= old('name')  ?>" name="name">
                        </div>
                        <div class="form-group first">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea style="height: 200px;" class="form-control" id="deskripsi" value="<?= old('deskripsi')  ?>" name="deskripsi"></textarea>
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



    @foreach ($partners as $partner)

    {{-- Modal Edit Partner --}}
    <div class="modal fade" id="editPartner{{ $partner->id }}" tabindex="-1" aria-labelledby="editPartnerLabel{{ $partner->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPartnerLabel{{ $partner->id }}">Edit Partner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('partner.update', $partner->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="partnerName{{ $partner->id }}">Nama Partner</label>
                            <input type="text" class="form-control" id="partnerName{{ $partner->id }}" name="name" value="{{ old('name', $partner->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="partnerDeskripsi{{ $partner->id }}">Deskripsi</label>
                            <textarea style="height: 200px;" class="form-control" id="partnerDeskripsi{{ $partner->id }}" name="deskripsi" value="{{ old('deskripsi', $partner->Deskripsi) }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="partnerPhoto{{ $partner->id }}" class="form-label">Photo</label>
                            <input class="form-control" type="file" id="partnerPhoto{{ $partner->id }}" name="photo" accept=".png, .jpg, .jpeg">
                            @if ($partner->photo)
                            <img src="{{ url('/') }}/uploads/{{ $partner->photo }}" class="img-fluid w-100 h-50 rounded-top" alt="">
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
    @endforeach


    @foreach ($partners as $partner)

    {{-- Modal Delete Partner --}}
    <div class="modal fade" id="modalDelete{{ $partner->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle{{ $partner->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('partner.destroy', $partner->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="modal-body">
                        <div class="text-center">
                            <h5 class="mt-0">Apakah Anda yakin ingin menghapus partner ini?</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach





    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>