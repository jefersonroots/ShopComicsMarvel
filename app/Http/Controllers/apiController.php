<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http; // "GAZZLEHTTP/GUZZLE

class apiController extends Controller
{


    public function comics()
    {
        $response = Http::withBasicAuth('user', 'password')->get('https://gateway.marvel.com:443/v1/public/comics?ts=420&apikey=a75555280c95023db0c5de8ec7952321&hash=edd67aae6847234c9d7c12045da9ef50');
        $result = $response->json();

        // var_dump($URL= $result['data']['results'][1]['series']);
        // $response = Http::withBasicAuth('user', 'password')->get(''.$URL.'?ts=420&apikey=a75555280c95023db0c5de8ec7952321&hash=edd67aae6847234c9d7c12045da9ef50');
        // $resultVariants = $response->json();

        return view('comics', ['results' => $result['data']['results']]);
    }
}
