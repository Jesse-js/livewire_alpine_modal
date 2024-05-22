<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-5">
    <x-modal name="modal1" title="Modal 1">
        <x-slot name="body">
            <span class="p-5">Modal 1</span>
        </x-slot>
    </x-modal>

    <x-modal name="modal2" title="Modal 2">
        <x-slot name="body">
            <span class="p-5">Modal 2</span>
        </x-slot>
    </x-modal>

    <x-modal name="modal3" title="Modal 3">
        <x-slot name="body">
            <span class="p-5">Modal 3</span>
        </x-slot>
    </x-modal>

    <button x-data @click="$dispatch('open-modal', { name: 'modal1'})"
        class="px-3 py-1 bg-teal-500 text-white rounded">Open modal</button>

    <button x-data @click="$dispatch('open-modal', { name: 'modal2'})"
        class="px-3 py-1 bg-orange-500 text-white rounded">Open modal</button>

    <button x-data @click="$dispatch('open-modal', { name: 'modal3'})"
        class="px-3 py-1 bg-emerald-500 text-white rounded">Open modal</button>
</body>

</html>
