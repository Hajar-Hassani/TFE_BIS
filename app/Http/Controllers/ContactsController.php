<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Models\Contact;
use Mail;


class ContactsController extends Controller {

   public function store(Request $request){
     $this->validate($request, [
         'nom'       =>  'required|string',
         'email'     =>  'required|email',
         'telephone' =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
         'message'   =>  'required',
         'subject'   => 'SweetCake | Contact',
     ]);

     //Envoyer le mail à l'admin
     Mail::send('template.emails.contact', array(
             'nom' => $request->get('nom'),
             'email' => $request->get('email'),
             'telephone' => $request->get('telephone'),
             'subject' => $request->get('subject'),
             'user_query' => $request->get('message'),
         ), function($message) use ($request){
             $message->from($request->email);
             $message->to('hajarhassani.webdesigner@gmail.com')->subject($request->get('subject'));
         });
   }
}
