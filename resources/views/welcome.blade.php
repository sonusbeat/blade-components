<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blade Components</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">

        <style>
            body { font-family: 'Nunito'; }
        </style>
    </head>
    <body class="my-10">
        <h1 class="text-center text-gray-500 text-5xl mb-5">Blade Components</h1>

        @php
            $color = 'purple';
            $alert = 'alert';
        @endphp

        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">Bienvenido</x-slot>

            ¡ Has accedido correctamente al dashboard !
        </x-alert>

        <x-alert color="green" class="mb-4">
            <x-slot name="title">Correcto</x-slot>

            ¡ El post ha sido guardado satisfactoriamente !
        </x-alert>

        <x-alert color="yellow" class="mb-4">
            <x-slot name="title">Advertencia</x-slot>
           ¡ Esta acción es destructiva ! ¿ Desea continuar ?
        </x-alert>

        <x-alert color="red" class="mb-4">
            <x-slot name="title">Error</x-slot>
            ¡ No se pudo guardar el registo !
        </x-alert>

        <hr class="mb-4">

        <x-message class="mb-8">
            <x-slot name="title">Info</x-slot>
            ¡ Nuestras Políticas han cambiado !
        </x-message>

        <x-message color="blue" class="mb-8">
            <x-slot name="title">Info</x-slot>
            ¡ Nuestras Políticas han cambiado !
        </x-message>

        <x-message color="red" class="mb-8">
            <x-slot name="title">Info</x-slot>
            ¡ Nuestras Políticas han cambiado !
        </x-message>

        <hr class="mb-4">

        <x-dynamic-component :component="$alert">
            <x-slot name="title">Alerta</x-slot>
            Información Importante
        </x-dynamic-component>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
