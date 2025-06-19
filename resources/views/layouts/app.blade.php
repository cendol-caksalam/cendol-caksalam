<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'Cendol Cak Salam')</title>

    {{-- Favicon & Fonts --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Turbo.js untuk navigasi smooth --}}
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.3.0/dist/turbo.min.js" defer></script>

    <style>
        #main-content {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        body.turbo-loading #main-content {
            opacity: 0;
        }

        body:not(.turbo-loading) #main-content {
            opacity: 1;
        }
    </style>
</head>

<body class="h-full font-sans antialiased bg-white text-gray-800">
    <div class="min-h-screen flex flex-col relative z-10">

        {{-- Dekorasi --}}
        @include('partials.decoration')

        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Header --}}
        @isset($title)
            @include('partials.header', ['title' => $title])
        @endisset

        {{-- Main Content --}}
        <main id="main-content" class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                @yield('content')
            </div>
        </main>

        {{-- Footer --}}
        @include('partials.footer')

        {{-- Scroll to Top --}}
        @include('partials.scroll-to-top')
    </div>

    {{-- Auto Scroll to Top saat navigasi --}}
    <script>
        document.addEventListener('turbo:load', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
