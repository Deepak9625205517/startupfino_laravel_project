<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
    public function index()
    {
        $records = Contact::all();
        return view('admin.contact.index', compact('records'));
    }
}
