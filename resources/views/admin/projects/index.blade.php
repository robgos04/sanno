@extends('admin.layout')

@section('title', 'Projects')

@section('topbar-actions')
    @if(isset($projectCount) && $projectCount < 15)
        <a href="{{ route('admin.projects.create') }}" class="btn-primary-red">
            <i class="fas fa-plus"></i> Add New
        </a>
    @else
        <span class="btn-primary-red" style="opacity:0.6; pointer-events:none; cursor:default;">
            <i class="fas fa-plus"></i> Max 15 Projects
        </span>
    @endif

    <span style="margin-left:12px; color:#444; font-weight:600;">
        {{ isset($projectCount) ? $projectCount : $projects->count() }} / 15
    </span>
@endsection

@section('content')
<div class="admin-card">
    <table class="admin-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Project Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('images/projects/' . $project->projectpic) }}"
                         alt="{{ $project->projectname }}"
                         style="width:80px; height:60px; object-fit:cover; border-radius:6px;">
                </td>
                <td><strong>{{ $project->projectname }}</strong></td>
                <td>
                    <div style="display:flex; gap:8px;">
                        <a href="{{ route('admin.projects.edit', $project) }}"
                           class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this project?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align:center; color:#aaa; padding:40px;">
                    No projects yet.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection