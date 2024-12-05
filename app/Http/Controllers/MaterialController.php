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
        $materials = Material::all();
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

        $material = Material::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Material created successfully.',
            'data' => $material
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $material = Material::find($id);

        if (!$material) {
            return response()->json([
                'success' => false,
                'message' => 'Material not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $material
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $material = Material::find($id);

        if (!$material) {
            return response()->json([
                'success' => false,
                'message' => 'Material not found.'
            ], 404);
        }

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

        $material->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Material updated successfully.',
            'data' => $material
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $material = Material::find($id);

        if (!$material) {
            return response()->json([
                'success' => false,
                'message' => 'Material not found.'
            ], 404);
        }

        $material->delete();

        return response()->json([
            'success' => true,
            'message' => 'Material deleted successfully.'
        ], 200);
    }
}
