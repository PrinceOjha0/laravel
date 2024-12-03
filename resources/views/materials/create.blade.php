<form action="{{ route('materials.store') }}" method="POST">
    @csrf
    <div>
        <label for="material_type">Material Type</label>
        <input type="text" name="material_type" id="material_type" required>
    </div>
    <div>
        <label for="industry_sector">Industry Sector</label>
        <input type="text" name="industry_sector" id="industry_sector" required>
    </div>
    <!-- Other fields -->
    <button type="submit">Create Material</button>
</form>
