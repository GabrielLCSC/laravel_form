<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        // Get contact gata
        $contacts = Contact::all();
        //dd($contacts);
        return view('welcome', ['contacts' => $contacts]);
    }
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        // Valider les données du formulaire de contact
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], [
            'name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email n\'est pas valide',
            'message.required' => 'Le message est obligatoire',
        ]);

        // Créer un nouvel objet Contact pour stocker les données du formulaire
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        // dd($contact);


        // Rediriger l'utilisateur vers la page de confirmation
        return view('contact-confirm', ['contact' => $contact]);
    }
}
