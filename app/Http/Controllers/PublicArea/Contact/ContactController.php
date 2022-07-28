<?php

namespace App\Http\Controllers\PublicArea\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('public-area.pages.Contact.contact');
    }
}
