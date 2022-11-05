<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomepageController, SiswaController, GuruController, AlumniController, StaffController, KelassController, DashboardController,
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
Route::get('/', [HomepageController::class, 'mainpage']);
Route::get('/sambutan', [HomepageController::class, 'sambutan']);
Route::get('/sejarah', [HomepageController::class, 'sejarah']);
Route::get('/profile', [HomepageController::class, 'profile']);
Route::get('/galeri', [HomepageController::class, 'galeri']);
Route::get('/contact', [HomepageController::class, 'contact']);
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

Route::get('/galeri', function () {
    return view('galeri.galeri');
});

Route::get('/profile', function () {
    return view('profile_sekolah.profile_sekolah');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/sambutan', function () {
    return view('sambutan.sambutan');
});

Route::get('/sejarah', function () {
    return view('sejarah.sejarah');
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
Route::resource('kelas', KelassController::class);
Route::get('/search',[KelassController::class,'search'])->name('search');
Route::get('cetak', [KelassController::class, 'cetakpdf'])->name('cetakpdf');
Route::get('/kelas', function () {
    return view('kelas.kelas_table');
});

Route::get('/ekskul', function () {
    return view('ekskul.ekskul');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');