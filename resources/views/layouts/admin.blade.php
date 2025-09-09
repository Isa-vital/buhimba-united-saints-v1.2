<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - {{ config('app.name', 'Buhimba United Saints FC') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Admin Styles -->
    <style>
        :root {
            /* Saints Green Theme for Admin */
            --bs-primary: #1B5E20;
            --bs-primary-rgb: 27, 94, 32;
            --bs-primary-light: #4CAF50;
            --bs-primary-dark: #0D3309;
            --bs-secondary: #455A64;
            --bs-accent: #FF9800;
            --bs-light: #F8F9FA;
            --bs-dark: #212529;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f8f9fa;
        }
        
        /* Admin Navigation */
        .bg-club-green {
            background: linear-gradient(90deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%) !important;
        }
        
        .navbar-brand {
            font-weight: 700 !important;
            color: white !important;
        }
        
        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            color: white !important;
            background-color: rgba(255,255,255,0.1);
            border-radius: 6px;
        }
        
        /* Sidebar */
        .sidebar {
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
            border-right: 1px solid #e3e6f0;
        }
        
        .sidebar .nav-link {
            color: #5a5c69;
            font-weight: 500;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin: 0.25rem 0.5rem;
            transition: all 0.3s ease;
        }
        
        .sidebar .nav-link:hover {
            background-color: #f8f9fc;
            color: var(--bs-primary);
            transform: translateX(5px);
        }
        
        .sidebar .nav-link.active {
            background: linear-gradient(90deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(27, 94, 32, 0.3);
        }
        
        .sidebar-heading {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #858796;
            margin-top: 1.5rem;
        }
        
        /* Cards */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, #f8f9fc 0%, #ffffff 100%);
            border-bottom: 2px solid var(--bs-primary);
            font-weight: 600;
            color: var(--bs-primary);
            border-radius: 15px 15px 0 0 !important;
        }
        
        /* Buttons */
        .btn-club-primary,
        .btn-primary {
            background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%);
            border: none;
            font-weight: 600;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(27, 94, 32, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-club-primary:hover,
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--bs-primary-dark) 0%, var(--bs-primary) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(27, 94, 32, 0.4);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            border-radius: 10px;
        }
        
        .btn-info {
            background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);
            border: none;
            border-radius: 10px;
        }
        
        .btn-warning {
            background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%);
            border: none;
            border-radius: 10px;
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #e83e8c 100%);
            border: none;
            border-radius: 10px;
        }
        
        /* Tables */
        .table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }
        
        .table thead th {
            background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%);
            color: white;
            font-weight: 600;
            border: none;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.5px;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fc;
        }
        
        /* Stats Cards */
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border-left: 5px solid var(--bs-primary);
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--bs-primary);
        }
        
        .stats-label {
            color: var(--bs-secondary);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.875rem;
        }
        
        /* Form Controls */
        .form-control:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.2rem rgba(27, 94, 32, 0.25);
        }
        
        .form-select:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.2rem rgba(27, 94, 32, 0.25);
        }
        
        /* Icon Circles */
        .icon-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }
        
        /* Badges */
        .badge {
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 50px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                position: static !important;
                height: auto !important;
            }
            
            .main-content {
                margin-left: 0 !important;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-light">
    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-club-green shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
                <i class="bi bi-shield-check me-2"></i>Admin Dashboard
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="adminNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" target="_blank">
                            <i class="bi bi-eye me-1"></i>View Website
                        </a>
                    </li>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-white sidebar shadow-sm">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                <i class="bi bi-speedometer2 me-2"></i>Dashboard
                            </a>
                        </li>
                        
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Team Management</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.players.*') ? 'active' : '' }}" href="{{ route('admin.players.index') }}">
                                <i class="bi bi-people me-2"></i>Players
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.staff.*') ? 'active' : '' }}" href="{{ route('admin.staff.index') }}">
                                <i class="bi bi-person-badge me-2"></i>Staff & Coaches
                            </a>
                        </li>
                        
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Matches</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.fixtures.*') ? 'active' : '' }}" href="{{ route('admin.fixtures.index') }}">
                                <i class="bi bi-calendar-event me-2"></i>Fixtures
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.results.*') ? 'active' : '' }}" href="{{ route('admin.results.index') }}">
                                <i class="bi bi-trophy me-2"></i>Results
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.league-table.*') ? 'active' : '' }}" href="#">
                                <i class="bi bi-table me-2"></i>League Table
                            </a>
                        </li>
                        
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Content</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                                <i class="bi bi-newspaper me-2"></i>News & Media
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.sponsors.*') ? 'active' : '' }}" href="{{ route('admin.sponsors.index') }}">
                                <i class="bi bi-building me-2"></i>Sponsors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.merchandise.*') ? 'active' : '' }}" href="{{ route('admin.merchandise.index') }}">
                                <i class="bi bi-shop me-2"></i>Merchandise
                            </a>
                        </li>
                        
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>System</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.images') }}">
                                <i class="bi bi-images me-2"></i>Image Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                                <i class="bi bi-people me-2"></i>User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.analytics') ? 'active' : '' }}" href="#">
                                <i class="bi bi-graph-up me-2"></i>Analytics
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Page Header -->
                @if(isset($pageHeader) || isset($pageTitle))
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('pageTitle', $pageTitle ?? '')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        @yield('pageActions')
                    </div>
                </div>
                @endif

                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Page Content -->
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    @stack('scripts')
</body>
</html>
