<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        // Optionally filter by category if category_id is provided in query
        $query = Project::query();

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        $projects = $query->with(['category', 'stages', 'documents'])->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::with(['category', 'stages', 'documents'])->findOrFail($id);
        return view('projects.show', compact('project'));
    }

    // create, store, edit, update, destroy as needed...
}
