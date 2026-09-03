@extends('admin.content.layout')

@section('page_title', 'Impact Statistics')

@section('content_body')
    <div class="content-card">
        <h3>Add New Stat</h3>
        <form method="POST" action="{{ route('admin.content.stats.store') }}">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label>Number *</label>
                    <input type="text" name="number" required placeholder="e.g. 100+">
                </div>
                <div class="form-group">
                    <label>Label *</label>
                    <input type="text" name="label" required placeholder="e.g. Children Educated">
                </div>
            </div>
            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="order" value="0" min="0">
            </div>
            <button type="submit" class="btn">Add Stat</button>
        </form>
    </div>

    <div class="content-card">
        <h3>Current Stats</h3>
        @forelse($stats as $stat)
            <form method="POST" action="{{ route('admin.content.stats.update', $stat->id) }}" class="item-row" style="display: flex; align-items: center; gap: 15px; padding: 15px; background: #f8fafc; border-radius: 8px; margin-bottom: 10px;">
                @csrf
                @method('PUT')
                <div class="form-group" style="margin: 0; flex: 1;">
                    <input type="text" name="number" value="{{ $stat->number }}" required style="font-weight: bold; font-size: 1.2rem;">
                </div>
                <div class="form-group" style="margin: 0; flex: 2;">
                    <input type="text" name="label" value="{{ $stat->label }}" required>
                </div>
                <div class="form-group" style="margin: 0;">
                    <input type="number" name="order" value="{{ $stat->order }}" min="0" style="width: 70px;">
                </div>
                <button type="submit" class="btn btn-sm">Save</button>
                <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Delete?')) document.getElementById('del-stat-{{ $stat->id }}').submit();">Delete</button>
            </form>
            <form id="del-stat-{{ $stat->id }}" method="POST" action="{{ route('admin.content.stats.delete', $stat->id) }}" style="display:none;">
                @csrf
                @method('DELETE')
            </form>
        @empty
            <p style="color: #888;">No stats yet. Add your first stat above.</p>
        @endforelse
    </div>
@endsection
