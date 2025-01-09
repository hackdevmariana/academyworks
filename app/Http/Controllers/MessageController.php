<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class MessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }


    // Método para procesar el formulario y guardar el mensaje
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string',
        ]);

        $validated['user_id'] = auth()->check() ? auth()->id() : null; 

        Message::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
