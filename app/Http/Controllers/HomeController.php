<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        $anime_1 = Http::get('https://api.jikan.moe/v3/search/anime?q=OnePiece')['results'][0];
        $anime_2 = Http::get('https://api.jikan.moe/v3/search/anime?q=Jujutsu%20Kaisen')['results'][0];
        $anime_3 = Http::get('https://api.jikan.moe/v3/search/anime?q=Dr.%20Stone:%20Stone%20Wars')['results'][0];
        $anime_4 = Http::get('https://api.jikan.moe/v3/search/anime?q=Kaifuku%20Jutsushi%20no%20Yarinaoshi')['results'][0];
        $anime_5 = Http::get('https://api.jikan.moe/v3/search/anime?q=Tensei%20shitara%20Slime%20Datta%20Ken%202nd%20Season')['results'][0];
        $anime_6 = Http::get('https://api.jikan.moe/v3/search/anime?q=Log%20Horizon:%20Entaku%20Houkai')['results'][0];
        $anime_7 = Http::get('https://api.jikan.moe/v3/search/anime?q=Mushoku%20Tensei:%20Isekai%20Ittara%20Honki%20Dasu')['results'][0];
        $anime_8 = Http::get('https://api.jikan.moe/v3/search/anime?q=Horimiya')['results'][0];
        $anime_9 = Http::get('https://api.jikan.moe/v3/search/anime?q=Gotoubun%20no%20Hanayome%202nd%20Season')['results'][0];
        $anime_10 = Http::get('https://api.jikan.moe/v3/search/anime?q=GYuru%20Camp%20Season%202')['results'][0];
        $anime_11 = Http::get('https://api.jikan.moe/v3/search/anime?q=Hataraku%20Saibou!!%202nd%20Season')['results'][0];
        $anime_12 = Http::get('https://api.jikan.moe/v3/search/anime?q=Kumo%20Desu%20ga,%20Nani%20ka?')['results'][0];
        $anime_13 = Http::get('https://api.jikan.moe/v3/search/anime?q=WIXOSS%20Diva(A)Live')['results'][0];
        $anime_14 = Http::get('https://api.jikan.moe/v3/search/anime?q=Hortensia%20Saga%20(TV)')['results'][0];
        $anime_15 = Http::get('https://api.jikan.moe/v3/search/anime?q=Bungou%20Stray%20Dogs%20Wan!')['results'][0];

        $anime_recomendado_1 = Http::get('https://api.jikan.moe/v3/search/anime?q=Boku%20no%20Hero%20Academia')['results'][0];
        $anime_recomendado_2 = Http::get('https://api.jikan.moe/v3/search/anime?q=Re:Zero%20kara%20Hajimeru%20Isekai%20Seikatsu%202nd%20Season')['results'][0];
        $anime_recomendado_3 = Http::get('https://api.jikan.moe/v3/search/anime?q=Ore%20dake%20Haireru%20Kakushi%20Dungeon')['results'][0];

        return view('home', compact('anime_1', 'anime_2', 'anime_3', 'anime_4', 'anime_5', 'anime_6', 'anime_7', 'anime_8', 'anime_9', 'anime_10', 'anime_11', 'anime_12', 'anime_13', 'anime_14', 'anime_15', 'anime_recomendado_1', 'anime_recomendado_2', 'anime_recomendado_3'));
    }
}
