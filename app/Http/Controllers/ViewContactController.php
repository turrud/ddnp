<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewContactController extends Controller
{
    public function index() {
        return view('page.contact.create');
    }
}
