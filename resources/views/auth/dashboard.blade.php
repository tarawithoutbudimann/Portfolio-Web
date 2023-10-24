<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Tarawithoutbudiman Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="bg-white p-4 shadow-md">
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
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                >Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </div>
        </div>
    </nav>

    <div class="relative bg-cover bg-center bg-no-repeat h-screen flex items-center" style="background-image: url('https://img.freepik.com/free-photo/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room_74952-1410.jpg?w=1060&t=st=1698155845~exp=1698156445~hmac=7a9c59dfe5e0c34e718af0bf1b17b67ce284f59c60c614e231a001267746774e');">
        <div class="absolute inset-0 bg-black bg-opacity-75"></div>
        <div class="z-10 text-white text-center mx-auto">
            <h1 class="text-3xl font-bold mb-4">Welcome to Tarawithoutbudiman website!</h1>
            <p class="text-lg mb-8">"Who has the data, has the power."</p>
            @guest
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</a>
                <a href="{{ route('register') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Register</a>
            @endguest
        </div>
    </div>

    <section class="bg-gray-100 py-10">
        <div class="container mx-auto h-5">
            <h2 class="text-2xl font-bold mb-4 text-center">Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Service 1 -->
                <div class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <div class="text-center mb-4">
                        <img src="https://cdn.icon-icons.com/icons2/1859/PNG/512/analytics_117968.png" alt="Data Analysis Icon" class="mx-auto h-20">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Data Analysis</h3>
                    <p class="text-center text-gray-700 mb-4">I am specialized in analyzing data. Results, trends and recommendations are clearly presented in reports or tools.</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <div class="text-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/5721/5721518.png" alt="Advice and Coaching Icon" class="mx-auto h-20">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Advice and Coaching Projects</h3>
                    <p class="text-center text-gray-700 mb-4">Before and during data related projects, I give advice on the progress of the project and I coach data analysts.</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <div class="text-center mb-4">
                        <img src="https://www.pinclipart.com/picdir/big/558-5583157_clipart-data-analysis-icon-png-download.png" alt="Data Analytics Icon" class="mx-auto h-20">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Data Analytics</h3>
                    <p class="text-center text-gray-700 mb-4">Get more value from your data with prediction models and machine learning techniques, for example by predicting behavior or targeting the right customer.</p>
                </div>

                <!-- Service 4 (Interactive Infographics) -->
                <div class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <div class="text-center mb-4">
                        <img src="https://cdn2.iconfinder.com/data/icons/flat-files-icons-1/128/infographics-1024.png" alt="Interactive Infographics Icon" class="mx-auto h-20">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">(Interactive) Infographics</h3>
                    <p class="text-center text-gray-700 mb-4">Present your data in an inspiring way by using an infographic rather than a piece of text. I create interactive infographics which can be used internally or publicly.</p>
                </div>

                <!-- Service 5 (Dashboards) -->
                <div class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <div class="text-center mb-4">
                        <img src="https://icon-library.com/images/icon-for-dashboard/icon-for-dashboard-15.jpg" alt="Dashboard Icon" class="mx-auto h-20">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Dashboards</h3>
                    <p class="text-center text-gray-700 mb-4">Dashboards show the most recent results in an interactive way. By clicking and drilling, you will examine trends and patterns yourself.</p>
                </div>

                <!-- Service 6 (Front-end Web Developer) -->
                <div class="bg-white p-4 rounded shadow flex flex-col justify-between">
                    <div class="text-center mb-4">
                        <img src="https://www.freeiconspng.com/thumbs/website-icon/website-icon-14.png" alt="Web Development Icon" class="mx-auto h-20">
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-center">Front-end Web Developer</h3>
                    <p class="text-center text-gray-700 mb-4">As a web developer, I help to design and create the perfect website for starters and freelancers. The website is optimized for desktop and smartphone.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
