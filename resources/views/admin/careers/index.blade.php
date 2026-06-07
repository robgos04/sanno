@extends('admin.layout')

@section('title', 'Careers')

@section('topbar-actions')
    <a href="{{ route('admin.careers.create') }}" class="btn-primary-red">
        <i class="fas fa-plus"></i> Add New
    </a>
@endsection

@section('content')
<div class="admin-card">
    <table class="admin-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Requirement</th>
                <th>Benefit</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($careers as $career)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><strong>{{ $career->careername }}</strong></td>
                <td>{{ Str::limit($career->careerdesc, 50) }}</td>
                <td>{{ $career->careerrspec ?? '-' }}</td>
                <td>{{ $career->careerbenefit ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($career->careerdate)->format('d M Y') }}</td>
                <td>
                    <div style="display:flex; gap:8px;">
                        <a href="{{ route('admin.careers.edit', $career) }}"
                           class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('admin.careers.destroy', $career) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this posting?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align:center; color:#aaa; padding:40px;">
                    No career postings yet.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection