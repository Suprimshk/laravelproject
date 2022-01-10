<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact(Request $req)
    {
        $contact=new Contact;
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');
        $contact->save();
    }
}
