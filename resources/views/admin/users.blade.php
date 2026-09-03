@extends('layouts.app')

@section('title', 'Manage Users')
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
        margin-right: 10px;
    }
    .btn-danger {
        background: #dc2626;
        color: white;
        padding: 6px 14px;
        border: none;
        border-radius: 6px;
        font-size: 0.85rem;
        cursor: pointer;
        text-decoration: none;
        font-weight: 600;
    }
    .btn-sm {
        background: #f59e0b;
        color: white;
        padding: 6px 14px;
        border: none;
        border-radius: 6px;
        font-size: 0.85rem;
        cursor: pointer;
        text-decoration: none;
        font-weight: 600;
        margin-right: 6px;
    }
    .users-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    }
    .users-table th, .users-table td {
        padding: 16px 20px;
        text-align: left;
        border-bottom: 1px solid #f3f4f6;
    }
    .users-table th {
        background: #f8fafc;
        color: #1e3a8a;
        font-weight: 700;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .users-table tr:hover {
        background: #f9fafb;
    }
    .badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
    }
    .badge-admin {
        background: #dbeafe;
        color: #1e40af;
    }
    .badge-user {
        background: #f3f4f6;
        color: #4b5563;
    }
    .add-user-form {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        margin-bottom: 40px;
    }
    .add-user-form h3 {
        color: #1e3a8a;
        margin-bottom: 20px;
    }
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #555;
        font-size: 0.9rem;
    }
    .form-group input, .form-group select {
        width: 100%;
        padding: 12px;
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        font-size: 1rem;
    }
    .btn-submit {
        background: #1e3a8a;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
    }
    .modal {
        display: none;
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }
    .modal.active {
        display: flex;
    }
    .modal-content {
        background: white;
        border-radius: 16px;
        padding: 30px;
        width: 90%;
        max-width: 400px;
    }
    .modal-content h3 {
        color: #1e3a8a;
        margin-bottom: 20px;
    }
</style>

<div class="container" style="padding: 110px 20px 60px;">
    <div class="admin-header">
        <h1>Manage Users</h1>
        <div>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: #dc2626; color: white; padding: 10px 20px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">Logout</button>
            </form>
        </div>
    </div>

    @if(session('success'))
        <div style="background: #dcfce7; color: #166534; padding: 14px; border-radius: 10px; margin-bottom: 25px;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="background: #fee2e2; color: #991b1b; padding: 14px; border-radius: 10px; margin-bottom: 25px;">{{ session('error') }}</div>
    @endif

    <div class="add-user-form">
        <h3>Add New User</h3>
        <form method="POST" action="{{ route('admin.users.add') }}">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required placeholder="john@example.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" required placeholder="Min 6 characters">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text" name="password_confirmation" required placeholder="Repeat password">
                </div>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">Add User</button>
        </form>
    </div>

    <div style="overflow-x: auto;">
        <table class="users-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge {{ $user->role === 'admin' ? 'badge-admin' : 'badge-user' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td>{{ $user->created_at->format('M d, Y') }}</td>
                        <td>
                            <button class="btn-sm" onclick="openResetModal({{ $user->id }}, '{{ $user->name }}')">Reset Password</button>
                            @if($user->id !== auth()->id())
                                <form method="POST" action="{{ route('admin.users.delete', $user->id) }}" style="display: inline;" onsubmit="return confirm('Delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top: 30px;">
        {{ $users->links() }}
    </div>
</div>

<div id="resetModal" class="modal" onclick="if(event.target===this)closeResetModal()">
    <div class="modal-content">
        <h3>Reset Password</h3>
        <p id="resetUserName" style="color:#777; margin-bottom:20px;"></p>
        <form method="POST" id="resetForm">
            @csrf
            <div class="form-group">
                <label>New Password</label>
                <input type="text" name="password" required placeholder="Min 6 characters" style="width:100%; padding:12px; border:2px solid #e5e7eb; border-radius:8px;">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="text" name="password_confirmation" required placeholder="Repeat password" style="width:100%; padding:12px; border:2px solid #e5e7eb; border-radius:8px;">
            </div>
            <div style="display:flex; gap:10px; margin-top:20px;">
                <button type="submit" class="btn-submit">Reset Password</button>
                <button type="button" onclick="closeResetModal()" style="background:#9ca3af; color:white; padding:12px 24px; border:none; border-radius:8px; cursor:pointer; font-weight:bold;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openResetModal(userId, userName) {
        document.getElementById('resetForm').action = '/admin/users/' + userId + '/reset-password';
        document.getElementById('resetUserName').textContent = 'Resetting password for: ' + userName;
        document.getElementById('resetModal').classList.add('active');
    }
    function closeResetModal() {
        document.getElementById('resetModal').classList.remove('active');
    }
</script>

@endsection
