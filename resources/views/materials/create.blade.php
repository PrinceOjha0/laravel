<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Material</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }
        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Create Material</h2>
    <form action="{{ route('materials.store') }}" method="POST">
        @csrf
        <div>
            <label for="material_type">Material Type</label>
            <input type="text" name="material_type" id="material_type" value="Type B" required>
        </div>
        <div>
            <label for="industry_sector">Industry Sector</label>
            <input type="text" name="industry_sector" id="industry_sector" value="Sector X" required>
        </div>
        <div>
            <label for="base_unit_measure">Base Unit Measure</label>
            <input type="text" name="base_unit_measure" id="base_unit_measure" value="KG" required>
        </div>
        <div>
            <label for="material_group">Material Group</label>
            <input type="text" name="material_group" id="material_group" value="Group 1" required>
        </div>
        <div>
            <label for="creation_date">Creation Date</label>
            <input type="date" name="creation_date" id="creation_date" value="2024-12-01" required>
        </div>
        <div>
            <label for="created_by">Created By</label>
            <input type="text" name="created_by" id="created_by" value="Admin" required>
        </div>
        <div>
            <label for="loading_group">Loading Group</label>
            <input type="text" name="loading_group" id="loading_group" value="Group A" required>
        </div>
        <div>
            <label for="old_material_number">Old Material Number</label>
            <input type="text" name="old_material_number" id="old_material_number" value="12345" required>
        </div>
        <button type="submit">Create Material</button>
    </form>
</div>

</body>
</html>
