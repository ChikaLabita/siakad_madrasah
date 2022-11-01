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
                    <div class="card-header">Edit Kelas</div>
                    <div class="card-body">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">ID Kelas</label>
                                <input type="text" class="form-control @error('kode_kelas') is-invalid @enderror" name="kode_kelas"
                                value="{{ old('kode_kelas', $kelas->kode_kelas) }}">

                                <!-- error message untuk kode_kelas -->
                                @error('kode_kelas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nama Kelas</label>
                                <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                    name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}">

                                <!-- error message untuk nama_kelas -->
                                @error('nama_kelas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Wali Kelas</label>
                                <input type="text" class="form-control @error('wali_kelas') is-invalid @enderror" name="wali_kelas"
                                value="{{ old('wali_kelas', $kelas->wali_kelas) }}">

                                <!-- error message untuk wali_kelas -->
                                @error('wali_kelas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

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