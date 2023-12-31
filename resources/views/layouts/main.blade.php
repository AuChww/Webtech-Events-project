<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KU Events</title>
    <link rel="stylesheet" href="css/theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet"
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('layouts.subviews.navbar')

<main class="bg-gray-900 font-mono">
    @yield('content')

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

</body>
</html>
