<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Display a listing of projects
    public function index()
    {
        $projects = Project::orderBy('created_at','desc')->with('category')->get();
        return view('pages.projects.index', compact('projects'));
    }

    // Show the form for creating a new project
    public function create()
    {
        $categories = Category::all();
        return view('pages.projects.create', compact('categories'));
    }

    // Store a newly created project in storage
    public function store(Request $request)
    {
        $request->validate([
            'unique_number' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'district' => 'required|string',
            'street' => 'nullable|string',
            'mahalla' => 'nullable|string',
            'land' => 'nullable|numeric',
            'contact_person' => 'nullable|string',
            'hokim_resolution_no' => 'nullable|string',
            'image' => 'nullable|image',
            'implementation_period' => 'nullable|integer',
            'status' => 'required|in:step_1,step_2,archived,completed',
        ]);

        $data = $request->all();

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('project_images', 'public');
        }

        Project::create($data);

        return redirect()->route('projectsIndex')->with('success', 'Project created successfully.');
    }
    
    // Show the form for editing the specified project
    public function edit(Project $project, $id)
    {
        $categories = Category::all();
        $project = Project::find($id);
        return view('pages.projects.edit', compact('project', 'categories'));
    }

    // Update the specified project in storage
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'unique_number' => 'nullable|string',
            'district' => 'required|string',
            'street' => 'nullable|string',
            'mahalla' => 'nullable|string',
            'land' => 'nullable|numeric',
            'contact_person' => 'nullable|string',
            'image' => 'nullable|image',
            'implementation_period' => 'nullable|integer',
            'status' => 'required',
        ]);

        $data = $request->all();

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($project->image) {
                \Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('project_images', 'public');
        }
        
        $project->update($data);

        return redirect()->route('projectsIndex')->with('success', 'Project updated successfully.');
    }

    // Remove the specified project from storage
    public function destroy(Project $project, $id)
    {
        // Delete the image if exists
        $project = Project::find($id);

        if ($project->image) {
            \Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        $project->save();

        return redirect()->route('projectsIndex')->with('success', 'Project deleted successfully.');
    }
}
