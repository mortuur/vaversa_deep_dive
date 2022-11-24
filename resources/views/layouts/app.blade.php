<html>
<head>
    <title>App Name - VaVersa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>
    <x-nav-bar>

    </x-nav-bar>
</header>
{{--<div class="flex flex-row-reverse p-2">--}}
{{--    <a href="">--}}
{{--        <svg class="w-12 h-12 transform transition duration-500 hover:scale-105" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>--}}
{{--    </a>--}}
{{--</div>--}}
<div class="p-12 pl-20 container grid grid-cols-3 gap-12">
    @yield('content')
</div>
</body>
</html>
