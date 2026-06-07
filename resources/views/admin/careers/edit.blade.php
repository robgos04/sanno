@extends('admin.layout')

@section('title', 'Edit Career')

@section('topbar-actions')
    <a href="{{ route('admin.careers.index') }}" class="btn-primary-red">
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

    <form action="{{ route('admin.careers.update', $career) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Job Title <span style="color:#c0281c;">*</span></label>
            <input type="text" name="careername" class="form-control"
                   value="{{ old('careername', $career->careername) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description <span style="color:#c0281c;">*</span></label>
            <textarea name="careerdesc" class="form-control" rows="3"
                      required>{{ old('careerdesc', $career->careerdesc) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Requirements</label>
            <textarea name="careerrspec" class="form-control" rows="3">{{ old('careerrspec', $career->careerrspec) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Benefit</label>
            <input type="number" name="careerbenefit" class="form-control"
                   value="{{ old('careerbenefit', $career->careerbenefit) }}">
        </div>

        <div class="mb-4">
            <label class="form-label">Posting Date <span style="color:#c0281c;">*</span></label>
            <input type="date" name="careerdate" class="form-control"
                   value="{{ old('careerdate', \Carbon\Carbon::parse($career->careerdate)->format('Y-m-d')) }}"
                   required>
        </div>

        <button type="submit" class="btn-primary-red" style="width:100%; justify-content:center;">
            <i class="fas fa-save"></i> Update Posting
        </button>
    </form>
</div>
@endsection