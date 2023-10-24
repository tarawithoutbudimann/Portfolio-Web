<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Login Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{URL('/')}}" class="text-xl font-bold">Tarawithoutbudiman!</a>
            <button class="block lg:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div class="hidden lg:flex space-x-4">
                @guest
                    <a href="{{route('login')}}" class="text-gray-700">Login</a>
                    <a href="{{route('register')}}" class="text-gray-700">Register</a>
                @else
                    <div class="relative">
                        <span class="block py-2 px-4 text-gray-900">{{ Auth::user()->name }}</span>
                        <ul class="absolute right-0 z-10 mt-2 space-y-2 text-sm bg-white border rounded-lg shadow-lg">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                   class="block px-4 py-2">Logout</a>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-4 p-4">
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
</body>
</html>
