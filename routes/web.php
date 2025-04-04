<?php
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('home');
    // return 'this is a test';
});

//Parameters routes
// Route::get('/{lastname}/{fistname}', function ($firstname, $lastname) {
//     // return view('home');
//     return $firstname . ' ' . $lastname;
// });

//Named routes
Route::get('/contact-me', function () {
    return view('contact-me');
})->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

//Grouped Routes
// Route::prefix("admin")->group(function () {
//     Route::get('/user', function () {
//         return 'Admin User';
//     });
//     Route::get('/staff', function () {
//         return 'Admin staf';
//     });
// });

// //POST REQUESTS

// Route::post('/create-user', function () {
//     return 'User Created';
// })->name('createuser');