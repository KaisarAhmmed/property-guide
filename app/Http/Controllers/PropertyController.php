<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller {
    public function single($id) {
        $property = Property::findOrFail($id);

        return view('property.single', ['property' => $property]);
    }

    public function index(Request $request) {
        $latest_properties = Property::latest();

        //dd(!empty($request->sale));

        if ($request->sale != null) {
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }

        if ($request->type != null) {
            $latest_properties = $latest_properties->Where('type', $request->type);
        }

        if (!empty($request->price)) {
            if ($request->price == '200000') {
                $latest_properties = $latest_properties->where('price', '>', 100000)->where('price', '<=', 150000);
            }
        }

        if (!empty($request->bedrooms)) {
            $latest_properties = $latest_properties->where('bedrooms', $request->bedrooms);
        }

        if (!empty($request->property_name)) {
            $latest_properties = $latest_properties->where('name', 'LIKE', '%' . $request->property_name . '%');
        }

        $latest_properties = $latest_properties->paginate(12);


        return view('property.index', ['latest_properties' => $latest_properties]);
    }
}
