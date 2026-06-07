<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

Route::get('/', function () {
    return view('welcome');
});


// Route returning simple String Hello world
Route::get('/hello', function () {
    return 'Hello World, welcome to Laravel!';
});

// Route returning text hello, and h2 styled title
Route::get('/hello2', function () {
    return '<div style="font-family: Arial, sans-serif;">
        Hello World, welcome to Laravel!<br>
        <h2 style="color: #2c3e50; margin-top: 10px;">This is a <span style="text-decoration: underline; color: #e67e22;">Styled Title</span></h2>
        <p style="font-size: 18px; color: #34495e;">This is a styled paragraph below the title.</p>
    </div>';
});

// subrouting
Route::get('/hello/lpu', function () {
    return 'Hello LPU, welcome to Laravel!';
});

// Route with parameter
Route::get('/hello/username/{name}', function ($name) {
    return 'Hello ' . $name . ', welcome to Laravel!';
});

// Route with multiple parameters
Route::get('/hello/username/{name}/age/{age}', function ($name, $age) {
    return 'Hello ' . $name . ', you are ' . $age . ' years old, welcome to Laravel!';
});

//Route to calculate the sum of two numbers with parameter
Route::get('/hello/{a}/{b}', function ($a, $b) {
    $sum = $a + $b;
    return 'The sum of ' . $a . ' and ' . $b . ' is: ' . $sum;
});

//Route to take one parameter and return its table;
Route::get('/hellotable/{number}', function ($number) {
    $result = '';
    for ($i = 1; $i <= 10; $i++) {
        $result .= $number . ' x ' . $i . ' = ' . ($number * $i) . '<br>';
    }
    return $result;
});

//Route to show LPU courses in list
Route::get('/hello/courses', function () {
    $courses = ['Computer Science', 'Information Technology', 'Business Administration', 'Engineering'];
    foreach ($courses as $course) {
        echo '<li>' . $course . '</li>';
    }
});

/*----------------------------------------DAY2----------------------------------------------- */

//Use of response function with header as text/plain (Simple string response)
Route::get('/helloresponse', function () {
    return response('Hello World, welcome to Laravel!')->header('Content-Type', 'text/plain');
});

//Use of response function with header as application/json (JSON response)
Route::get('/helloresponsejson', function () { 
    $data = ['message' => 'Hello, This is a JSON response from Laravel!',
                'name' => 'Priyanshu',
                'course' => 'INT 221',            
                'status' => 'success',
                'code' => 200,
    ];
    return response()->json($data);
});

// Use of response function with header as html (HTML response)
Route::get('/helloresponsehtml', function () {
    $htmlContent = '<h1 style="color: #3498db;">Hello World, welcome to Laravel!</h1>';
    return response($htmlContent)->header('Content-Type', 'text/html');
});


//Use of response function for downloading a file (File download response)
Route::get('/hellodownload', function(){
    $filePath = public_path('myfiles/sampleRes.txt'); // Path to the file you want to download
    return response()->download($filePath);
});


//Route to open a URL in a new tab (Redirect response)
Route::get('/hellogoogle', function () {
    return redirect()->away('https://www.google.com/');
});


// IMPORTANT  Route to return a VIEW (View response)
Route::get('/welcomeview', function(){
    return response()->view('welcomeview');
});


// Route to redirect to another route (Redirect response)
Route::get('/lpu/admin', function () {
    return redirect('/lpu/student');
});

Route::get('/lpu/student', function () {
    // return 'Welcome to the student page!';
    return response() -> view('student');
    // return redirect('http://www.lpu.in/');
});

// ROute to get result of students
Route::get('/btech/result', function(){
    $students = [
        ['name' => 'Priyanshu', 'marks' => 85],
        ['name' => 'Ananya', 'marks' => 90],
        ['name' => 'Rahul', 'marks' => 78],
    ];

    return view('result', compact('students'));
});

//header function to set custom header (Custom header response)
Route::get('/headers', function () {
    return response('This response has custom headers.')
        ->header('X-Custom-Header', 'CustomHeaderValue')
        ->header('X-Powered-By', 'Laravel');
});

//passing data
Route::get('/students/{id}', function ($id) {
    $students = [
        1 => ['name' => 'Priyanshu', 'age' => 20, 'course' => 'INT 221'],
        2 => ['name' => 'Ananya', 'age' => 22, 'course' => 'INT 222'],
        3 => ['name' => 'Rahul', 'age' => 21, 'course' => 'INT 223'],
    ];

    if (isset($students[$id])) {
        return response()->json($students[$id]);
    } else {
        return response()->json(['error' => 'Student not found'], 404);
    }   
});


//make a route /products return a view product page;
Route::get('/products', function () {
    $products = [
        ['name' => 'Laptop', 'price' => 1200],
        ['name' => 'Smartphone', 'price' => 800],
        ['name' => 'Headphones', 'price' => 150],
        ['name' => 'Keyboard', 'price' => 300],
        ['name' => 'Monitor', 'price' => 700],
        ['name' => 'Mouse', 'price' => 100],
        ['name' => 'Tablet', 'price' => 450],
        ['name' => 'Smartwatch', 'price' => 550],
        ['name' => 'Speaker', 'price' => 200],
        ['name' => 'Webcam', 'price' => 250],
    ];
    return view('product', compact('products'));
});



//Create a route to store username amit as a cookie value for 30 sec;
Route::get('/setcookie', function () {
    return response('Cookie has been set!')->cookie('username', 'amit', 0.5); // 0.5 minutes = 30 seconds
});


// Route to delete cookie
/*Format - ('username', "value", 'time')*/
Route::get('/deletecookie', function () {
    return response('Cookie has been deleted!')->cookie('username', '', -1); // Setting the cookie with a past expiration time to delete it
});

//ROute for chaining response with cookie
Route::get('/chainingresponse', function () {
    return response('This response has a cookie attached!')
        ->cookie('chained_cookie', 'This is a chained cookie', 60); // Cookie valid for 60 minutes
});



/*------------------------------------CONTROLLERS------------------------------- */
/* 

-----------Types of Controllers ----------------------------
    1. Single Action Controller - A controller that handles only one action or route. It typically contains 
    a single method called __invoke() that is automatically called when the controller is invoked.

    2. Resource Controller - A controller that is designed to handle all the typical CRUD 
    (Create, Read, Update, Delete) operations for a resource.

    3. API Resource Controller - Similar to a resource controller but specifically designed for APIs.
    
    4. Invokable Controller - A controller that can be invoked as a single action, similar to a single action controller,
     but it can also contain multiple methods for handling different actions.


*/

//ROute for Show() controller method with parameter
Route::get('/controller/{name}', [mycontroller::class, 'show']); // This route will call the show() method of mycontroller and pass the {name} parameter to it.

/*---------------------------- */


