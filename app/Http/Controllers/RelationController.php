<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Relation;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    public function index(){

        // $relations = Formation::all() ;
        $relations = Formation::paginate(2) ;
        return view("relation", compact("relations")) ;
    }

    public function detail($id){
    // public function detail(Formation $formation){

        $detail = Formation::findorfail($id) ;
        return view("detail", compact("detail")) ;
    }

    public function stagiaire($id){

        $stagiaire = Stagiaire::findorfail($id) ;
        return view("stagiaire", compact("stagiaire")) ;
    }
}