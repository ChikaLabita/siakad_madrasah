<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">Tambah Alumni</div>
                    <div class="card-body">
                        <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">NISN</label>
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn"
                                    placeholder="Masukkan nisn">

                                <!-- error message untuk title -->
                                @error('nisn')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                    placeholder="Masukkan Nama Lengkap">

                                <!-- error message untuk nama_lengkap -->
                                @error('nama_lengkap')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk"
                                    value="{{ old('jk') }}" placeholder="Masukkan Jenis Kelamin">

                                <!-- error message untuk jk -->
                                @error('jk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">

                                <!-- error message untuk alamat -->
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">No. Hp</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan no_hp">

                                <!-- error message untuk no_hp -->
                                @error('no_hp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Angkatan</label>
                                <input type="text" class="form-control @error('angkatan') is-invalid @enderror"
                                    name="angkatan" value="{{ old('angkatan') }}" placeholder="Masukkan Angkatan">

                                <!-- error message untuk angkatan -->
                                @error('angkatan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Tahun Lulus</label>
                                <input type="text" class="form-control @error('thn_lulus') is-invalid @enderror"
                                    name="thn_lulus" value="{{ old('thn_lulus') }}" placeholder="Masukkan Tahun Lulus">

                                <!-- error message untuk thn_lulus -->
                                @error('thn_lulus')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <script>
    CKEDITOR.replace('content');
    </script>
</body>

</html>