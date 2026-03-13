<?php

namespace App\Http\Controllers;
use App\Mail\ContactoMailable;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contacto');
    }

    public function store(Request $request) {
        $request->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'message' => 'required|min:10',
        ]);

        Mail::to('boftech00@gmail.com')->send(new ContactoMailable($request->all()));

        return back()->with('success', '¡Gracias! Hemos recibido tu mensaje.');
    }
}