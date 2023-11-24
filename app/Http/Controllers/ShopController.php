<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function getDetails (Request $request) {
        // return response('Hello shopify', 200);
        /**
         * authenticated user - shop
        */
        
        $shop = $request -> user();
        //dd($shop);
        $shop = $shop->api()->rest('GET', '/admin/shop.json');
        $results = $shop['body']['shop'];
        // echo "<pre>";
        // print_r($shop);

        // echo $shop['body']['shop']['name'];

        //return view('shop', ['shopData' => json_encode($shop['body']['shop'])]);

        return view('shop', compact('results'));
         
    }
}
