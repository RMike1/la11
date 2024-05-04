<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\support\facades\storage;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Crud::all();
        return view('crud.index', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Crud::findOrfail($id);
        return view('crud.edit', compact('data'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $crud = new Crud;
        $crud->name = $request->name;
        $crud->age = $request->age;
        $crudImage = $request->image->store('images', 'public');
        $crud->image = $crudImage;
        $crud->save();
        return redirect(route("crud"))->with('status', 'saved successfully!');
    }

    public function update(Request $request)
    {
        $ids = $request->id;
        $crud = Crud::findOrfail($ids);
        $crud->name = $request->name;
        $crud->age = $request->age;

        if (Storage::exists($request->image)) {
            Storage::delete($crud->image);
        }
        $crudImage = $request->image->store('images', 'public');
        $crud->image = $crudImage;
        $crud->update();
        return redirect(route("crud"))->with('status', 'updated successfully!');
    }

    public function delete($id)
    {
        $data = Crud::findOrfail($id);
        $data->delete();
        return redirect()->back()->with('status', 'deleted successfully!');
    }
}
