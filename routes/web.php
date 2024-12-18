<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagsController;
use App\Models\tag;
use Illuminate\Support\Facades\Route;
    //*index
Route::get('/', [JobController::class , 'index']);
//? search
Route::get('/search' ,SearchController::class);
Route::get('/tags/{tag:name}' , TagsController::class);
    //! jobs
Route::post('/jobs' ,[JobController::class , "store"])->middleware("auth");
Route::get('/jobs/create' ,[JobController::class , "create"])->middleware("auth");

Route::middleware('guest')->group(function()
{
    Route::get('/register', [RegisterUserController::class , 'create']);
    Route::post('/register', [RegisterUserController::class , 'store']);    
    Route::get('/login', [SessionController::class , 'create' ]);
    Route::post('/login', [SessionController::class , 'store' ]);
});
Route::get('/logout', [SessionController::class , 'destroy' ])->middleware("auth");