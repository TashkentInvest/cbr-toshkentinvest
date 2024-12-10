@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create Project</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Unique Number</th>
                <th>Category</th>
                <th>District</th>
                <th>Street</th>
                <th>Mahalla</th>
                <th>Land (ha)</th>
                <th>Company</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->unique_number }}</td>
                    <td>{{ $project->category ? $project->category->name : '—' }}</td>
                    <td>{{ $project->district }}</td>
                    <td>{{ $project->street }}</td>
                    <td>{{ $project->mahalla_name }}</td>
                    <td>{{ $project->land }}</td>
                    <td>{{ $project->company_name }}</td>
                    <td>{{ $project->status }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
