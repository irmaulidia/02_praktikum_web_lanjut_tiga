<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//--PRAKTIKUM 3--//

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

//--Route Biasa Home--
Route::get('/home', function(){
    return redirect('https://www.educastudio.com/');
});

//--Route Prefix Category--
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('/marbel-and-friends-kids-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });

    Route::get('/riri-story-books', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });

    Route::get('/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

//--Route Param News--
Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' . $title);
});

//--Route Prefix Program
Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjunganIndustri', [ProgramController::class, 'kunjunganIndustri']);
});

//--Route Biasa About Us--
Route::get('/about-us', function(){
    return redirect('https://www.educastudio.com/about-us');
});

//--Route Resource Contact--
Route::resource('/contact-us', ContactController::class);