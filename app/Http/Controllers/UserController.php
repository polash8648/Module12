<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(10);
 
         return view('user.index',['users'=> $users]);
     }
 
     public function create()
     {
         return view('user.create');
     }
 
     public function store(Request $request)
     {
         $inputs = $request->all();
         User::create($inputs);
 
         return redirect()->route('user.index')->with('success', 'user created successfully!');
     }
 
     public function edit($id) {
         $model = User::findOrFail($id);
 
         return view('user.edit', ['user' => $model]);
     }
 
     public function update(Request $request, $id) {
         $model = User::findOrFail($id);
         $input = $request->all();
 
         $model->update($input);
 
         return redirect()->route('user.index')->with('success', 'user updated successfully!');
     }
 
     public function delete($id) {
         $model = User::findOrFail($id);
         $model->delete();
 
         return redirect()->back()->with('success', 'user deleted successfully!');
     }

}
