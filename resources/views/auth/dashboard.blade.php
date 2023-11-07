<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- <link rel="stylesheet" href="{{ asset('build/assets/app-857346c3.css') }}"> -->
    <title>web portfolio</title>
</head>
<body>     
    <!-- Section: Design Block -->
    <section class="mb-40">
    <!-- Navbar -->
    <nav
        class="relative flex w-full items-center justify-between bg-white py-2 shadow-sm shadow-neutral-700/10 dark:bg-neutral-800 dark:shadow-black/30 lg:flex-wrap lg:justify-start"
        data-te-navbar-ref>
        <!-- Container wrapper -->
        <div class="flex w-full flex-wrap items-center justify-between px-6">
        <div class="flex items-center">
            <!-- Toggle button -->
            <button
            class="block border-0 bg-transparent py-2 pr-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
            <span class="[&>svg]:w-7">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
                </svg>
            </span>
            </button>

            <!-- Navbar Brand -->
            <a class="text-primary dark:text-primary-400" href="#!">
            <span class="[&>svg]:ml-2 [&>svg]:mr-3 [&>svg]:h-6 [&>svg]:w-6 [&>svg]:lg:ml-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>
            </span>
            </a>
        </div>

        <!-- Collapsible wrapper -->
        <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContentY" data-te-collapse-item>
            <!-- Left links -->
            <ul class="mr-auto lg:flex lg:flex-row" data-te-navbar-nav-ref>
            <li data-te-nav-item-ref>
                <a class="block py-2 pr-2 text-black-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light"
                disabled>Home</a>
            </li>
            <li data-te-nav-item-ref>
                <a class="block py-2 pr-2 text-black-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">About Me</a>
            </li>
            <li class="mb-2 lg:mb-0" data-te-nav-item-ref>
                <a class="block py-2 pr-2 text-black-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
                href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Projects</a>
            </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="my-1 flex items-center lg:my-0 lg:ml-auto">
            <button type="button"
            class="mr-2 inline-block rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-primary-400 dark:hover:bg-neutral-700 dark:hover:bg-opacity-60 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
            data-te-ripple-init data-te-ripple-color="light">
            Login
            </button>
            <button type="button"
            class="inline-block rounded bg-black px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
            data-te-ripple-init data-te-ripple-color="light">
            Logout
            </button>
        </div>
        <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- SVG Background -->
    <span class="[&>svg]:absolute [&>svg]:-z-10 [&>svg]:m-auto [&>svg]:block [&>svg]:w-full">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="680"
        preserveAspectRatio="none" viewBox="0 0 1920 880">
        <g transform="translate(960,440) scale(1,1) translate(-960,-440)">
            <linearGradient id="lg-0.047955344060927496" x1="0" x2="1" y1="0" y2="0">
            <stop stop-color="hsl(217, 88%, 33.7%)" offset="0"></stop>
            <stop stop-color="hsl(217, 88%, 75.1%)" offset="1"></stop>
            </linearGradient>
            <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1"
                calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s"
                values="M0 0L 0 804.2328934685746Q 320 597.3613372284876  640 571.0708916590191T 1280 512.0661063245175T 1920 301.8788007488083L 1920 0 Z;M0 0L 0 877.6839081951588Q 320 668.0720922803877  640 649.0018928349388T 1280 328.7087077664202T 1920 162.95038242563396L 1920 0 Z;M0 0L 0 724.9886210051687Q 320 661.4364572061575  640 623.2173947479624T 1280 359.20353038907734T 1920 135.51673041732283L 1920 0 Z;M0 0L 0 804.2328934685746Q 320 597.3613372284876  640 571.0708916590191T 1280 512.0661063245175T 1920 301.8788007488083L 1920 0 Z">
            </animate>
            </path>
            <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1"
                calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-6.666666666666667s"
                values="M0 0L 0 765.7607191473613Q 320 641.7853945676919  640 624.2534689988059T 1280 365.27264408032966T 1920 190.38947978522663L 1920 0 Z;M0 0L 0 842.1984196370487Q 320 570.6690721707517  640 540.6844954979398T 1280 439.92879442880593T 1920 200.29713960445451L 1920 0 Z;M0 0L 0 796.6802345094818Q 320 721.9216894353016  640 696.8815669355181T 1280 373.6367381440213T 1920 196.63169821789495L 1920 0 Z;M0 0L 0 765.7607191473613Q 320 641.7853945676919  640 624.2534689988059T 1280 365.27264408032966T 1920 190.38947978522663L 1920 0 Z">
            </animate>
            </path>
            <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1"
                calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-13.333333333333334s"
                values="M0 0L 0 801.7562714943509Q 320 634.0247183381232  640 605.7090791951217T 1280 503.9393370140325T 1920 224.7551247480177L 1920 0 Z;M0 0L 0 821.0401780336218Q 320 670.8690783540507  640 637.0744123031742T 1280 456.40745286432224T 1920 278.1294357804296L 1920 0 Z;M0 0L 0 744.0534225112256Q 320 637.6425395409125  640 593.2079605185819T 1280 457.03995196824286T 1920 254.87693899994804L 1920 0 Z;M0 0L 0 801.7562714943509Q 320 634.0247183381232  640 605.7090791951217T 1280 503.9393370140325T 1920 224.7551247480177L 1920 0 Z">
            </animate>
            </path>
            <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1"
                calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-20s"
                values="M0 0L 0 817.8603658675457Q 320 592.9404308081629  640 559.1126621853513T 1280 428.9912604821798T 1920 209.017381620229L 1920 0 Z;M0 0L 0 802.0504889976935Q 320 561.3963273210122  640 537.6024084387631T 1280 430.41283267566695T 1920 256.1972069733954L 1920 0 Z;M0 0L 0 789.4448177495887Q 320 561.9675446430498  640 531.6192318019404T 1280 414.76018143244175T 1920 265.9163329632971L 1920 0 Z;M0 0L 0 817.8603658675457Q 320 592.9404308081629  640 559.1126621853513T 1280 428.9912604821798T 1920 209.017381620229L 1920 0 Z">
            </animate>
            </path>
            <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate attributeName="d" dur="33.333333333333336s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1"
                calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-26.666666666666668s"
                values="M0 0L 0 844.0541574423102Q 320 623.0697081316591  640 592.8483890737847T 1280 469.85448734523794T 1920 190.81850676853674L 1920 0 Z;M0 0L 0 871.4928294956283Q 320 618.9784567388518  640 593.1183717103518T 1280 376.5051942642811T 1920 141.32293927545027L 1920 0 Z;M0 0L 0 782.0118384610068Q 320 727.3267836497654  640 694.0476176759635T 1280 518.1545471640493T 1920 276.0053882957168L 1920 0 Z;M0 0L 0 844.0541574423102Q 320 623.0697081316591  640 592.8483890737847T 1280 469.85448734523794T 1920 190.81850676853674L 1920 0 Z">
            </animate>
            </path>
        </g>
        </svg>
    </span>
    <!-- SVG Background -->

    <!-- Jumbotron -->
    <div class="w-100 mx-auto px-6 sm:max-w-2xl md:max-w-3xl md:px-12 lg:max-w-5xl xl:max-w-7xl xl:px-32">
        <div class="text-center">
        <div
            class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,15%,0.8)] dark:shadow-black/20 md:py-16 md:px-12"
            style="
                margin-top: 180px;
                backdrop-filter: saturate(200%) blur(25px);
            ">
            <h1 class="mt-6 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
            Who Has the Data Has the Power <br />
            </h1>
            <a class="mb-2 inline-block rounded bg-black px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] md:mr-2 md:mb-0"
            data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Ask Tara</a>
            <a class="inline-block rounded px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:hover:bg-neutral-700 dark:hover:bg-opacity-40"
            data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Contact Tara!</a>
        </div>
        </div>
    </div>
    <!-- Jumbotron -->
    </section>

    <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center">
        <h2 class="mb-20 text-3xl font-bold">Skills</h2>
        
        <div class="grid lg:grid-cols-3 lg:gap-x-12">
        <div class="mb-12 lg:mb-0">
            <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>
                </div>
            </div>
            <div class="p-6">
                <h5 class="mb-4 text-lg font-semibold">Support 24/7</h5>
                <p>
                Laudantium totam quas cumque pariatur at doloremque hic quos
                quia eius. Reiciendis optio minus mollitia rerum labore
                facilis inventore voluptatem ad, quae quia sint.
                </p>
            </div>
            </div>
        </div>

        <div class="mb-12 lg:mb-0">
            <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
                </div>
            </div>
            <div class="p-6">
                <h5 class="mb-4 text-lg font-semibold">Safe and solid</h5>
                <p>
                Eum nostrum fugit numquam, voluptates veniam neque quibusdam
                ullam aspernatur odio soluta, quisquam dolore animi mollitia a
                omnis praesentium, expedita nobis!
                </p>
            </div>
            </div>
        </div>

        <div class="">
            <div
            class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                </svg>
                </div>
            </div>
            <div class="p-6">
                <h5 class="mb-4 text-lg font-semibold">Extremely fast</h5>
                <p>
                Enim cupiditate, minus nulla dolor cumque iure eveniet facere
                ullam beatae hic voluptatibus dolores exercitationem? Facilis
                debitis aspernatur amet nisi?
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    </div>
        <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center lg:text-left">
        <h2 class="mb-12 text-center text-3xl font-bold">
        My Projects
        </h2>

        <div class="grid gap-x-6 lg:grid-cols-3 lg:gap-x-12">
        <div class="mb-6 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:mb-0" data-te-ripple-init data-te-ripple-color="light">
            <div class="relative overflow-hidden bg-cover bg-no-repeat">
            <img src="https://i.pinimg.com/564x/af/aa/ca/afaaca6391ee289465ac75271d731f12.jpg" class="w-full rounded-t-lg" />
            <a href="#!">
                <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"></div>
            </a>
            <svg class="absolute left-0 bottom-0 text-white dark:text-neutral-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="currentColor"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            </div>
            <div class="p-6">
            <h5 class="mb-4 text-lg font-bold">Natural Language Processing</h5>
            <p class="mb-6">
                Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                placerat vulputate. Ut vulputate est non quam dignissim
                elementum. Donec a ullamcorper diam.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                class="inline-block rounded bg-black px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Learn
                more</a>
            </div>
        </div>

        <div class="mb-6 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:mb-0">
            <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init data-te-ripple-color="light">
            <img src="https://i.pinimg.com/564x/ee/11/e8/ee11e8a7ec1787903866899a710ec2bb.jpg" class="w-full rounded-t-lg" />
            <a href="#!">
                <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"></div>
            </a>
            <svg class="absolute left-0 bottom-0 text-white dark:text-neutral-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="currentColor"
                d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            </div>
            <div class="p-6">
            <h5 class="mb-4 text-lg font-bold">Computer Vision</h5>
            <p class="mb-6">
                Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet diam
                orci, nec ornare metus semper sed. Integer volutpat ornare erat
                sit amet rutrum.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                class="inline-block rounded bg-black px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Learn
                more</a>
            </div>
        </div>

        <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init data-te-ripple-color="light">
            <img src="https://i.pinimg.com/564x/7a/e4/7c/7ae47c8bf79f04d5011b0f68be16fbc6.jpg" class="w-full rounded-t-lg" />
            <a href="#!">
                <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"></div>
            </a>
            <svg class="absolute left-0 bottom-0 text-white dark:text-neutral-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="currentColor"
                d="M0,288L48,256C96,224,192,160,288,160C384,160,480,224,576,213.3C672,203,768,117,864,85.3C960,53,1056,75,1152,69.3C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            </div>
            <div class="p-6">
            <h5 class="mb-4 text-lg font-bold">Time Series</h5>
            <p class="mb-6">
                Curabitur tristique, mi a mollis sagittis, metus felis mattis
                arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                massa volutpat feugiat.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                class="inline-block rounded bg-black px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Learn
                more</a>
            </div>
        </div>
        </div>
    </section>
    </div>





        <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
        <div
        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <div class="flex flex-wrap items-center">
            <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
            <div class="h-[500px] w-full">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
                allowfullscreen></iframe>
            </div>
            </div>
            <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
            <div class="flex flex-wrap px-3 pt-12 pb-12 md:pb-0 lg:pt-0">
                <div class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                <div class="flex items-start">
                    <div class="shrink-0">
                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                        </svg>
                    </div>
                    </div>
                    <div class="ml-6 grow">
                    <p class="mb-2 font-bold dark:text-white">
                        Technical support
                    </p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        support@example.com
                    </p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        +1 234-567-89
                    </p>
                    </div>
                </div>
                </div>
                <div class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                <div class="flex items-start">
                    <div class="shrink-0">
                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                    </div>
                    </div>
                    <div class="ml-6 grow">
                    <p class="mb-2 font-bold dark:text-white">
                        Sales questions
                    </p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        sales@example.com
                    </p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        +1 234-567-89
                    </p>
                    </div>
                </div>
                </div>
                <div
                class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:mb-0 xl:w-6/12 xl:px-12">
                <div class="align-start flex">
                    <div class="shrink-0">
                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>
                    </div>
                    </div>
                    <div class="ml-6 grow">
                    <p class="mb-2 font-bold dark:text-white">Press</p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        press@example.com
                    </p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        +1 234-567-89
                    </p>
                    </div>
                </div>
                </div>
                <div class="w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                <div class="align-start flex">
                    <div class="shrink-0">
                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                        </svg>
                    </div>
                    </div>
                    <div class="ml-6 grow">
                    <p class="mb-2 font-bold dark:text-white">Bug report</p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        bugs@example.com
                    </p>
                    <p class="text-neutral-500 dark:text-neutral-200">
                        +1 234-567-89
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    </div>



        <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="background-radial-gradient mb-32 text-center lg:text-left">
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-[50%] bg-[url('https://mdbcdn.b-cdn.net/img/new/standard/nature/071.jpg')] h-[500px]">
        <div
            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
            <div class="flex h-full items-center justify-center">
            <div class="max-w-[800px] px-6 py-6 text-center text-white md:py-0 md:px-12">
                <h2 class="mb-12 text-5xl font-bold leading-tight tracking-tight md:text-6xl xl:text-7xl">
                Are you ready <br /><span>for AI era?</span>
                </h2>
                <p class="text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minima officia consequatur adipisci tenetur repudiandae rerum
                quos.
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    </div>
<!-- Container for demo purpose -->

        <!-- <script src=""></script> -->
</body>
</html>