<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});


/*Ques 1 - create a simple laravel route that returns "Hello, laravel!" 
when accessed via /hello url */
Route::get('/hello', function(){
    return 'Hello, Laravel!';
});

/*Ques2 - create a route /home-page that returns a blade view named home.blade.php. 
The view should display "Welcome, laravel routing!." */
Route::get('/home-page', function(){
    return view('home');
});


/*Ques 3 - create 3 routes /about, /contact, /services each should return
 a separate view with corresponding page content. */
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});


/*Ques 4 - create a small college website with 3 pages
home about and contact, use named routes only. No hardcoded urls like 
/about navigation should work using route() */

Route::get('/homecollege', function() {
    return view ('homecollege');
})->name('homecollege');

Route::get('/aboutcollege', function() {
    return view ('aboutcollege');
})->name('aboutcollege');

Route::get('/contactcollege', function() {
    return view ('contactcollege');
})->name('contactcollege');


/*Ques 5 -  create a route /old-home that redirects user to /new-home*/
Route::get('/old-home', function() {
    return redirect('/new-home');
});

// redirecting using Route::redirect method
Route::redirect('/new-home', '/old-home');


/*Ques 6 - create a simple view and display static message */
Route::get('/simple', function () {
    return view('q6simple');
});

/*Ques 7 - passing data using compact() function */
Route::get('/user', function () {
    $name = "Priyanshu";
    $age = 21;

    return view('q7user', compact('name', 'age'));
});


/*Ques 8 - create a larabel route that sends a message to view using with(). */

Route::get('/message', function () {
    return view('q8message')->with('msg', 'Hello from Laravel!');
});


/*Ques 9  - create a laravel route that sends an associative array of students and their marks to a view and display it in a table.*/
Route::get('/students', function () {

    $students = [
        'Reven' => 85,
        'Aman' => 78,
        'Priya' => 92,
        'Rohit' => 88
    ];

    return view('q9students', compact('students'));
});

/*Ques 10- use controller to pass a list of products to a view. */

/*Controller created, route and view */

Route::get('/products', [ProductController::class, 'index']);

/*Question11 - college site: the following static info must be available in every blade view
 - website name -> current year -> and support email xyz@gmail.com
you must share this data globally, avoid passsing variables from controller */

Route::get('global-info', function() {
    return view('q11globalinfo');
});