@extends('admin.content.layout')

@section('page_title', 'Site Images')

@section('content_body')
    <div class="content-card">
        <h3>Upload New Image</h3>
        <form method="POST" action="{{ route('admin.content.images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label>Reference Key *</label>
                    <input type="text" name="key" required placeholder="e.g. home-hero-1, partner-bushenyi">
                    <small style="color: #888;">A unique identifier used in code to reference this image.</small>
                </div>
                <div class="form-group">
                    <label>Display Label *</label>
                    <input type="text" name="label" required placeholder="e.g. Home Hero Slide 1">
                </div>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label>Group</label>
                    <select name="group">
                        <option value="general">General</option>
                        <option value="hero">Hero</option>
                        <option value="programs">Programs</option>
                        <option value="schools">Schools</option>
                        <option value="stories">Stories</option>
                        <option value="leaders">Leaders</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Image File *</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>
            </div>
            <div class="form-group">
                <label>Description (optional)</label>
                <input type="text" name="description" placeholder="Where this image is used on the site">
            </div>
            <button type="submit" class="btn">Upload Image</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Image Library</h3>
        @forelse($images as $image)
            <div class="item-row">
                <img src="{{ asset(ltrim($image->image, '/')) }}" alt="{{ $image->label }}">
                <div class="item-info">
                    <strong>{{ $image->label }}</strong>
                    <small style="display: block; color: #666;">Key: <code>{{ $image->key }}</code></small>
                    <small style="display: block; color: #888;">{{ $image->group }} @if($image->description) · {{ $image->description }} @endif</small>
                </div>
                <div class="item-actions">
                    <details>
                        <summary class="btn btn-sm" style="display: inline-block;">Replace</summary>
                        <form method="POST" action="{{ route('admin.content.images.update', $image->id) }}" enctype="multipart/form-data" style="margin-top: 15px; min-width: 320px; background: white; padding: 15px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" name="label" value="{{ $image->label }}" required>
                            </div>
                            <div class="form-group">
                                <label>Key</label>
                                <input type="text" name="key" value="{{ $image->key }}" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{ $image->description }}">
                            </div>
                            <div class="form-group">
                                <label>Replace Image File</label>
                                <input type="file" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-sm">Save</button>
                        </form>
                    </details>
                    <form method="POST" action="{{ route('admin.content.images.delete', $image->id) }}" style="display:inline;" onsubmit="return confirm('Delete this image?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p style="color: #888;">No images yet. Upload your first image above.</p>
        @endforelse
    </div>
@endsection