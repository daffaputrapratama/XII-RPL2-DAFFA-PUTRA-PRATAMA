<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\regController;
use App\Http\Controllers\logController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\profileController;



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





// Route::get('/data', function () {
//     return view('pages.data');
// });



Route::get('/', function () {
    return view('pages.login.loginPage');
});




// yang diatas adlah routes untuk sidebar


// ini untuk register
Route::post('/addReg', [regController::class, 'addData']);

Route::get('/regData', [regController::class, 'returnData']);
Route::delete('/hapus/{id}', [regController::class, 'hapusdata']);
// ini routes untuk register



// ini untuk user
Route::get('/dataTable', [postController::class, 'index']);
Route::get('/form', [postController::class, 'returnForm']);
Route::post('/dataTambah', [postController::class, 'tambahData']);
Route::delete('/hapususer/{id}', [postController::class, 'hapusdata']);
Route::get('/data', [postController::class, 'returnTable']);
Route::get('/ubah/{id}', [postController::class, 'ubah']);
Route::put('/ubahdata/{id}', [postController::class, 'ubahdata']);

Route::get('/home', [postController::class, 'home'])->name('home');
// ini untuk user



Route::get('/loginToRegister', [regController::class, 'toRegister']);
Route::post('/authenticate', [logController::class, 'Login']);
Route::get('/loginToRegister', [regController::class, 'toRegister']);
Route::get('/indexa', [postController::class, 'indexa']);
Route::post ('/search', [postController::class, 'search']);

Route::get('/cari', [postController::class, 'search']);
Route::get('/search', [regController::class, 'cari']);
Route::get('/loginn', [logController::class, 'login'])->name('login');
Route::post('/logout', [logController::class, 'logout']);
Route::get('/', function () {
    return view('pages.login.loginPage');
});
Route::get('/profile', [profileController::class, 'profile']);

Route::get('/registerToLogin', function () {
    return view('pages.login.loginPage');
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('pages.login.loginPage');
    });

    
    
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/regRegist', function () {
        return view('pages.register.regRegist');
    });

    Route::get('/tableData', [postController::class, 'returnTable']);
    
    Route::get('/regAll', [regController::class, 'indexRegist']);
    
    Route::get('/regSugoi', function () {
        return view('pages.register.regData');
    });
    
   
    Route::get('/dataUbah', function () {
        return view('pages.dataUbah');
    });
    
    Route::get('/UserSetting', function () {
        return view('pages.dataUbah');
    });
    
   
    
});

//ini untuk login

