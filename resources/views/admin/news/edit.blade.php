@extends('admin.layout')

@section('title', 'Edit News')

@section('topbar-actions')
    <a href="{{ route('admin.news.index') }}" class="btn-primary-red">
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

    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title <span style="color:#c0281c;">*</span></label>
            <input type="text" name="newstitle" class="form-control"
                   value="{{ old('newstitle', $news->newstitle) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Content <span style="color:#c0281c;">*</span></label>
            <textarea name="newscontent" class="form-control" rows="5"
                      required>{{ old('newscontent', $news->newscontent) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label">News Image</label>
            <div style="margin-bottom:10px;">
                <img src="{{ asset('images/news/' . $news->newspic) }}"
                     alt="{{ $news->newstitle }}"
                     style="width:120px; height:90px; object-fit:cover; border-radius:8px;">
                <p style="font-size:0.78rem; color:#888; margin-top:4px;">Current image</p>
            </div>
            <input type="file" name="newspic" class="form-control" accept="image/*">
            <small style="color:#888; font-size:0.78rem;">Leave empty to keep current image</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Date <span style="color:#c0281c;">*</span></label>
            <input type="date" name="newsdate" class="form-control"
                   value="{{ old('newsdate', \Carbon\Carbon::parse($news->newsdate)->format('Y-m-d')) }}"
                   required>
        </div>

        <!-- Source dropdown -->
        @php
            $currentSource = old('newssource', $news->newssource);
            $isExternal    = in_array($currentSource, ['External']) || 
                             (!in_array($currentSource, ['Internal', 'External']) && $currentSource);
            $sourceValue   = $isExternal ? 'External' : $currentSource;
            $linkValue     = old('newslink', $isExternal ? $news->newssource : '');
        @endphp

        <div class="mb-3">
            <label class="form-label">Source <span style="color:#c0281c;">*</span></label>
            <select name="newssource" id="newssource" class="form-select"
                    onchange="toggleExternalLink(this.value)">
                <option value="">-- Select Source --</option>
                <option value="Internal" {{ $sourceValue === 'Internal' ? 'selected' : '' }}>
                    Internal
                </option>
                <option value="External" {{ $sourceValue === 'External' ? 'selected' : '' }}>
                    External
                </option>
            </select>
        </div>

        <!-- External link field -->
        <div class="mb-4" id="external-link-field"
             style="display: {{ $sourceValue === 'External' ? 'block' : 'none' }};">
            <label class="form-label">External Link <span style="color:#c0281c;">*</span></label>
            <input type="url" name="newslink" id="newslink" class="form-control"
                   value="{{ $linkValue }}"
                   placeholder="https://example.com/article"
                   {{ $sourceValue === 'External' ? 'required' : '' }}>
            <small style="color:#888; font-size:0.78rem;">Full URL including https://</small>
        </div>

        <button type="submit" class="btn-primary-red" style="width:100%; justify-content:center;">
            <i class="fas fa-save"></i> Update Article
        </button>
    </form>
</div>

<script>
function toggleExternalLink(value) {
    var field     = document.getElementById('external-link-field');
    var linkInput = document.getElementById('newslink');
    if (value === 'External') {
        field.style.display = 'block';
        linkInput.setAttribute('required', 'required');
    } else {
        field.style.display = 'none';
        linkInput.removeAttribute('required');
        linkInput.value = '';
    }
}
</script>
@endsection