<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http; // "GAZZLEHTTP/GUZZLE
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getId(Request $request)
    {
        $cart = session()->get('cart');
        https://gateway.marvel.com:443/v1/public/comics/82970?apikey=a75555280c95023db0c5de8ec7952321
        $id = $request->id;
    //     $response = Http::withBasicAuth('user', 'password')->get('https://gateway.marvel.com:443/v1/public/comics/'.$id.'?ts=420&apikey=a75555280c95023db0c5de8ec7952321&hash=edd67aae6847234c9d7c12045da9ef50');
    //    $resultArray = $response->json();
    //     // return view('cart',['results'=>$resultArray['data']['results']]);


        $cart[$id]=[
            "id" => $request['id']
        ];

            session()->put('cart',$cart);
            return redirect()->back()->with('sucess','Comics added to cart sucessfully');
    }
}
