@extends('layouts.app')

@section('content')
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
        </div>

        <div class="form-group">
            <label for="parent_id">Parent Category</label>
            <select name="parent_id" class="form-control">
                <option value="">— Select Parent Category —</option>
                @foreach($parents as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
