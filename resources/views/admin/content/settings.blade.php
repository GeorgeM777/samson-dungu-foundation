@extends('admin.content.layout')

@section('page_title', 'Site Text & Settings')

@section('content_body')
    <form method="POST" action="{{ route('admin.content.settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @foreach($settings as $group => $items)
            <div class="content-card">
                <h3>{{ ucfirst($group) }}</h3>
                @foreach($items as $setting)
                    <div class="form-group">
                        <label>{{ $setting->key === 'founder_portrait' ? 'Founder Portrait or PDF' : $setting->label }}</label>
                        @if($setting->type === 'image')
                            <input type="file" name="{{ $setting->key }}" accept="image/jpeg,image/png,image/webp,application/pdf,.pdf">
                            @if($setting->key === 'founder_portrait')
                                <small style="display:block; color:#888;">Upload a portrait photo or a PDF tribute document (up to 10 MB). Uploading a new file replaces the current one.</small>
                            @endif
                            @if($setting->value)
                                @if($setting->key === 'founder_portrait' && strtolower(pathinfo($setting->value, PATHINFO_EXTENSION)) === 'pdf')
                                    <a href="{{ asset(ltrim($setting->value, '/')) }}" target="_blank" rel="noopener noreferrer" style="display:inline-block; margin-top:10px;">View current founder PDF</a>
                                @else
                                    <img src="{{ asset(ltrim($setting->value, '/')) }}" alt="Current {{ strtolower($setting->label) }}" style="display:block; width:140px; height:160px; object-fit:cover; margin-top:10px; border-radius:6px;">
                                @endif
                            @endif
                        @elseif($setting->type === 'textarea')
                            <textarea name="{{ $setting->key }}">{{ $setting->value }}</textarea>
                        @else
                            <input type="text" name="{{ $setting->key }}" value="{{ $setting->value }}">
                        @endif
                        @if($setting->description)
                            <small style="color: #888;">{{ $setting->description }}</small>
                        @endif
                    </div>
                @endforeach
            </div>
        @endforeach

        <button type="submit" class="btn">Save All Changes</button>
    </form>
@endsection
