@extends('admin.content.layout')

@section('page_title', 'Videos')

@section('content_body')
    <div class="content-card">
        <h3>Add Video</h3>
        <form method="POST" action="{{ route('admin.content.videos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title *</label>
                <input type="text" name="title" required maxlength="255" value="{{ old('title') }}" placeholder="e.g. Community health outreach">
            </div>
            <div class="form-group">
                <label>Video Link *</label>
                <input type="url" name="url" required value="{{ old('url') }}" placeholder="https://www.youtube.com/watch?v=...">
                <small style="color:#888;">YouTube and Vimeo links embed on the site. Direct MP4, WebM, and Ogg video links play inline.</small>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label>Thumbnail (optional)</label>
                    <input type="file" name="thumbnail" accept="image/jpeg,image/png,image/webp">
                </div>
                <div class="form-group">
                    <label>Display Order</label>
                    <input type="number" name="order" min="0" placeholder="Added last by default">
                </div>
            </div>
            <button type="submit" class="btn">Add Video</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Video Library</h3>
        @forelse($videos as $video)
            <details style="background:#f8fafc; border-radius:8px; padding:15px; margin-bottom:10px;">
                <summary style="cursor:pointer; display:flex; align-items:center; gap:15px;">
                    @if($video->thumbnail)
                        <img src="{{ asset(ltrim($video->thumbnail, '/')) }}" alt="" style="width:90px; height:56px; object-fit:cover; border-radius:5px;">
                    @endif
                    <span style="flex:1; font-weight:600;">{{ $video->title }}</span>
                    <small>{{ $video->is_active ? 'Active' : 'Hidden' }}</small>
                </summary>
                <form method="POST" action="{{ route('admin.content.videos.update', $video->id) }}" enctype="multipart/form-data" style="margin-top:15px; background:white; padding:20px; border-radius:8px;">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" name="title" value="{{ $video->title }}" required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Video Link *</label>
                        <input type="url" name="url" value="{{ $video->url }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description">{{ $video->description }}</textarea>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Replace Thumbnail</label>
                            <input type="file" name="thumbnail" accept="image/jpeg,image/png,image/webp">
                        </div>
                        <div class="form-group">
                            <label>Display Order</label>
                            <input type="number" name="order" value="{{ $video->order }}" min="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="is_active" value="1" {{ $video->is_active ? 'checked' : '' }}> Show on homepage</label>
                    </div>
                    <button type="submit" class="btn btn-sm">Save Changes</button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Delete this video?')) document.getElementById('delete-video-{{ $video->id }}').submit();">Delete</button>
                </form>
                <form id="delete-video-{{ $video->id }}" method="POST" action="{{ route('admin.content.videos.delete', $video->id) }}" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </details>
        @empty
            <p style="color:#888;">No videos yet. Add a video link above to start the library.</p>
        @endforelse
    </div>
@endsection