@extends('layouts.app')

@section('content')
    <h1>Edit Project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Unique Number -->
        <div class="form-group">
            <label for="unique_number">Unique Number</label>
            <input type="text" name="unique_number" class="form-control" value="{{ $project->unique_number }}" placeholder="e.g., YUN0001">
        </div>

        <!-- Category -->
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control">
                <option value="">— Select Category —</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- District -->
        <div class="form-group">
            <label for="district">District</label>
            <input type="text" name="district" class="form-control" value="{{ $project->district }}" required>
        </div>

        <!-- Street -->
        <div class="form-group">
            <label for="street">Street</label>
            <input type="text" name="street" class="form-control" value="{{ $project->street }}" placeholder="Enter street">
        </div>

        <!-- Mahalla Name -->
        <div class="form-group">
            <label for="mahalla_name">Mahalla Name</label>
            <input type="text" name="mahalla_name" class="form-control" value="{{ $project->mahalla_name }}" placeholder="Enter mahalla name">
        </div>

        <!-- Land -->
        <div class="form-group">
            <label for="land">Land (ha)</label>
            <input type="number" step="0.01" name="land" class="form-control" value="{{ $project->land }}" placeholder="e.g., 0.12">
        </div>

        <!-- Investor Initiative Date -->
        <div class="form-group">
            <label for="investor_initiative_date">Investor Initiative Date</label>
            <input type="date" name="investor_initiative_date" class="form-control" value="{{ $project->investor_initiative_date }}">
        </div>

        <!-- Company Name -->
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" class="form-control" value="{{ $project->company_name }}" placeholder="Enter company name">
        </div>

        <!-- Contact Person -->
        <div class="form-group">
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" class="form-control" value="{{ $project->contact_person }}" placeholder="Enter contact person">
        </div>

        <!-- Hokim Resolution Number -->
        <div class="form-group">
            <label for="hokim_resolution_no">Hokim Resolution No</label>
            <input type="text" name="hokim_resolution_no" class="form-control" value="{{ $project->hokim_resolution_no }}" placeholder="Enter Hokim resolution number">
        </div>

        <!-- Image -->
        <div class="form-group">
            <label for="image">Project Image</label>
            @if($project->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" width="200">
                </div>
            @endif
            <input type="file" name="image" class="form-control-file">
        </div>

        <!-- Implementation Period -->
        <div class="form-group">
            <label for="implementation_period">Implementation Period (months)</label>
            <input type="number" name="implementation_period" class="form-control" value="{{ $project->implementation_period }}" placeholder="e.g., 36">
        </div>

        <!-- Status -->
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="step_1" {{ $project->status == 'step_1' ? 'selected' : '' }}>Step 1</option>
                <option value="step_2" {{ $project->status == 'step_2' ? 'selected' : '' }}>Step 2</option>
                <option value="archived" {{ $project->status == 'archived' ? 'selected' : '' }}>Archived</option>
                <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
@endsection
