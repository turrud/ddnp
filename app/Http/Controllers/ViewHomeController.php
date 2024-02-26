<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Controllers\Controller;

class ViewHomeController extends Controller
{
    public function index() {
        $homes = Home::all();
        return view('page.home.index', compact("homes"));
    }
}
