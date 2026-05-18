<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function messages()
    {
        $messages = Contact::latest()->get();
        return view('admin.messages', compact('messages'));
    }
    
    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return back()->with('success', 'Pesan berhasil dihapus');
    }
}