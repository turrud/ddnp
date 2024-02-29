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
        // $projectInteriors = ProjectInterior::latest()->take(6)->get();
        $projectInteriors = ProjectInterior::all();
        return view('page.project.interior.index', compact("projectInteriors"));
    }
    public function architectureDesign(){
        // $proArchitecturs = ProArchitectur::latest()->limit(6)->get();
        $proArchitecturs = ProArchitectur::all();
        return view('page.project.architecture.index', compact("proArchitecturs"));
    }
    public function interiorDesignShow($interiorId){
        $interiorMember = ProjectInterior::findOrFail($interiorId);
        return view('page.project.interior.show', compact("interiorMember"));
    }
    public function architectureDesignShow($archiId){
        $archiMember = ProArchitectur::findOrFail($archiId);
        return view('page.project.architecture.show', compact("archiMember"));
    }
}
