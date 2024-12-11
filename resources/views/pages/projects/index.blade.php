@extends('layouts.admin')

@section('content')
    <h1>Loyihalar</h1>
    <a href="{{ route('projectsIndex') }}" class="btn btn-primary mb-3">Loyiha yaratish</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Yagona raqam</th>
                <th>Kategoriya</th>
                <th>Tuman</th>
                <th>Ko‘cha</th>
                <th>Mahalla</th>
                <th>Yer maydoni (ga)</th>
                <th>Kompaniya</th>
                <th>Holati</th>
                <th>Harakatlar</th>
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
                        <a href="{{ route('projectsEdit', $project->id) }}" class="btn btn-sm btn-warning">Tahrirlash</a>
                        <form action="{{ route('projectsDestroy', $project->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Aniq o‘chirasizmi?')">O‘chirish</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
