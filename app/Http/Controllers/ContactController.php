<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request) {
        return view('users.index');
      }

      public function showForm(Request $request)
      {
          return view('contact.contact');
      }
  
      public function store(Request $request)
      {
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'subject' => 'required',
              'pesan' => 'required'
          ]);
  
  
          $data = [
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'subject' => $request->get('subject'),
              'pesan' => $request->get('pesan'),
          ];
  
          // dd($data);
  
          Contact::create($request->all());
          Mail::send('users.mail', $data, function ($message) use ($request) {
              $message->from($request->email);
              $message->to('indopelumas@gmail.com', 'Hello Admin')->subject($request->get('subject'));
              $message->to('effasya@gmail.com', 'Hello Admin')->subject($request->get('subject'));
          });
  
          return back()->with('success', 'Thanks for contacting us.');
      }
  
    }
