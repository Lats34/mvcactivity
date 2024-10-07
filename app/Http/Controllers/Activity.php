<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Activity extends Controller
{
    public function activity(Request $request)
    {
        return "Helli $request->name";
    }
}

