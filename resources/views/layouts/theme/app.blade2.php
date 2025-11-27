<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InvitaPlus</title>

    @include('layouts.theme.styles')

</head>
<body class="bg-gray-50 text-gray-800 font-[Poppins] antialiased">
    {{-- Header global --}}
    @include('layouts.theme.header')

    {{-- Contenido dinámico --}}
    <main>
        @yield('content')
    </main>

    @include('layouts.theme.footer')

    @include('layouts.theme.scripts')

</body>
</html>
