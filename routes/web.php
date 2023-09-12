<?php

use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\SiteController;
use App\Models\Homework;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/{variable?}', [SiteController::class, 'contactForm']
    // dd($variable);
    // return view('contact', compact('variable')); 
);

Route::post('/validate-contact', [SiteController::class, 'contactSave']
        // $request->validate([
        //     'email' => 'required|email',
        //     'comment' => ['required', 'min:5', 'max:50'],
        // ]);

        // $contact = new Contact();
        // $contact->email = $request->email;
        // $contact->comment = $request->comment;
        // $contact->save();
        // return redirect()->back();
);

Route::resource('Homework', HomeworkController::class);

