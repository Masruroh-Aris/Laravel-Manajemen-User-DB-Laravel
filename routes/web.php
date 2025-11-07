<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\auth\logincont;
use App\Http\Controllers\admin\dashboardcont;
use App\Http\Controllers\AktivitasCont;
use App\Http\Controllers\Admin\UserCont;

Route::get('/', [App\Http\Controllers\berandacont::class, 'index'])->name('beranda');
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/login',[logincont::class,'showLoginForm'])->name('login');
    Route::post('/login',[logincont::class,'login'])->name('login.submit');
    Route::post('/logout',[logincont::class,'logout'])->name('logout');
    Route::middleware(['auth','is_admin'])->group(function(){
        Route::get('/dashboard', [dashboardcont::class, 'index'])->name('dashboard');
        Route::resource('users', App\Http\Controllers\Admin\UserCont::class)->names([
            'index'=>'users.index',
            'create'=>'users.create',
            'store'=>'users.store',
            'edit'=>'users.edit',
            'update'=>'users.update',
            'destroy'=>'users.destroy',
        ]);
    });
    
});
Route::resource('aktivitas', AktivitasCont::class)->names([
    'index'   => 'aktivitas',
    'create'  => 'aktivitas.create',
    'store'   => 'aktivitas.store',
    'edit'    => 'aktivitas.edit',
    'update'  => 'aktivitas.update',
    'destroy' => 'aktivitas.destroy',
]);
Route::get('/datadiri', [App\Http\Controllers\datadiricont::class, 'index'])->name('datadiri');
Route::get('/kontak', [App\Http\Controllers\kontakcont::class, 'index'])->name('kontak');
Route::post('/kontak/kirim', [App\Http\Controllers\KontakCont::class, 'kirim'])->name('Kirim');

