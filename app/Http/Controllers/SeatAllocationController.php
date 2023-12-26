<?php

namespace App\Http\Controllers;
use App\Models\SeatAllocation;

use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index() {
        $seatallocations = SeatAllocation::paginate(10);
 
         return view('seatallocation.index',['seatallocations'=> $seatallocations]);
     }
 
     public function create()
     {
         return view('seatallocation.create');
     }
 
     public function store(Request $request)
     {
         $inputs = $request->all();
         SeatAllocation::create($inputs);
 
         return redirect()->route('seatallocation.index')->with('success', 'seatallocation created successfully!');
     }
 
     public function edit($id) {
         $model = SeatAllocation::findOrFail($id);
 
         return view('seatallocation.edit', ['user' => $model]);
     }
 
     public function update(Request $request, $id) {
         $model = SeatAllocation::findOrFail($id);
         $input = $request->all();
 
         $model->update($input);
 
         return redirect()->route('seatallocation.index')->with('success', 'seatallocation updated successfully!');
     }
 
     public function delete($id) {
         $model = SeatAllocation::findOrFail($id);
         $model->delete();
 
         return redirect()->back()->with('success', 'seatallocation deleted successfully!');
     }

}
