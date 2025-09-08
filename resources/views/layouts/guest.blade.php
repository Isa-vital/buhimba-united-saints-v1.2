<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Buhimba United Saints FC') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Bootstrap 5 CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <!-- Bootstrap Icons CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        
        <!-- Custom Login Styles -->
        <style>
            :root {
                --bs-primary: #1B5E20;
                --bs-primary-light: #4CAF50;
                --bs-primary-dark: #0D3309;
            }
            
            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 50%, #2E7D32 100%);
                min-height: 100vh;
            }
            
            .login-container {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            
            .login-header {
                text-align: center;
                margin-bottom: 2rem;
            }
            
            .club-logo {
                width: 80px;
                height: 80px;
                background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1rem;
                color: white;
                font-size: 2rem;
                box-shadow: 0 10px 30px rgba(27, 94, 32, 0.3);
            }
            
            .form-control {
                border: 2px solid #e3e6f0;
                border-radius: 10px;
                padding: 0.75rem 1rem;
                font-size: 1rem;
                transition: all 0.3s ease;
            }
            
            .form-control:focus {
                border-color: var(--bs-primary);
                box-shadow: 0 0 0 0.2rem rgba(27, 94, 32, 0.25);
            }
            
            .btn-primary {
                background: linear-gradient(135deg, var(--bs-primary) 0%, var(--bs-primary-light) 100%);
                border: none;
                border-radius: 10px;
                padding: 0.75rem 2rem;
                font-weight: 600;
                font-size: 1rem;
                transition: all 0.3s ease;
                box-shadow: 0 5px 20px rgba(27, 94, 32, 0.3);
            }
            
            .btn-primary:hover {
                background: linear-gradient(135deg, var(--bs-primary-dark) 0%, var(--bs-primary) 100%);
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(27, 94, 32, 0.4);
            }
            
            .form-label {
                font-weight: 600;
                color: #374151;
                margin-bottom: 0.5rem;
            }
            
            .text-danger {
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }
            
            .login-links {
                text-align: center;
                margin-top: 1.5rem;
            }
            
            .login-links a {
                color: var(--bs-primary);
                text-decoration: none;
                font-weight: 500;
                transition: color 0.3s ease;
            }
            
            .login-links a:hover {
                color: var(--bs-primary-dark);
                text-decoration: underline;
            }
            
            .alert {
                border: none;
                border-radius: 10px;
                font-weight: 500;
            }
            
            .alert-success {
                background-color: #d1ecf1;
                color: #0c5460;
            }
        </style>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center min-vh-100 p-4">
            <div class="login-container p-5" style="width: 100%; max-width: 400px;">
                <div class="login-header">
                    <div class="club-logo">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h2 class="fw-bold text-dark mb-2">Buhimba United Saints FC</h2>
                    <p class="text-muted mb-0">Admin Portal</p>
                </div>

                {{ $slot }}
                
                <div class="login-links">
                    <a href="{{ route('home') }}" class="d-inline-flex align-items-center">
                        <i class="bi bi-arrow-left me-2"></i>Back to Website
                    </a>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 JavaScript CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
