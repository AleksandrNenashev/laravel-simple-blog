<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->theme = $req->input('theme');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('contact')->with('success', 'Обращение было отправлено!');
    }

    public function showUserMessages(){
        $contact = new Contact();
        return view('userMessages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id){
        $contact = new Contact();
        return view('oneMessage', ['data' => $contact->find($id)]);
    }

    public function showUpdateForm($id){
        $contact = new Contact();
        return view('updateForm', ['data' => $contact->find($id)]);
    }

    public function update(ContactRequest $req, $id){
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->theme = $req->input('theme');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('contact-onemessage', $id)->with('success', 'Обращение было сохранено!');
    }

    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-usermessages', $id)->with('success', 'Обращение было удалено!');
    }
}
