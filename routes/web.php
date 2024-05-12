<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorController;
use App\Models\University;
use Illuminate\Support\Facades\Route;



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/admin')->name('admin.')->controller(AdminController::class)->middleware(['auth', 'admin'])->group( function (){
    Route::get('/dashboard', 'index')->name('dashboard');

//    critères
    Route::get('/critères', 'displayCritere')->name('critere');
    Route::post('/critères', 'storeCritere')->name('critere');
    Route::get('/critères/{id}', 'editCritere')->name('editCritere');
    Route::patch('/critères/{id}', 'updateCritere')->name('updateCritere');
    Route::get('/critères/{id}/delete', 'destroyCritere')->name('destroyCritere');

//    université
    Route::get('/universités', 'displayUniversity')->name('university');
    Route::post('/universités', 'storeUniversity')->name('university');
    Route::get('/universités/{id}', 'editUniversity')->name('editUniversity');
    Route::patch('/universités/{id}', 'updateUniversity')->name('updateUniversity');
    Route::delete('/universités/{id}/delete', 'destroyUniversity')->name('destroyUniversity');
    Route::get('/universités/{id}/gallery', 'showUniversityGallery')->name('showUniversityGallery');
    Route::post('/universités/{id}/gallery', 'storeUniversityImage')->name('storeUniversityImage');

//    users
    Route::get('/utilisateurs', 'displayUsers')->name('users');
    Route::get('/utilisateurs/{id}', 'editUser')->name('editUser');//TODO : pouvoir voir les commentaires d'un utilisateur cible
    Route::get('/utilisateurs/{id}/deleteComment', 'deleteComment')->name('deleteComment');
    Route::delete('/utilisateurs/{id}/delete', 'destroyUsers')->name('destroyUser');

});

Route::prefix('/auth')->controller(VisitorController::class)->middleware(['auth'])->group(function (){
    Route::post('/notation/{usid}/university/{unid}', 'addNotation')->name('addNotation');
});

Route::prefix('/')->controller(VisitorController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/ranking', 'ranking')->name('ranking');
    Route::get('/university', 'university')->name('university');
    Route::get('/university/{id}', 'showUniversity')->name("showUniversity");
});
//Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'admin']);
