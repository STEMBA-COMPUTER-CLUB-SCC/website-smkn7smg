<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function showForm()
    {
        return view('kontak.kontak');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|string|max:15',
            'message' => 'required|string|max:300',
        ]);

        $contact = new Kontak();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phoneNumber;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('kontak.form')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}