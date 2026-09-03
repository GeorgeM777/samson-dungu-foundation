@extends('admin.content.layout')

@section('page_title', 'Content Management Dashboard')

@section('content_body')
    <div class="stats-grid">
        <div class="stat-tile">
            <span class="num">{{ $stats['slides'] }}</span>
            <div class="lbl">Hero Slides</div>
        </div>
        <div class="stat-tile">
            <span class="num">{{ $stats['stats'] }}</span>
            <div class="lbl">Impact Stats</div>
        </div>
        <div class="stat-tile">
            <span class="num">{{ $stats['programs'] }}</span>
            <div class="lbl">Programs</div>
        </div>
        <div class="stat-tile">
            <span class="num">{{ $stats['stories'] }}</span>
            <div class="lbl">Impact Stories</div>
        </div>
        <div class="stat-tile">
            <span class="num">{{ $stats['leaders'] }}</span>
            <div class="lbl">Leaders</div>
        </div>
        <div class="stat-tile">
            <span class="num">{{ $stats['images'] }}</span>
            <div class="lbl">Site Images</div>
        </div>
        <div class="stat-tile">
            <span class="num">{{ $stats['settings'] }}</span>
            <div class="lbl">Text Settings</div>
        </div>
    </div>

    <div class="content-card">
        <h3>Quick Actions</h3>
        <p style="color: #666; margin-bottom: 20px;">Update the most important content on your site. Use the navigation above to manage specific sections.</p>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="{{ route('admin.content.settings') }}" class="btn">Edit Site Text</a>
            <a href="{{ route('admin.content.hero') }}" class="btn">Manage Hero Slides</a>
            <a href="{{ route('admin.content.images') }}" class="btn">Upload Images</a>
        </div>
    </div>

    <div class="content-card">
        <h3>How to Use</h3>
        <ul style="line-height: 1.8; color: #555; padding-left: 20px;">
            <li><strong>Site Text</strong> — change contact info, mission text, footer details, and other important text on the site.</li>
            <li><strong>Hero Slides</strong> — update the rotating slides on the homepage.</li>
            <li><strong>Impact Stats</strong> — update the numbers shown on the homepage (100+, 70, 20+, 12).</li>
            <li><strong>Programs</strong> — add, edit, or remove the 6 program cards on the "What We Do" page.</li>
            <li><strong>Impact Stories</strong> — manage the success story cards.</li>
            <li><strong>Leadership</strong> — add or update team member profiles and photos.</li>
            <li><strong>Site Images</strong> — upload replacement images by their reference key.</li>
        </ul>
    </div>
@endsection
