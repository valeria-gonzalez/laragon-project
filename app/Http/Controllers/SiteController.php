<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contactForm($variable = null){
        return view('contact', compact('variable')); 
    }

    public function contactSave(Request $request){
        $request->validate([
            'email' => 'required|email',
            'comment' => ['required', 'min:5', 'max:50'],
        ]);

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->comment = $request->comment;
        $contact->save();
        return redirect()->back();
    }
}
