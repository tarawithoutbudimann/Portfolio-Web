<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('lightbox2-dev/dist/css/lightbox.min.css')}}"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build\assets\app-a1835b0b.css')}}">
</head>

<body class="bg-gray-100">

    <nav class="bg-white p-2 shadow-md fixed w-full top-0 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ URL('/') }}" class="text-xl font-bold text-gray-800">Tarawithoutbudiman!</a>
            <div class="hidden lg:flex space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-gray-700">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-700">Register</a>
                    @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('gallery')) ? 'active' : '' }}" href="{{route('gallery.web') }}">Gallery</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <div class="pt-16">
        <div class="container mx-auto mt-4 p-4">
            @yield('content')
        </div>
    </div>

    <script src="{{asset('build\assets\app-55b385e2.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('lightbox2-dev\dist\js\lightbox-plus-jquery.min.js')}}"></script>
</body>
</html>