@extends('admin.content.layout')

@section('page_title', 'Leadership Team')

@section('content_body')
    <div class="content-card">
        <h3>Add New Team Member</h3>
        <form method="POST" action="{{ route('admin.content.leaders.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Position *</label>
                    <input type="text" name="position" required placeholder="e.g. Executive Director">
                </div>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label>Bio *</label>
                <textarea name="bio" required placeholder="Brief biography..."></textarea>
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" accept="image/*">
            </div>
            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="order" value="0" min="0">
            </div>
            <button type="submit" class="btn">Add Team Member</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Current Team Members</h3>
        @forelse($leaders as $leader)
            <details style="background: #f8fafc; border-radius: 8px; padding: 15px; margin-bottom: 10px;">
                <summary style="cursor: pointer; display: flex; align-items: center; gap: 15px;">
                    @if($leader->photo)
                        <img src="{{ asset('storage/' . ltrim(str_replace('/storage/', '', $leader->photo), '/')) }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    @endif
                    <span style="flex: 1;">
                        <strong style="display: block; color: #1e3a8a;">{{ $leader->name }}</strong>
                        <small style="color: #666;">{{ $leader->position }}</small>
                    </span>
                </summary>
                <form method="POST" action="{{ route('admin.content.leaders.update', $leader->id) }}" enctype="multipart/form-data" style="margin-top: 15px; background: white; padding: 20px; border-radius: 8px;">
                    @csrf
                    @method('PUT')
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $leader->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" value="{{ $leader->position }}" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ $leader->phone }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $leader->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" required>{{ $leader->bio }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Replace Photo</label>
                        <input type="file" name="photo" accept="image/*">
                        @if($leader->photo)
                            <div class="upload-preview-wrap active" style="display: inline-block;">
                                <span class="preview-label">Current Photo:</span>
                                <img src="{{ asset('storage/' . ltrim(str_replace('/storage/', '', $leader->photo), '/')) }}">
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <input type="number" name="order" value="{{ $leader->order }}" min="0">
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="is_active" value="1" {{ $leader->is_active ? 'checked' : '' }}> Active</label>
                    </div>
                    <button type="submit" class="btn btn-sm">Save</button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Delete?')) document.getElementById('del-leader-{{ $leader->id }}').submit();">Delete</button>
                </form>
                <form id="del-leader-{{ $leader->id }}" method="POST" action="{{ route('admin.content.leaders.delete', $leader->id) }}" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </details>
        @empty
            <p style="color: #888;">No team members yet. Add your first team member above.</p>
        @endforelse
    </div>
@endsection
