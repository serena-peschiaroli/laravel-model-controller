<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $movies= Movie::all();
        return view('home', compact('movies'));
    }


    public function search(Request $request) {
        $query = Movie::query();
        

        if($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', '%'. $search . '%')
                  ->orWhere('original_title', 'like', '%' . $search . '%');
        }

        dd($query->toSql(), $query->getBindings());

        $movies = $query->get();
        
        return view('movies', compact('movies'));
    }
}
