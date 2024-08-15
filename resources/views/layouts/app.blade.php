<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">

    @include('partials.header')

    <div class="container mx-auto py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
