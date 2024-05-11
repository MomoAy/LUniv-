<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        return view("visitors.home");
    }

    public function ranking()
    {
        return view("visitors.ranking");
    }

    public  function university()
    {
        return view("visitors.university", ['universities' => University::all()]);
    }

    public function showUniversity(University $id){
        return view('visitors.showUniversity', ['university' => $id]);
    }
}
