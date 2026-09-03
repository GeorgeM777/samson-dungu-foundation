@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

<style>
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e5e7eb;
    }
    .admin-header h1 {
        color: #1e3a8a;
        font-size: 2rem;
    }
    .admin-header a {
        background: #1e3a8a;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }
    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        text-align: center;
    }
    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: #1e3a8a;
        display: block;
    }
    .stat-label {
        color: #777;
        font-size: 0.95rem;
        margin-top: 8px;
    }
</style>

<div class="container" style="padding: 110px 20px 60px;">
    <div class="admin-header">
        <h1>Admin Dashboard</h1>
        <div>
            <a href="{{ route('admin.users') }}" style="background: white; color: #1e3a8a; border: 2px solid #1e3a8a; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; margin-right: 10px;">Manage Users</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: #dc2626; color: white; padding: 10px 20px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">Logout</button>
            </form>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <span class="stat-number">{{ $totalUsers }}</span>
            <div class="stat-label">Total Users</div>
        </div>
        <div class="stat-card">
            <span class="stat-number">{{ $adminCount }}</span>
            <div class="stat-label">Admins</div>
        </div>
        <div class="stat-card">
            <span class="stat-number">{{ $regularUsers }}</span>
            <div class="stat-label">Regular Users</div>
        </div>
    </div>

    <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); text-align: center;">
        <h2 style="color: #1e3a8a; margin-bottom: 15px;">Welcome to the Admin Panel</h2>
        <p style="color: #777; font-size: 1.05rem; line-height: 1.7; max-width: 600px; margin: 0 auto 25px;">
            Manage users and easily update the website's content, text, and images.
        </p>
        <a href="{{ route('admin.content.dashboard') }}" style="display: inline-block; background: #1e3a8a; color: white; padding: 14px 32px; border-radius: 8px; text-decoration: none; font-weight: 600; box-shadow: 0 5px 15px rgba(30,58,138,0.2);">
            <i class="fas fa-edit"></i> Open Content Manager
        </a>
    </div>
</div>

@endsection
