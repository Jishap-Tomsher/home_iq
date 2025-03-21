<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HOME_IQ')</title>

    <!-- Link to the CSS file directly from the public directory -->
    <link href="{{ asset('dist/assets/app-0c7581b3.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   
</head>
<body class="bg-gray-50">

    @include('components.navigation.header')

    <main class="pt-[90px]">
        @yield('content')
    </main>

    @include('components.navigation.footer')

    <!-- Include JS file directly from the public directory -->
    <script type="module" src="{{ asset('dist/assets/app-44e25b4d.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>
