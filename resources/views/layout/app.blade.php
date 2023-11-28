<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izesan User Management System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <header>
        <h1>User Management System</h1>
        <nav>
            <ul>
                <li><a href="{{ route('users.index') }}">Users</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Izesan User Management System</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
