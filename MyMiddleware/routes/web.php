<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\TestUser;

Route::view('/', 'welcome')->name('home');


Route::view('register', 'register')->name('register');
Route::view('login', 'login')->name('login');

Route::post('registerSave',[UserController::class, 'register'])->name('registerSave');

Route::post('loginMatch',[UserController::class, 'login'])->name('loginMatch');

Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->middleware([ValidUser::class, TestUser::class]);

Route::get('inner', [UserController::class, 'innerPage'])->name('inner')->middleware(ValidUser::class);

Route::get('logout', [UserController::class, 'logout'])->name('logout');


/*now nesting the middleware: rather than using above method to apply middleware to multiple routes */

// Route::middleware([ValidUser::class])->group(function () {
//     Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
//     Route::get('inner', [UserController::class, 'innerPage'])->name('inner');
// });

/*Also when grouping the middleware's there is time when we need to exclude  some of routes, hence we can use to methods
1.  Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard')->withoutMiddleware(ValidUser::class);

2. create another group of without middleware such as 

    Route::withoutMiddleware([ValidUser::class])->group(function () {
        Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
    });

*/



/*--------------------------------------*/
/* 2. For grouped middle ware go to app.php*/


/*
    for using role in auth check with middleware we can do like this

    1. go to validUser middleware and add role check in handle method
    2. and here we create route with role parameter such as

    Route::get('dashboard',[UserController::class, 'dashboardPage'])->name('dashboard')->middleware(ValidUser::class.':admin');
    });
*/


/*--------------------------------------*/
/*
    3. Global Middleware: if we want to apply middleware to all routes then we can use global middleware, for that we need to add middleware in app.php file in withMiddleware method such as

    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append(TestUser::class);
    })

    This will apply TestUser middleware to all routes, and it will be executed before any route is executed, hence we can use this middleware for logging or any other task which we want to perform before any route is executed
*/