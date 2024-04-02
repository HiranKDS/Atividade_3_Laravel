<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store()
    {
        $contact = new Contact();

        $contact->name = Crypt::encryptString('João');
        $contact->email = Crypt::encryptString('João@gmail.com');
        $contact->telefone = Crypt::encryptString('(00) 97070-7070');
        $contact->dt_nascimento = '2000-02-02';
        $contact->save();
    }

    public function update()
    {
        $contact = Contact::find(3);
        $contact->name = 'Joãozinho';
        $contact->save();

        $contact = Contact::where('name', 'Jane Does')->first();
        $contact->name = 'Mariana';
        $contact->save();
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }

    public function decripty()
    {
        $contact=Contact::find(5);
        $contact->name =Crypt::decryptString($contact->name);
        $contact->email =Crypt::decryptString($contact->email);
        $contact->telefone =Crypt::decryptString($contact->telefone);
        dd($contact);
    }
}
