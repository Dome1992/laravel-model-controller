<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// IMPORTO IL MODELLO
use App\Models\Movie;

class MainController extends Controller
{
    public function index() {

        $movies = Movie :: all();

        return view('pages.index', compact('movies'));
    }
}
