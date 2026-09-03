@extends('admin.content.layout')

@section('page_title', 'Impact Stories')

@section('content_body')
    <div class="content-card">
        <h3>Add New Story</h3>
        <form method="POST" action="{{ route('admin.content.stories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title *</label>
                <input type="text" name="title" required placeholder="e.g. From Orphan to Graduate">
            </div>
            <div class="form-group">
                <label>Description *</label>
                <textarea name="description" required placeholder="The success story..."></textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label>Read More Link (optional)</label>
                <input type="text" name="link" placeholder="/blog#story">
            </div>
            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="order" value="0" min="0">
            </div>
            <button type="submit" class="btn">Add Story</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Current Stories</h3>
        @forelse($stories as $story)
            <details style="background: #f8fafc; border-radius: 8px; padding: 15px; margin-bottom: 10px;">
                <summary style="cursor: pointer; display: flex; align-items: center; gap: 15px;">
                    @if($story->image)
                        <img src="{{ $story->image }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                    @endif
                    <span style="flex: 1; font-weight: 600; color: #1e3a8a;">{{ $story->title }}</span>
                </summary>
                <form method="POST" action="{{ route('admin.content.stories.update', $story->id) }}" enctype="multipart/form-data" style="margin-top: 15px; background: white; padding: 20px; border-radius: 8px;">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $story->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" required>{{ $story->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Replace Image</label>
                        <input type="file" name="image" accept="image/*">
                        @if($story->image)
                            <div class="upload-preview-wrap active" style="display: inline-block;">
                                <span class="preview-label">Current Image:</span>
                                <img src="{{ asset(ltrim($story->image, '/')) }}">
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" value="{{ $story->link }}">
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <input type="number" name="order" value="{{ $story->order }}" min="0">
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="is_active" value="1" {{ $story->is_active ? 'checked' : '' }}> Active</label>
                    </div>
                    <button type="submit" class="btn btn-sm">Save</button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Delete?')) document.getElementById('del-story-{{ $story->id }}').submit();">Delete</button>
                </form>
                <form id="del-story-{{ $story->id }}" method="POST" action="{{ route('admin.content.stories.delete', $story->id) }}" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </details>
        @empty
            <p style="color: #888;">No stories yet. Add your first story above.</p>
        @endforelse
    </div>
@endsection
