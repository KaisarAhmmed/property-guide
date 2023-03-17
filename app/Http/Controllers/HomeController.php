<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function home() {
        $latest_properties = Property::orderBy('id', 'desc')->take(3)->get();

        return view('welcome', [
            'latest_properties' => $latest_properties
        ]);
    }
}
