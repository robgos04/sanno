<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // ── Public front-end ─────────────────────────
    public function index()
    {
        $projects = Project::all();
        $latestProjectId = $projects->max('id');
        return view('project', compact('projects', 'latestProjectId'));
    }

    // ── Admin: list all ──────────────────────────
    public function adminIndex()
    {
        $projects = Project::all();
        $projectCount = $projects->count();

        return view('admin.projects.index', compact('projects', 'projectCount'));
    }

    // ── Admin: show create form ──────────────────
    public function create()
    {
        if (Project::count() >= 15) {
            return redirect()->route('admin.projects.index')
                             ->with('error', 'Maximum of 15 projects reached. Delete an existing project before adding a new one.');
        }

        return view('admin.projects.create');
    }

    // ── Admin: store ─────────────────────────────
    public function store(Request $request)
    {
        if (Project::count() >= 15) {
            return redirect()->route('admin.projects.index')
                             ->with('error', 'Maximum of 15 projects reached. Delete an existing project before adding a new one.');
        }

        $request->validate([
            'projectname' => 'required|string|max:255',
            'projectpic'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Save image to public/images/projects/
        $file     = $request->file('projectpic');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/projects'), $filename);

        Project::create([
            'projectname' => $request->projectname,
            'projectpic'  => $filename,
        ]);

        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project added successfully.');
    }

    // ── Admin: show edit form ────────────────────
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    // ── Admin: update ────────────────────────────
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'projectname' => 'required|string|max:255',
            'projectpic'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $filename = $project->projectpic; // keep existing image by default

        if ($request->hasFile('projectpic')) {
            // Delete old image
            $oldPath = public_path('images/projects/' . $project->projectpic);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
            // Save new image
            $file     = $request->file('projectpic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/projects'), $filename);
        }

        $project->update([
            'projectname' => $request->projectname,
            'projectpic'  => $filename,
        ]);

        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project updated successfully.');
    }

    // ── Admin: delete ────────────────────────────
    public function destroy(Project $project)
    {
        // Delete image file
        $oldPath = public_path('images/projects/' . $project->projectpic);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
                         ->with('success', 'Project deleted.');
    }
}