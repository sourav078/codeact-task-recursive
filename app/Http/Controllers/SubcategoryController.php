<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.subcategory.manage', ['subcategories' => Subcategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subcategory.index', ['categories' => Category::all()],['subcategories' => Subcategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subcategory::newSubcategory($request);
        return back()->with('message', 'Subcategory info created successfully.' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.subcategory.edit', [
            'subcategory' => Subcategory::find($id),
            'categories' => Category::all(),
            'subcategories' => Subcategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Subcategory::updateSubcategory($request, $id);
        return redirect('/subcategory')->with('message', 'Subcategory info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return redirect('subcategory')->with('message', 'Sub-category info delete successfully.');
    }
}
