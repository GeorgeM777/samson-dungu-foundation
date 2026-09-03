@extends('admin.content.layout')

@section('page_title', 'Hero Slides')

@section('content_body')
    <div class="content-card">
        <h3>Add New Slide</h3>
        <form method="POST" action="{{ route('admin.content.hero.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label>Title *</label>
                    <input type="text" name="title" required placeholder="e.g. Honoring Legacy, Transforming Lives">
                </div>
                <div class="form-group">
                    <label>Subtitle</label>
                    <input type="text" name="subtitle" placeholder="e.g. Continuing our mission of compassion">
                </div>
            </div>
            <div class="form-group">
                <label>Image * (recommended: 1920×1080px)</label>
                <input type="file" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn">Add Slide</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Current Slides</h3>
        @forelse($slides as $slide)
            <div class="item-row">
                <img src="{{ $slide->image }}" alt="{{ $slide->title }}">
                <div class="item-info">
                    <strong>{{ $slide->title }}</strong>
                    <small style="color: #666;">{{ $slide->subtitle }}</small>
                </div>
                <div class="item-actions">
                    <details>
                        <summary class="btn btn-sm" style="display: inline-block;">Edit</summary>
                        <form method="POST" action="{{ route('admin.content.hero.update', $slide->id) }}" enctype="multipart/form-data" style="margin-top: 15px; min-width: 350px; background: white; padding: 15px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ $slide->title }}" required>
                            </div>
                            <div class="form-group">
                                <label>Subtitle</label>
                                <input type="text" name="subtitle" value="{{ $slide->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label>Replace Image</label>
                                <input type="file" name="image" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label>Display Order</label>
                                <input type="number" name="order" value="{{ $slide->order }}" min="0">
                            </div>
                            <button type="submit" class="btn btn-sm">Save</button>
                        </form>
                    </details>
                    <form method="POST" action="{{ route('admin.content.hero.delete', $slide->id) }}" style="display:inline;" onsubmit="return confirm('Delete this slide?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p style="color: #888;">No slides yet. Add your first slide above.</p>
        @endforelse
    </div>
@endsection
