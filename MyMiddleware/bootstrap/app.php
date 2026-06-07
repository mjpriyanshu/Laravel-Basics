<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        /*Here we can provide alias for middleware
        $middleware->alias([
            'isValidUser' => ValidUser::class,
        ]);
        

        we can also create Grouped middleware here such as

        $middleware->group('validUserGroup', [
            ValidUser::class,
            TestUser::class,
        ]);

        $middleware->appendToGroup('validUserGroup', [
            ValidUser::class,
             TestUser::class,
        ]);

        and use this group name in route such as
            Route::middleware('validUserGroup')->group(function () {
                Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
                Route::get('inner', [UserController::class, 'innerPage'])->name('inner');
            });
        
        */
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();


