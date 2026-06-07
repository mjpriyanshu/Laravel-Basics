<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ResourceNestedController;
use App\Http\Controllers\UrlGeneratorController;

Route::get('/', function () {
    return view('welcome');
});

// we are using parameter as 1.'route name' and 2.'controller name' to create resource route
Route::resource('resource', ResourceController::class);

/* We have 7 methods to use:
1. index() - to display all data
2. create() - to show form for creating new data
3. store() - to store new data in database
4. show() - to display specific data using id
5. edit() - to show form for editing specific data using id
6. update() - to update specific data in database using id
7. destroy() - to delete specific data from database using id


PARTIAL RESOURCE ROUTE: If we want to use only some of the methods, 
we can use partial resource route. 

Route::resource('resource', ResourceController::class)
    ->only(['index', 'show']);

OR

Route::resource('resource', ResourceController::class)
    ->except(['create', 'store', 'edit', 'update', 'destroy']);
*/


/*Now To rename the predefined routes

    Route::resource('resource', ResourceController::class)
    ->names([
        'index' => 'resource.all',
        'create' => 'resource.add',
        'show' => 'resource.view',
    ]);

    This way we can rename the predefined routes
*/


/*Now For NESTED RESOURCE ROUTES
 like we have user, and it have comments. There we need to perform the crud;
 
 ie named as resource.comments, and controller name is ResourceNestedController

*/

Route::resource('resource.comments', ResourceNestedController::class);

Route::get('/urlgenerator', [UrlGeneratorController::class, 'urlGenerator']);

Route::get('/current-url', [UrlGeneratorController::class, 'currentUrl']);

Route::get('/full-current-url', [UrlGeneratorController::class, 'fullCurrentUrl']);

Route::get('/asset-url', [UrlGeneratorController::class, 'assetUrl']);

Route::get('/generation-shortcuts', [UrlGeneratorController::class, 'generationShortcuts']);


Route::get('/generate-url', function () {

    // Generate URL
    $url = url('/dashboard');

    return $url;
});