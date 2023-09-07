<?php
use App\Models\Contact;
use Illuminate\Http\Request;
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

Route::get('/contact/{variable?}', function ($variable = null) {
    // dd($variable);
    return view('contact', compact('variable')); 
});

Route::post('/validate-contact', function (Request $request) {
    //dd($request -> email);
    $contact = new Contact();
    $contact->email = $request->email;
    $contact->comment = $request->comment;
    $contact->save();
    return redirect()->back();
});


