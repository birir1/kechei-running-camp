<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="wrapper">
        @include('partials.admin.sidebar')

        <div class="main">
            @include('partials.admin.navbar')

            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
