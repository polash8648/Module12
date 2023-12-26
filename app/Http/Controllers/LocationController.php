<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function index() {
       $locations = Location::paginate(10);

        return view('location.index',['locations'=> $locations]);
    }

    public function create()
    {
        return view('location.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        location::create($inputs);

        return redirect()->route('location.index')->with('success', 'Location created successfully!');
    }

    public function edit($id) {
        $model = location::findOrFail($id);

        return view('location.edit', ['location' => $model]);
    }

    public function update(Request $request, $id) {
        $model = location::findOrFail($id);
        $input = $request->all();

        $model->update($input);

        return redirect()->route('location.index')->with('success', 'Location updated successfully!');
    }

    public function delete($id) {
        $model = location::findOrFail($id);
        $model->delete();

        return redirect()->back()->with('success', 'Location deleted successfully!');
    }

}
