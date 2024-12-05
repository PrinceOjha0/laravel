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
        // Fetch all materials
        $materials = Material::all();
        
        // Return as JSON
        return response()->json([
            'success' => true,
            'data' => $materials
        ], 200);
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
        $material = Material::create($request->all());

        // Return the created material as JSON
        return response()->json([
            'success' => true,
            'message' => 'Material created successfully.',
            'data' => $material
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        // Return the specific material as JSON
        return response()->json([
            'success' => true,
            'data' => $material
        ], 200);
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

        // Update the material record with validated data
        $material->update($request->all());

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Material updated successfully.',
            'data' => $material
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        // Delete the material record
        $material->delete();

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Material deleted successfully.'
        ], 200);
    }
}
