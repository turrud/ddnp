<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Client;
use App\Models\Partner;
use App\Models\Team;

class ViewAboutController extends Controller
{
    public function index(){
        return view('page.about.index');
    }
    public function profile(){

        return view('page.about.profile.index');
    }
    public function team(){
        $teams = Team::all();
        return view('page.about.team.index', compact("teams"));
    }
    public function design_method(){
        return view('page.about.method.index');
    }
    public function partner(){
        $partners = Partner::all();
        return view('page.about.partner.index', compact("partners"));
    }
    public function client(){
        $clients = Client::all();
        return view('page.about.client.index', compact("clients"));
    }
    public function award(){
        $awards = Award::all();
        return view('page.about.award.index', compact("awards"));
    }
}
