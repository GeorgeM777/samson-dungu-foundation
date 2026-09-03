<style>
    .admin-content-wrap {
        padding: 110px 20px 60px;
        max-width: 1200px;
        margin: 0 auto;
    }
    .admin-content-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e5e7eb;
        flex-wrap: wrap;
        gap: 15px;
    }
    .admin-content-header h1 {
        color: #1e3a8a;
        font-size: 1.8rem;
    }
    .admin-nav {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 25px;
    }
    .admin-nav a {
        background: white;
        color: #1e3a8a;
        padding: 8px 16px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 600;
        border: 1px solid #e5e7eb;
        transition: all 0.2s;
    }
    .admin-nav a:hover, .admin-nav a.active {
        background: #1e3a8a;
        color: white;
    }
    .content-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        margin-bottom: 20px;
    }
    .content-card h3 {
        color: #1e3a8a;
        margin-bottom: 15px;
        font-size: 1.1rem;
    }
    .form-grid {
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
        color: #444;
        font-size: 0.9rem;
    }
    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group input[type="number"],
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px 12px;
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        font-size: 0.95rem;
    }
    .form-group textarea {
        min-height: 100px;
        font-family: inherit;
    }
    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: #1e3a8a;
    }
    .btn {
        display: inline-block;
        background: #1e3a8a;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        font-size: 0.9rem;
    }
    .btn:hover { background: #003388; }
    .btn-sm { padding: 6px 12px; font-size: 0.85rem; }
    .btn-danger { background: #dc2626; }
    .btn-danger:hover { background: #b91c1c; }
    .btn-success { background: #16a34a; }
    .btn-success:hover { background: #15803d; }
    .alert {
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .alert-success { background: #dcfce7; color: #166534; }
    .alert-error { background: #fee2e2; color: #991b1b; }
    .item-list {
        margin-top: 20px;
    }
    .item-row {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px;
        background: #f8fafc;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .item-row img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
    }
    .item-row .item-info {
        flex: 1;
    }
    .item-row .item-info strong {
        display: block;
        color: #1e3a8a;
        margin-bottom: 4px;
    }
    .item-row .item-actions {
        display: flex;
        gap: 8px;
    }
    .image-preview {
        max-width: 200px;
        max-height: 120px;
        margin-top: 10px;
        border-radius: 8px;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
        margin-bottom: 30px;
    }
    .stat-tile {
        background: white;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .stat-tile .num {
        font-size: 2rem;
        font-weight: 800;
        color: #1e3a8a;
        display: block;
    }
    .stat-tile .lbl {
        color: #666;
        font-size: 0.85rem;
    }
    details {
        background: #f8fafc;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 10px;
    }
    details summary {
        cursor: pointer;
        font-weight: 600;
        color: #1e3a8a;
    }
</style>
