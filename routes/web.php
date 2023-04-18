<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SaldocoaController;
use App\Http\Controllers\StrukturController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// http://127.0.0.1:8000/ ===> view welcome
Route::get('/', function () {
    return view('welcome');
});

// http://127.0.0.1:8000/login ===> view login
Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// http://127.0.0.1:8000/beranda ===> view beranda
Route::get('/beranda', function () {
    return view('halamandepan.beranda');
});

// pengolahan data struktur atau departemen
// Route::get('/struktur', function () {
//     return view('halamandepan.struktur');
// });
route::get('/struktur', [StrukturController::class, 'index'])->name('struktur');
route::get('/strukturcreate', [StrukturController::class, 'create'])->name('strukturcreate');
route::post('/struktursimpan', [StrukturController::class, 'store'])->name('struktursimpan');
route::delete('/struktur/{id}', [StrukturController::class, 'destroy'])->name('strukturhapus');
route::get('{id}/strukturedit', [StrukturController::class, 'edit'])->name('strukturedit');
route::post('/strukturupdate/{id}',[StrukturController::class,'update'])->name('strukturupdate');

Route::middleware(['auth'])->group(function () {
    route::get('/beranda', [BerandaController::class, 'index'])->name('index');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

// pengolahan data user
route::get('/muser', [UserController::class, 'index'])->name('User');
route::post('/tambahmuser', [UserController::class, 'store'])->name('tambahuser');
route::delete('/muser/{id}', [UserController::class, 'destroy'])->name('hapususer');

// akun coa
route::get('/akuncoa', [CoaController::class, 'index'])->name('akuncoa');
route::post('/tambahakuncoa', [CoaController::class, 'store'])->name('tambahakuncoa');
route::get('{id}/editcoa',[CoaController::class,'edit'])->name('editcoa');
route::post('updatecoa/{id}',[CoaController::class,'update'])->name('updatecoa');
route::delete('/akuncoa/{id}', [CoaController::class, 'destroy'])->name('hapuscoa');

//saldocoa
route::get('/saldocoa', [SaldocoaController::class, 'index'])->name('saldocoa');
route::post('updatesaldocoa/{akun_coa}',[SaldocoaController::class,'update'])->name('updatesaldocoa');

// akun company
route::get('/company', [CompanyController::class, 'index'])->name('listcompany');
route::post('/tambahcompany', [CompanyController::class, 'store'])->name('tambahcompany');
route::post('updatecompany/{id}',[CompanyController::class,'update'])->name('updatecompany');
route::delete('/company/{id}', [CompanyController::class, 'destroy'])->name('hapuscompany');

// tipe jurnal
route::get('/tipejurnal', [JurnalController::class, 'index'])->name('tipejurnal');
route::post('/tambahtipejurnal', [JurnalController::class, 'store'])->name('tambahtipejurnal');
route::delete('/tipejurnal/{id}', [JurnalController::class, 'destroy'])->name('hapustipejurnal');

Route::get('/budget', function () {
    return view('halamandepan.budget');
});

Route::get('/bukubank', function () {
    return view('halamandepan.bukubank');
});

Route::get('/datperusahaan', function () {
    return view('halamandepan.datperusahaan');
});

Route::get('/editjurnal', function () {
    return view('halamandepan.editjurnal');
});

Route::get('/historyacc', function () {
    return view('halamandepan.historyacc');
});

Route::get('/jurnalumum', function () {
    return view('halamandepan.jurnalumum');
});

Route::get('/listjurnal', function () {
    return view('halamandepan.listjurnal');
});

Route::get('/listpembayaran', function () {
    return view('halamandepan.listpembayaran');
});

Route::get('/listpenerimaan', function () {
    return view('halamandepan.listpenerimaan');
});


Route::get('/pembayaranlain', function () {
    return view('halamandepan.pembayaranlain');
});

Route::get('/penerimaanlain', function () {
    return view('halamandepan.penerimaanlain');
});