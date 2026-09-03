@extends('layouts.app')

@section('title', 'Admin Sign In')
@section('content')

<section style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 40px 20px; padding-top: 110px;">
    <div style="background: white; border-radius: 20px; padding: 50px; width: 100%; max-width: 420px; box-shadow: 0 25px 60px rgba(0,0,0,0.2);">
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="font-size: 3rem; margin-bottom: 10px;">🔒</div>
            <h1 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 8px;">Admin Sign In</h1>
            <p style="color: #777; font-size: 0.95rem;">Restricted area. Authorized personnel only.</p>
        </div>

        @if(session('error'))
            <div style="background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 10px; margin-bottom: 20px; text-align: center;">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div style="background: #dcfce7; color: #166534; padding: 12px; border-radius: 10px; margin-bottom: 20px; text-align: center;">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #444;">Email Address</label>
                <input type="email" name="email" required value="{{ old('email') }}" style="width: 100%; padding: 14px; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='#e5e7eb'">
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #444;">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 14px; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='#e5e7eb'">
            </div>

            <button type="submit" style="width: 100%; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: white; padding: 14px; border: none; border-radius: 10px; font-size: 1.05rem; font-weight: bold; cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 25px rgba(30,58,138,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                Sign In
            </button>
        </form>

        <div style="text-align: center; margin-top: 25px;">
            <a href="/" style="color: #3b82f6; text-decoration: none; font-size: 0.9rem;">← Back to Home</a>
        </div>
    </div>
</section>

@endsection
