@extends('layouts.app')

@section('title', 'Content Management')
@section('content')

@include('admin.content._styles')

@php
    $navItems = [
        ['url' => route('admin.content.dashboard'), 'label' => 'Dashboard', 'match' => 'admin/content'],
        ['url' => route('admin.content.settings'), 'label' => 'Site Text', 'match' => 'admin/content/settings'],
        ['url' => route('admin.content.hero'), 'label' => 'Hero Slides', 'match' => 'admin/content/hero'],
        ['url' => route('admin.content.stats'), 'label' => 'Impact Stats', 'match' => 'admin/content/stats'],
        ['url' => route('admin.content.programs'), 'label' => 'Programs', 'match' => 'admin/content/programs'],
        ['url' => route('admin.content.stories'), 'label' => 'Impact Stories', 'match' => 'admin/content/stories'],
        ['url' => route('admin.content.leaders'), 'label' => 'Leadership', 'match' => 'admin/content/leaders'],
        ['url' => route('admin.content.images'), 'label' => 'Site Images', 'match' => 'admin/content/images'],
    ];
    $currentPath = request()->path();
@endphp

<div class="admin-content-wrap">
    <div class="admin-content-header">
        <h1>@yield('page_title', 'Content Management')</h1>
        <div>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-sm">Back to Admin</a>
        </div>
    </div>

    <div class="admin-nav">
        @foreach($navItems as $item)
            <a href="{{ $item['url'] }}" class="{{ str_contains($currentPath, $item['match']) ? 'active' : '' }}">{{ $item['label'] }}</a>
        @endforeach
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    @yield('content_body')
</div>

@endsection
