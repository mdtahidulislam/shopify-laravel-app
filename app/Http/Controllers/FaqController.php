<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function groupIndex () {
        return view('group.index'); // view file: views/group/index.blade.php   
    }

    public function groupStore(Request $request) {
        // see form data
        dd($request->all());
    }
}
