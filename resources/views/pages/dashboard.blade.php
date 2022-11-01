 @extends('layouts.main')
 @section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                 class="fas fa-download fa-sm text-white-50"></i> | Cetak PDF</a>
     </div>

     <!-- Content Row -->
     <div class="row">

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-primary shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Total Siswa</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"> - </div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-users fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Total Guru</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"> - </div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-users fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Alumni
                             </div>
                             <div class="row no-gutters align-items-center">
                                 <div class="col-auto">
                                     <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> - </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-users fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-warning shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                 Total Staff Karyawan</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"> - </div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-users fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Content Row -->

     <div class="row">

         <!-- Area Chart -->
         <div class="col-xl-8 col-lg-7">
             <div class="card shadow mb-4">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Profile Madrasah</h6>
                     <div class="dropdown no-arrow">
                         <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                             aria-labelledby="dropdownMenuLink">
                             <div class="dropdown-header">Dropdown Header:</div>
                             <a class="dropdown-item" href="#">View</a>
                             <a class="dropdown-item" href="#">Change</a>
                         </div>
                     </div>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>Nama</th>
                                     <th>Position</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Nama Sekolah</td>
                                     <td>Madrasah Ibtidaiyah 02</td>
                                 </tr>
                                 <tr>
                                     <td>Alamat</td>
                                     <td>Jl. Surabaya-Malang</td>
                                 </tr>
                                 <tr>
                                     <td>Status Sekolah</td>
                                     <td>Active</td>
                                 </tr>
                                 <tr>
                                     <td>Akreditasi</td>
                                     <td>A</td>
                                 </tr>
                                 <tr>
                                     <td>No. Telp</td>
                                     <td>2011545(Dummy)</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Pie Chart -->
         <div class="col-xl-4 col-lg-5">
             <div class="card shadow mb-4">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Ekstrakulikuler</h6>
                     <div class="dropdown no-arrow">
                         <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                             aria-labelledby="dropdownMenuLink">
                             <div class="dropdown-header">Dropdown Header:</div>
                             <a class="dropdown-item" href="#">View</a>
                             <a class="dropdown-item" href="#">Change</a>
                         </div>
                     </div>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body">
                     <ul class="list-group">
                         <li class="list-group-item list-group-item-action">Cras justo odio</li>
                         <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                         <li class="list-group-item list-group-item-action">Cras justo odio</li>
                         <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                         <li class="list-group-item list-group-item-action">Cras justo odio</li>
                         <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

 </div>
 <!-- End of Main Content -->
 @endsection