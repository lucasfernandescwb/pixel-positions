<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white pb-20">
    
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10 mb-10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#" class="transition-colors duration-300 hover:text-blue-600">Jobs</a>
                <a href="#" class="transition-colors duration-300 hover:text-blue-600">Careers</a>
                <a href="#" class="transition-colors duration-300 hover:text-blue-600">Salaries</a>
                <a href="#" class="transition-colors duration-300 hover:text-blue-600">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create" class="transition-colors duration-300 hover:text-blue-600">Post a job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button class="cursor-pointer transition-colors duration-300 hover:text-blue-600">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-4 font-bold">
                    <a href="/register" class="transition-colors duration-300 hover:text-blue-600">Sign Up</a>
                    <a href="/login" class="transition-colors duration-300 hover:text-blue-600">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="max-w-[960px] m-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>