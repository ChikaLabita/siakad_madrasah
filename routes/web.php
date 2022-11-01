<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiswaController, GuruController, AlumniController, StaffController, KelasController, DashboardController,
    LoginController, RegisterController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('dashboard', DashboardController::class);

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login');
})->name('logout');

Route::get('/daftar', function () {
    return view('daftar.daftar');
});

Route::get('/siswa', function () {
    return view('siswa.siswa_table');
});

Route::get('/guru', function () {
    return view('guru.guru_table');
});

Route::get('/alumni', function () {
    return view('alumni.alumni_table');
});

Route::get('/staff', function () {
    return view('staff.staff_table');
});

Route::resource('siswa', SiswaController::class);
Route::get('/search',[SiswaController::class,'search'])->name('search');
Route::get('cetak', [SiswaController::class, 'cetakpdf'])->name('cetakpdf');
Route::resource('guru', GuruController::class);
Route::get('/search',[GuruController::class,'search'])->name('search');
Route::get('cetak', [GuruController::class, 'cetakpdf'])->name('cetakpdf');
Route::resource('alumni', AlumniController::class);
Route::get('/search',[AlumniController::class,'search'])->name('search');
Route::get('cetak', [AlumniController::class, 'cetakpdf'])->name('cetakpdf');
Route::resource('staff', StaffController::class);
Route::get('/search',[StaffController::class,'search'])->name('search');
Route::get('cetak', [StaffController::class, 'cetakpdf'])->name('cetakpdf');
Route::resource('kelas', KelasController::class);
Route::get('/search',[KelasController::class,'search'])->name('search');
Route::get('cetak', [KelasController::class, 'cetakpdf'])->name('cetakpdf');
Route::get('/kelas', function () {
    return view('kelas.kelas_table');
});

Route::get('/ekskul', function () {
    return view('ekskul.ekskul');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');