<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pixel-position</title>
    @Vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-black text-white pb-8">
    <div class="px-3">
        <nav class="flex py-4 justify-between border-b border-white/10">
            <div>
                <a href="/"><img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo"></a>
            </div>
            <div class="space-x-10 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div>
                @auth
                <div class="space-x-10 font-bold pr-8">
                <a href="jobs/create">Post A Job</a>
                <a href="/logout">Log Out</a>
                </div>
                @endauth

                @guest
                <div class="space-x-10 font-bold pr-8">
                    <a href="/register">Register</a>
                    <a href="/login">Log In</a>
                </div>
                @endguest
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}
        </main>
    </div>
</body>

</html>