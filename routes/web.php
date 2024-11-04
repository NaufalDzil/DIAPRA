<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\KadisController;
use App\Http\Controllers\MouController;
use App\Http\Controllers\NodinController;
use App\Http\Controllers\SkController;
use App\Http\Controllers\SpjController;
use App\Http\Controllers\SppdController;
use App\Http\Controllers\StController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;


//Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Kepala Dinas
Route::get('/kadis', [KadisController::class, 'index'])->name('kadis.index');
Route::get('/kadis/{kadis}/edit', [KadisController::class, 'edit'])->name('kadis.edit');
Route::post('/kadis/{kadis}/edit/store', [KadisController::class, 'update'])->name('kadis.update');

//Surat Masuk
Route::resource('suratmasuk', SuratMasukController::class);
Route::get('/suratmasuk/{suratmasuk}/edit', [SuratMasukController::class, 'edit'])->name('suratmasuk.edit');
Route::get('/suratmasuk/{suratmasuk}/surat', [SuratMasukController::class, 'surat'])->name('suratmasuk.surat');

//Disposisi
Route::get('/suratmasuk/{suratmasuk}/disposisi', [DisposisiController::class, 'index'])->name('disposisi.index');
Route::get('/suratmasuk/{suratmasuk}/disposisi/cetak', [DisposisiController::class, 'cetak'])->name('disposisi.cetak');
Route::get('/suratmasuk/{suratmasuk}/disposisi/create', [DisposisiController::class, 'create'])->name('disposisi.create');
Route::post('/suratmasuk/{suratmasuk}/disposisi/create', [DisposisiController::class, 'store'])->name('disposisi.store');
Route::get('/suratmasuk/{suratmasuk}/disposisi/{disposisi}/edit', [DisposisiController::class, 'edit'])->name('disposisi.edit');
Route::post('/suratmasuk/{suratmasuk}/disposisi/{disposisi}/edit', [DisposisiController::class, 'update'])->name('disposisi.update');
Route::get('/suratmasuk/{suratmasuk}/disposisi/{disposisi}/surat', [DisposisiController::class, 'surat'])->name('disposisi.surat');
// Route::get('/suratmasuk/{suratmasuk}/disposisi', [DisposisiController::class, 'index'])->name('disposisi.index');
// Route::get('/suratmasuk/{suratmasuk}/disposisi/cetak', [DisposisiController::class, 'cetak'])->name('disposisi.cetak');
// Route::get('/suratmasuk/{suratmasuk}/disposisi/create', [DisposisiController::class, 'create'])->name('disposisi.create');
// Route::post('/suratmasuk/{suratmasuk}/disposisi/create', [DisposisiController::class, 'store'])->name('disposisi.store');
// Route::get('/disposisi/{disposisi}/edit', [DisposisiController::class, 'edit'])->name('disposisi.edit');
// Route::post('/disposisi/{disposisi}/edit', [DisposisiController::class, 'update'])->name('disposisi.update');

//Surat Keluar
Route::resource('suratkeluar', SuratKeluarController::class);
Route::get('/suratkeluar/{suratkeluar}/surat', [SuratKeluarController::class, 'surat'])->name('suratkeluar.surat');
Route::get('/suratkeluar/{suratkeluar}/edit', [SuratKeluarController::class, 'edit'])->name('suratkeluar.edit');

//SPJ UMPEG
Route::resource('spj', SpjController::class);
Route::get('/spj/{spj}/edit', [SpjController::class, 'edit'])->name('spj.edit');
Route::get('/spj/{spj}/surat', [SpjController::class, 'surat'])->name('spj.surat');

//Nota Dinas
Route::resource('nodin', NodinController::class);
Route::get('/nodin/{nodin}/edit', [NodinController::class, 'edit'])->name('nodin.edit');
Route::get('/nodin/{nodin}/surat', [NodinController::class, 'surat'])->name('nodin.surat');

//SK
Route::resource('sk', SkController::class);
Route::get('/sk/{sk}/edit', [SkController::class, 'edit'])->name('sk.edit');
Route::get('/sk/{sk}/surat', [SkController::class, 'surat'])->name('sk.surat');

//MoU
Route::resource('mou', MouController::class);
Route::get('/mou/{mou}/edit', [MouController::class, 'edit'])->name('mou.edit');
Route::get('/mou/{mou}/surat', [MouController::class, 'surat'])->name('mou.surat');

//SPPD
Route::resource('sppd', SppdController::class);
Route::get('/sppd/{sppd}/edit', [SppdController::class, 'edit'])->name('sppd.edit');
Route::get('/sppd/{sppd}/surat', [SppdController::class, 'surat'])->name('sppd.surat');

//Surat Tugas
Route::resource('st', StController::class);
Route::get('/st/{st}/edit', [StController::class, 'edit'])->name('st.edit');
Route::get('/st/{st}/surat', [StController::class, 'surat'])->name('st.surat');

//Kode Surat
Route::get('/kodearsip', function () {
  return view('kodearsip');
})->name('kodearsip');
