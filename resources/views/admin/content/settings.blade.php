@extends('admin.content.layout')

@section('page_title', 'Site Text & Settings')

@section('content_body')
    <form method="POST" action="{{ route('admin.content.settings.update') }}">
        @csrf
        @method('PUT')

        @foreach($settings as $group => $items)
            <div class="content-card">
                <h3>{{ ucfirst($group) }}</h3>
                @foreach($items as $setting)
                    <div class="form-group">
                        <label>{{ $setting->label }}</label>
                        @if($setting->type === 'textarea')
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
