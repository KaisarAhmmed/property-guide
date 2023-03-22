<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $locations = Location::latest()->paginate(10);

        return view('location.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $location = new Location();
        $location->name = $request->name;
        $location->save();

        return  redirect(route('dashboard-location.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $location = Location::findOrFail($id);

        return view('location.edit', ['location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {

        $request->validate([
            'name' => 'required'
        ]);

        $location = Location::findOrFail($id);
        $location->name = $request->name;
        $location->save();

        return  redirect(route('dashboard-location.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $location = Location::findOrFail($id);
        $location->delete();

        return  redirect(route('dashboard-location.index'));
    }
}
