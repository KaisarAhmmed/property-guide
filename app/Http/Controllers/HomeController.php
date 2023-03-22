<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function home() {
        $latest_properties = Property::orderBy('id', 'desc')->take(3)->get();
        $locations = Location::select(['id', 'name'])->get();

        return view('welcome', [
            'latest_properties' => $latest_properties,
            'locations' => $locations
        ]);
    }

    public function singleLocation($id) {
        $location = Location::findOrFail($id);

        return $location->name;
    }
}
