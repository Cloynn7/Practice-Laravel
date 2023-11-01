<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="flex flex-col justify-center items-center h-screen text-center">
        <h1 class="mb-4 text-6xl font-semibold text-red-500">@yield('code')</h1>
        <p class="text-lg text-gray-600">Oops! It seems an error has occurred.</p>
        <p class="mt-1 text-gray-600">Let's take you <a href="/" class="text-blue-500">home</a>.</p>
    </div>
    </div>
</body>

</html>

<body>
