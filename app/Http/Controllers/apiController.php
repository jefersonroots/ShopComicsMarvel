<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http; // "GAZZLEHTTP/GUZZLE
use App\Http\Requests\ValidateRegistration;

class apiController extends Controller
{

    //var $url = 'https://gateway.marvel.com:443/v1/public/comics?ts=4220&apikey=a75555280c95023db0c5de8ec7952321&hash=edd67aae6847234c9d7c12045da9ef50';
    public function comics()
    {
        $response = Http::withBasicAuth('user', 'password')->get('https://gateway.marvel.com:443/v1/public/comics?ts=420&apikey=a75555280c95023db0c5de8ec7952321&hash=edd67aae6847234c9d7c12045da9ef50');
        $resultArray = $response->json();
      return view('comics',['results'=>$resultArray['data']['results']]);
      //dd('index',['results'=>$resultArray['data']['results']]);
      //dd('index',['results'=>$resultArray['data']['results']]);

        // return response()->json([
        //     'title' => $response->body('title')
        // ]);

        //dd ($response->body('title'));
          //return ($response->body('[name]'));
        // foreach ($response as $e ) {
        //     $i =+ 14;
        //    // return ($result[$i]['title']);
        //     return response()->json([
        //         'title' => $result[$i]['title']
        //     ]);
        //  }
        if (!isset($result)) {
            abort(404);
        } else {
            response(200);
        }
    }
    }
