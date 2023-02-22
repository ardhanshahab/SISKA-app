<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\sidebarController;
use App\Models\sidebars;
use Hashids\Hashids;
use Illuminate\Support\Facades\Hash;

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

// $sidebars = sidebars::get();
// // echo $sidebars;        
// foreach ($sidebars as $items) {
//     $hash = $items->hashids;
//     // $array_terpecah = array_split($hash);
//     var_dump($hash);
//     exit;
// };

        // $id = '783427324';
        // $hashids = new Hashids();
        // $id = $hashids->encode($id);
        // echo $hash;


// Route::resource('sidebar', [sidebarController::class,'index'])->name('sidebar');
Route::get('/', function () {
    return view('v_home');
});
Route::get('/kurikulum/matakuliah', [MatakuliahController::class,'matakuliah'])->name('MatakuliahIndex');
Route::get('/kurikulum/jadwalmatakuliah', [MatakuliahController::class,'jadwalMatakuliah'])->name('JadwalMatakuliahIndex');
Route::get('/kurikulum/tujuandancapaian', [MatakuliahController::class,'tujuanCapaian'])->name('TujuanCapaianIndex');
// Route::get('/mahasiswa/{hashids}', [MahasiswaController::class,'myprofile'])->name('myprofile');
Route::get('/mahasiswa/myprofile', [MahasiswaController::class,'myprofile'])->name('myprofile');
Route::get('/mahasiswa/status', [MahasiswaController::class,'myprofile'])->name('statusIndex');
Route::get('/mahasiswa/jadwalkuliah', [MahasiswaController::class,'myprofile'])->name('jadwalkuliahIndex');
Route::get('/mahasiswa/dataindukmahasiswa', [MahasiswaController::class,'myprofile'])->name('datamahasiswaIndex');
Route::get('/mahasiswa/statuskeuangan', [MahasiswaController::class,'myprofile'])->name('statuskeuanganIndex');
Route::get('/mahasiswa/transkripnilai', [MahasiswaController::class,'myprofile'])->name('transkripnilaiIndex');

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa/layouts/index');
// });

