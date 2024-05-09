<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <h1 class="display-4 mb-4">Welcome to Assessment</h1>
            @if (Route::has('login'))
                <div class="mt-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success btn-lg">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info btn-lg ml-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
