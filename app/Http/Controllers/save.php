<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class save extends Controller
{
    function save(Request $request) {
        // Validate and save the request data
        
        // Redirect back to the home page
        return redirect('/');
    }
}
