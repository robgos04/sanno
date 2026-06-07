@extends('admin.layout')

@section('title', 'News')

@section('topbar-actions')
    <a href="{{ route('admin.news.create') }}" class="btn-primary-red">
        <i class="fas fa-plus"></i> Add New
    </a>
@endsection

@section('content')
<div class="admin-card">
    <table class="admin-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Source</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($news as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('images/news/' . $item->newspic) }}"
                         alt="{{ $item->newstitle }}"
                         style="width:80px; height:60px; object-fit:cover; border-radius:6px;">
                </td>
                <td><strong>{{ $item->newstitle }}</strong></td>
                <td>{{ Str::limit($item->newscontent, 60) }}</td>
                <td>{{ $item->newssource }}</td>
                <td>{{ \Carbon\Carbon::parse($item->newsdate)->format('d M Y') }}</td>
                <td>
                    <div style="display:flex; gap:8px;">
                        <a href="{{ route('admin.news.edit', $item) }}"
                           class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('admin.news.destroy', $item) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this article?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align:center; color:#aaa; padding:40px;">
                    No news articles yet.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection