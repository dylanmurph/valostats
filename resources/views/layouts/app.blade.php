<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Valorant Stats')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-background text-foreground font-sans min-h-screen">

{{-- Include the shared header --}}
@include('header')

{{-- Page Content --}}
<main class="container mx-auto px-6 py-8">
    @yield('content')
</main>

</body>
</html>
