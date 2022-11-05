@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <strong>
            <h3> Ekstrakulikuler </h3>
        </strong>
        <hr />
        <div>
            <a type="button" class="btn btn-primary" href={{ route('ekskul.create') }}><i class="fas fa-plus"></i> Data</a>
            <br>

            <form class="d-none d-sm-inline-block form-inline ml-auto ml-md-12 my-2 my-md-12 mw-100 navbar-search" method="GET" action="{{ route('search') }}">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Ekstrakulikuler..."
                        aria-label="Search" aria-describedby="basic-addon2" id="keyword" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <a href="/cetak" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" target="_blank"><i
                 class="fas fa-download fa-lg text-white-80"></i> | Cetak PDF</a>
     </div>
        <br>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Ekstrakulikuler</th>
                        <th>Nama Ekstrakulikuler</th>
                        <th>Pembimbing Ekstrakulikuler</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ekskuls as $ekskul)
                    <tr>
                        <td>{{ $ekskul->nip }}</td>
                        <td>{{ $ekskul->nama_lengkap }}</td>
                        <td>{{ $ekskul->jk }}</td>
                        <td>{{ $ekskul->alamat }}</td>
                        <td>{{ $ekskul->mapel_ampu }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('ekskul.destroy', $ekskul->id) }}" method="POST">
                                <a href="{{ route('ekskul.edit', $ekskul->id) }}" class="btn btn-sm btn-warning"><i
                 class="fas fa-edit fa-lg text-white-80"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i
                 class="fas fa-trash fa-lg text-white-80"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Maaf, Ekstrakulikuler belum Tersedia.
                    </div>
                    @endforelse
                </tbody>
            </table>
	        {{ $ekskulss->links() }}
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
//message with toastr
@if(session() -> has('success'))

toastr.success('{{ session('
    success ') }}', 'BERHASIL!');

@elseif(session() -> has('error'))

toastr.error('{{ session('
    error ') }}', 'GAGAL!');

@endif
</script>
@endsection