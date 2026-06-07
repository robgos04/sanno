@extends('admin.layout')

@section('title', 'Edit Project')

@section('topbar-actions')
    <a href="{{ route('admin.projects.index') }}" class="btn-primary-red">
        <i class="fas fa-arrow-left"></i> Back
    </a>
@endsection

@section('content')
<div class="admin-card" style="max-width:680px;">

    @if($errors->any())
        <div style="background:#fef2f2; border:1px solid #fca5a5; color:#b91c1c;
                    padding:12px 16px; border-radius:8px; margin-bottom:20px; font-size:0.85rem;">
            <ul style="margin:0; padding-left:16px;">
                @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Project Name <span style="color:#c0281c;">*</span></label>
            <input type="text" name="projectname" class="form-control"
                   value="{{ old('projectname', $project->projectname) }}" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Project Image</label>
            <!-- Show current image -->
            <div style="margin-bottom:10px;">
                <img src="{{ asset('images/projects/' . $project->projectpic) }}"
                     alt="{{ $project->projectname }}"
                     style="width:120px; height:90px; object-fit:cover; border-radius:8px;">
                <p style="font-size:0.78rem; color:#888; margin-top:4px;">Current image</p>
            </div>
            <input type="file" name="projectpic" class="form-control" accept="image/*">
            <small style="color:#888; font-size:0.78rem;">Leave empty to keep current image</small>
        </div>

        <button type="submit" class="btn-primary-red" style="width:100%; justify-content:center;">
            <i class="fas fa-save"></i> Update Project
        </button>
    </form>
</div>
@endsection