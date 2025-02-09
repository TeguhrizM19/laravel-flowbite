<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/nhlogo.png') }}" type="image/png">
    <title>Flowbite</title>

    @vite('resources/css/app.css', 'resources/js/app.js')
    
    {{-- Flowbite CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}

    {{-- custom scrollbar style --}}
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
            /* Width of the vertical scrollbar */
            height: 8px;
            /* Height of the horizontal scrollbar */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #099AA7;
            /* Thumb color */
            border-radius: 10px;
            /* Rounded corners for the thumb */
            border: 2px solid #fff;
            /* Border around the thumb */
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Track color */
            border-radius: 10px;
        }
    </style>
    
</head>
<body class="h-screen bg-white">
    {{-- Sidebar --}}
    @include('components.sidebar')
    {{-- Navbar --}}
    @include('components.navbar')

    <main class="mt-20 mx-6 md:mx-10 pb-10">
    {{ $slot }}
    </main>
</body>

{{-- loading indicator modal trigger script --}}
<script>
    function showLoadingModal() {
        document.getElementById('loading-modal').classList.remove('hidden');
    }
</script>

{{-- tailwind cdn --}}
<script src="https://cdn.tailwindcss.com"></script>

{{-- Flowbite CDN --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
