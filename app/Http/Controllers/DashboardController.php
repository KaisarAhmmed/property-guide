<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function index() {
        return view('admin.dashboard');
    }

    public function properties() {
        $properties = Property::latest()->paginate(20);

        return view('admin.properties', ['properties' => $properties]);
    }

    public function addProperty() {
    }
}
