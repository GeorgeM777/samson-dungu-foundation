@extends('admin.content.layout')

@section('page_title', 'Programs (What We Do)')

@section('content_body')
    <div class="content-card">
        <h3>Add New Program</h3>
        <form method="POST" action="{{ route('admin.content.programs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label>Title *</label>
                    <input type="text" name="title" required placeholder="e.g. Education Support">
                </div>
                <div class="form-group">
                    <label>Icon (Font Awesome class)</label>
                    <input type="text" name="icon" placeholder="e.g. fas fa-graduation-cap">
                </div>
            </div>
            <div class="form-group">
                <label>Short Description *</label>
                <textarea name="short_description" required placeholder="One paragraph description..."></textarea>
            </div>
            <div class="form-group">
                <label>Bullet Points (one per line)</label>
                <textarea name="bullets" placeholder="Primary & secondary school scholarships&#10;School supplies distribution&#10;After-school tutoring programs"></textarea>
            </div>
            <div class="form-group">
                <label>Statistics (one per line - format: Number | Label)</label>
                <textarea name="stats" placeholder="100+ | Children Educated&#10;12 | Schools Partnered"></textarea>
            </div>
            <div class="form-group">
                <label>Background Image</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="order" value="0" min="0">
            </div>
            <button type="submit" class="btn">Add Program</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Current Programs</h3>
        @forelse($programs as $program)
            <details style="background: #f8fafc; border-radius: 8px; padding: 15px; margin-bottom: 10px;">
                <summary style="cursor: pointer; display: flex; align-items: center; gap: 15px;">
                    @if($program->image)
                        <img src="{{ $program->image }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                    @endif
                    <span style="flex: 1; font-weight: 600; color: #1e3a8a;">{{ $program->title }}</span>
                </summary>
                <form method="POST" action="{{ route('admin.content.programs.update', $program->id) }}" enctype="multipart/form-data" style="margin-top: 15px; background: white; padding: 20px; border-radius: 8px;">
                    @csrf
                    @method('PUT')
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $program->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" name="icon" value="{{ $program->icon }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="short_description" required>{{ $program->short_description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Bullet Points (one per line)</label>
                        <textarea name="bullets">{{ is_array($program->bullets) ? implode("\n", $program->bullets) : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Stats (one per line - Number | Label)</label>
                        <textarea name="stats">{{ is_array($program->stats) ? implode("\n", $program->stats) : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Replace Image</label>
                        <input type="file" name="image" accept="image/*">
                        @if($program->image)
                            <small style="display:block; margin-top:5px;">Current: <img src="{{ $program->image }}" style="max-width: 100px; max-height: 60px; border-radius: 4px;"></small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <input type="number" name="order" value="{{ $program->order }}" min="0">
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="is_active" value="1" {{ $program->is_active ? 'checked' : '' }}> Active (visible on site)</label>
                    </div>
                    <button type="submit" class="btn btn-sm">Save</button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Delete?')) document.getElementById('del-prog-{{ $program->id }}').submit();">Delete</button>
                </form>
                <form id="del-prog-{{ $program->id }}" method="POST" action="{{ route('admin.content.programs.delete', $program->id) }}" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </details>
        @empty
            <p style="color: #888;">No programs yet. Add your first program above.</p>
        @endforelse
    </div>
@endsection
