<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Route\RouteController;
use App\Http\Controllers\Student\StudentController as StudentStudentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// --------- Free Access --------- // 
// landing Page 
Route::get('/', [HomeController::class, 'index']);

Auth::routes();

// view user student
Route::group(['middleware' => ['auth', 'CheckRole: admin, student']], function() {
    // Seleksi
    Route::get('student/seleksi', [StudentStudentController::class, 'seleksiStudent']);
    // Datang Dan Pulang View
    Route::get('student/pulang', [StudentStudentController::class, 'viewJamPulang']);
    Route::post('ubah-presensi', [PresensiController::class, 'storepulang'])->name('presensi-pulang'); // fungsi pulang

    // Fungsi Tidak hadir
    Route::get('student/tidakdatang', [StudentStudentController::class, 'viewTidakDatang']);
    Route::post('tidak-hadir', [PresensiController::class, 'tidakhadir'])->name('tidak-hadir'); 

    // Profile
   // profile page

   Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles');
   Route::get('addPhoto', function() {
       return view('Profile.addPhoto');
   })->name('addPhoto');
   Route::put('/change-ava', [ProfileController::class, 'changeFotoProfile'])->name('change-ava');
   Route::put('/change-prof', [ProfileController::class, 'changeProfile'])->name('change-profile');
});


// view and controller in admin
Route::group(['middleware' => ['auth', 'CheckRole: admin']], function() {
    // Data Student Group
    Route::get('admin/rombelData', [RouteController::class, 'rombelData']);
    Route::get('admin/rayonData', [RouteController::class, 'rayonData']);
    
    // Data User
    Route::resource('dataUser', StudentController::class);
    
    // Absen 
    Route::resource('filter-absen', PresensiController::class);
    Route::get('filter-absen/{tglawal}/{tglakhir}', [PresensiController::class, 'showallabsen']);
});

// middleware
Route::group(['middleware' => ['auth', 'CheckRole: admin, student']], function () {
    Route::resource('admins', AdminController::class);

    // fungsi datang
    Route::get('student/datang', [StudentStudentController::class, 'viewJamDatang']);
    Route::resource('student', PresensiController::class); 
});

    