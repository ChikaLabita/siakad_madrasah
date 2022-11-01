@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <strong><h3> Ekstrakulikuler </h3></strong>
        <hr />
        <div>
            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Ekstrakulikuler</button>
            <br>

            <form class="d-none d-sm-inline-block form-inline ml-auto ml-md-12 my-2 my-md-12 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Ekstrakulikuler..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <br>
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
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection