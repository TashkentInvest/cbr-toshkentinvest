@extends('layouts.admin')

@section('content')
    <h1>Loyihalar</h1>
    <a href="{{ route('projectsCreate') }}" class="btn btn-primary mb-3">Loyiha yaratish</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Yagona raqam</th>
                <th>Tuman</th>
                <th>Mahalla</th>
                <th>Yer maydoni (ga)</th>
                <th>Realizatisiya muddati</th>
                <th>Holati</th>
                <th>Harakatlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->unique_number }}</td>
                    <td>{{ $project->district }}</td>
                    <td>{{ $project->mahalla }}</td>
                    <td>{{ $project->land }}</td>
                    <td>{{ $project->srok_realizatsi ?? ''}}</td>
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
