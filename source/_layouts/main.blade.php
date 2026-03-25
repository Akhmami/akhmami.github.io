<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    @include('_layouts._head')
</head>

<body class="min-h-screen bg-background font-sans transition-colors duration-300">
    <x-section.navbar />

    @yield('body')

    <x-section.footer />
</body>

</html>
