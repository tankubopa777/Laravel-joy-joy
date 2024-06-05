<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .container-custom {
            padding: 1rem;
        }
        .main-content {
            min-height: calc(100vh - 4rem); /* Adjust based on navbar height */
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-gray-800 dark:text-white">
    @include('components.navbar')

    <div class="container mx-auto px-4 container-custom">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>
