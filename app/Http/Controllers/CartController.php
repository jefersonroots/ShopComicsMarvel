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


        $id = $request->id;

        $cart[$id] = [
            "id" => $request['id'],
            "title" => $request['title'],
            "quantidade" => 1,
            "img" => $request['img'],
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('sucess', '<script>alert("não, estou aq.");</script>');
    }
}
