<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function show(Request $request)
    {
        $animes = Http::get('https://api.jikan.moe/v3/search/anime?q='.$request->name)['results'];
        return view('animes', compact('animes'));
    }
}
