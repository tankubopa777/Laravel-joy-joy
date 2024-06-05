<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js" defer></script>
    <style>
        /* Custom hover effects for links */
        .navbar-link {
            transition: all 0.3s ease;
        }
        .navbar-link:hover {
            border-bottom-color: #4F46E5;
            color: #4F46E5;
        }
        /* Custom hover effect for the mobile menu */
        .mobile-menu-link:hover {
            background-color: #E5E7EB;
            color: #4F46E5;
        }
        .mobile-menu-link {
            transition: all 0.3s ease;
        }
        /* Active link styles */
        .active-link {
            border-bottom-color: #4F46E5;
            color: #4F46E5;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-gray-800 text-black">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-900 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="/">
                            <img class="h-8 w-8" src="https://laravel.com/img/logomark.min.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/" class="{{ request()->is('/') ? 'border-indigo-500 text-black dark:text-white active-link' : 'border-transparent text-gray-500 dark:text-gray-400 hover:border-gray-300 dark:hover:border-gray-700 hover:text-gray-700 dark:hover:text-gray-200' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium navbar-link">
                            Home
                        </a>
                        <a href="/about" class="{{ request()->is('about') ? 'border-indigo-500 text-black dark:text-white active-link' : 'border-transparent text-gray-500 dark:text-gray-400 hover:border-gray-300 dark:hover:border-gray-700 hover:text-gray-700 dark:hover:text-gray-200' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium navbar-link">
                            About
                        </a>
                        <a href="/contact" class="{{ request()->is('contact') ? 'border-indigo-500 text-black dark:text-white active-link' : 'border-transparent text-gray-500 dark:text-gray-400 hover:border-gray-300 dark:hover:border-gray-700 hover:text-gray-700 dark:hover:text-gray-200' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium navbar-link">
                            Contact
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    @if (Route::has('login'))
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open" class="bg-white dark:bg-gray-900 inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                        <span class="sr-only text-black">Open main menu</span>
                        <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                        <svg :class="{'block': open, 'hidden': !open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="open" class="sm:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="/" class="{{ request()->is('/') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 hover:text-gray-800 dark:hover:text-gray-200' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium mobile-menu-link">
                    Home
                </a>
                <a href="/about" class="{{ request()->is('about') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 hover:text-gray-800 dark:hover:text-gray-200' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium mobile-menu-link">
                    About
                </a>
                <a href="/contact" class="{{ request()->is('contact') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 hover:text-gray-800 dark:hover:text-gray-200' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium mobile-menu-link">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <main>
        <!-- Your content here -->
    </main>
</body>
</html>
