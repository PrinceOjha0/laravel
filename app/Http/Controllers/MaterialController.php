<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::all(); // Fetch all materials
        return view('materials.index', compact('materials')); // Return the index view with data
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materials.create'); // Return a form view for creating new material
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'material_type' => 'required|string|max:255',
            'industry_sector' => 'required|string|max:255',
            'base_unit_measure' => 'required|string|max:50',
            'material_group' => 'required|string|max:255',
            'creation_date' => 'required|date',
            'created_by' => 'required|string|max:255',
            'loading_group' => 'nullable|string|max:255',
            'old_material_number' => 'nullable|string|max:255',
        ]);

        // Create a new material record
        Material::create($request->all());

        return redirect()->route('materials.index')->with('success', 'Material created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('materials.show', compact('material')); // Return the view for showing a specific material
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('materials.edit', compact('material')); // Return the edit form view with material data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        // Validate incoming request data
        $request->validate([
            'material_type' => 'required|string|max:255',
            'industry_sector' => 'required|string|max:255',
            'base_unit_measure' => 'required|string|max:50',
            'material_group' => 'required|string|max:255',
            'creation_date' => 'required|date',
            'created_by' => 'required|string|max:255',
            'loading_group' => 'nullable|string|max:255',
            'old_material_number' => 'nullable|string|max:255',
        ]);

        // Update the material record
        $material->update($request->all());

        return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete(); // Delete the material record
        return redirect()->route('materials.index')->with('success', 'Material deleted successfully.');
    }
}
