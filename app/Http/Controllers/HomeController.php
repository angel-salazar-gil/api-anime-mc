<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        $anime_emision = Http::get('https://api.jikan.moe/v3/search/anime?q=Fate/Zero&page=1?status=airing&limit=15')['results'];

        $anime_recomendado_1 = Http::get('https://api.jikan.moe/v3/search/anime?q=Boku%20no%20Hero%20Academia')['results'][0];
        $anime_recomendado_2 = Http::get('https://api.jikan.moe/v3/search/anime?q=Re:Zero%20kara%20Hajimeru%20Isekai%20Seikatsu%202nd%20Season')['results'][0];
        $anime_recomendado_3 = Http::get('https://api.jikan.moe/v3/search/anime?q=Ore%20dake%20Haireru%20Kakushi%20Dungeon')['results'][0];

        return view('home', compact('anime_emision', 'anime_recomendado_1', 'anime_recomendado_2', 'anime_recomendado_3'));
    }
}
