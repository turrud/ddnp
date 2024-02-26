<?php

namespace App\Http\Controllers;

use App\Models\ProArchitectur;
use App\Models\ProjectInterior;
use Illuminate\Http\Request;

class ViewProjectController extends Controller
{
    public function index(){
        return view('page.project.index');
    }
    public function interiorDesign(){
        $projectInteriors = ProjectInterior::all();
        return view('page.project.interior.index', compact("projectInteriors"));
    }
    public function architectureDesign(){
        $proArchitecturs = ProArchitectur::all();
        return view('page.project.architecture.index', compact("proArchitecturs"));
    }
}
