<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Materials List</h1>
        <a href="{{ route('materials.create') }}" class="btn btn-primary mb-3">Add New Material</a>

        @if ($materials->isEmpty())
            <div class="alert alert-info text-center">
                No materials found. Add a new one!
            </div>
        @else
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Material Type</th>
                        <th>Industry Sector</th>
                        <th>Base Unit Measure</th>
                        <th>Material Group</th>
                        <th>Creation Date</th>
                        <th>Created By</th>
                        <th>Loading Group</th>
                        <th>Old Material Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                        <tr>
                            <td>{{ $material->id }}</td>
                            <td>{{ $material->material_type }}</td>
                            <td>{{ $material->industry_sector }}</td>
                            <td>{{ $material->base_unit_measure }}</td>
                            <td>{{ $material->material_group }}</td>
                            <td>{{ $material->creation_date }}</td>
                            <td>{{ $material->created_by }}</td>
                            <td>{{ $material->loading_group }}</td>
                            <td>{{ $material->old_material_number }}</td>
                            <td>
                                <a href="{{ route('materials.show', $material->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('materials.edit', $material->id) }}"  class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('materials.destroy', $material->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this material?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
