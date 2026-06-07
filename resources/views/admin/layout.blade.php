<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. SANNO Admin — @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Inter', sans-serif; background: #f4f5f7; }

        /* ── Sidebar ── */
        .admin-sidebar {
            position: fixed;
            top: 0; left: 0;
            width: 240px;
            height: 100vh;
            background: #1a1a1a;
            display: flex;
            flex-direction: column;
            z-index: 100;
            overflow-y: auto;
        }

        .sidebar-logo {
            padding: 24px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-logo img {
            height: 32px;
        }

        .sidebar-nav {
            padding: 16px 0;
            flex: 1;
        }

        .sidebar-section {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.3);
            padding: 16px 20px 6px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 20px;
            color: rgba(255,255,255,0.55);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            transition: background 0.2s, color 0.2s;
            border-left: 3px solid transparent;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.06);
            color: rgba(255,255,255,0.9);
            text-decoration: none;
        }

        .sidebar-link.active {
            background: rgba(192, 40, 28, 0.15);
            color: #fff;
            border-left-color: #c0281c;
        }

        .sidebar-link i {
            width: 18px;
            text-align: center;
            font-size: 0.9rem;
        }

        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-user {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.5);
            margin-bottom: 10px;
        }

        .sidebar-user strong {
            display: block;
            color: rgba(255,255,255,0.85);
            font-size: 0.85rem;
        }

        .btn-logout {
            width: 100%;
            padding: 8px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.2);
            color: rgba(255,255,255,0.6);
            border-radius: 6px;
            font-size: 0.82rem;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
        }

        .btn-logout:hover {
            background: rgba(255,255,255,0.08);
            color: #fff;
            border-color: rgba(255,255,255,0.4);
        }

        /* ── Main content ── */
        .admin-main {
            margin-left: 240px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .admin-topbar {
            background: #fff;
            border-bottom: 1px solid #e8e8e8;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-topbar h1 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111;
            margin: 0;
        }

        .admin-content {
            padding: 32px;
            flex: 1;
        }

        /* ── Cards ── */
        .admin-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.07);
            padding: 24px;
            margin-bottom: 24px;
        }

        /* ── Alerts ── */
        .alert-success {
            background: #f0fdf4;
            border: 1px solid #86efac;
            color: #166534;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.88rem;
        }

        /* ── Buttons ── */
        .btn-primary-red {
            background: #c0281c;
            color: #fff;
            border: none;
            padding: 9px 20px;
            border-radius: 8px;
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: background 0.2s;
        }

        .btn-primary-red:hover {
            background: #a01e14;
            color: #fff;
            text-decoration: none;
        }

        /* ── Table ── */
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.88rem;
        }

        .admin-table th {
            background: #f8f8f8;
            padding: 12px 16px;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #888;
            border-bottom: 1px solid #eee;
        }

        .admin-table td {
            padding: 14px 16px;
            border-bottom: 1px solid #f0f0f0;
            color: #333;
            vertical-align: middle;
        }

        .admin-table tr:last-child td { border-bottom: none; }
        .admin-table tr:hover td { background: #fafafa; }

        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .badge-active   { background: #dcfce7; color: #166534; }
        .badge-inactive { background: #f3f4f6; color: #6b7280; }

        /* ── Form ── */
        .form-label {
            font-size: 0.82rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 6px;
        }

        .form-control, .form-select {
            border: 1.5px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.9rem;
            transition: border-color 0.2s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #c0281c;
            box-shadow: none;
            outline: none;
        }
    </style>
</head>
<body>

    <!-- ── Sidebar ───────────────────────────── -->
    <aside class="admin-sidebar">
        <div class="sidebar-logo">
            <img src="{{ asset('/images/pt_sanno.png') }}" alt="PT. SANNO">
        </div>

        <nav class="sidebar-nav">
            <div class="sidebar-section">Content</div>

            <!--<a href="{{ route('admin.careers.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.careers.*') ? 'active' : '' }}">
                <i class="fas fa-briefcase"></i> Careers
            </a>-->

            <a href="{{ route('admin.projects.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                <i class="fas fa-folder-open"></i> Projects
            </a>

            <a href="{{ route('admin.products.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="fas fa-box"></i> Products
            </a>

            <a href="{{ route('admin.news.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
                <i class="fas fa-newspaper"></i> News
            </a>

            <div class="sidebar-section">Site</div>

            <a href="{{ route('show.home') }}" target="_blank"
               class="sidebar-link">
                <i class="fas fa-external-link-alt"></i> View Website
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="sidebar-user">
                <strong>{{ auth()->user()->name }}</strong>
                {{ auth()->user()->email }}
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- ── Main ──────────────────────────────── -->
    <main class="admin-main">
        <div class="admin-topbar">
            <h1>@yield('title')</h1>
            @yield('topbar-actions')
        </div>

        <div class="admin-content">
            @if(session('success'))
                <div class="alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert-error" style="background:#fee2e2; border:1px solid #fecaca; color:#991b1b; padding:12px 16px; border-radius:8px; margin-bottom:16px;">
                    <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>

</body>
</html>