<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>InvitaPlus — Crea invitaciones digitales globales</title>
  <meta name="description" content="La plataforma #1 para diseñar y vender invitaciones digitales. Bodas, cumpleaños y eventos corporativos con RSVP en tiempo real." />

  @include('layouts.theme.1_head_scripts')

  @include('layouts.theme.2_head_styles')

</head>
<body class="font-pop bg-gray-50 text-slate-800 dark:bg-dark-bg dark:text-slate-100 antialiased selection:bg-brand-500 selection:text-white overflow-x-hidden transition-colors duration-300">

  <div id="app" class="min-h-screen flex flex-col">

    @include('layouts.theme.3_header')

    <main class="flex-1 pt-24">
      
        @yield('content')

    </main>

    @include('layouts.theme.5_footer')
  </div>

  @include('layouts.theme.6_scripts')

</body>
</html>