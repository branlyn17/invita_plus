<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>InvitaPlus – Invitaciones HTML hermosas y personalizables</title>
    <meta name="description" content="Crea invitaciones HTML hermosas, personalízalas con nombre, fecha y dirección. Cobra fácil por QR (Bolivia), PayPal o Binance. Descarga el HTML o publícalo en nuestro dominio." />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet" />

    <!-- TailwindCSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Inter', 'ui-sans-serif', 'system-ui'],
              display: ['Playfair Display', 'serif'],
            },
            colors: {
              brand: {
                50: '#eef2ff',
                100: '#e0e7ff',
                200: '#c7d2fe',
                300: '#a5b4fc',
                400: '#818cf8',
                500: '#6366f1',
                600: '#4f46e5',
                700: '#4338ca',
                800: '#3730a3',
                900: '#312e81',
              },
            },
            boxShadow: {
              soft: '0 10px 30px rgba(2,6,23,0.08)'
            },
            animation: {
              float: 'float 6s ease-in-out infinite',
              shimmer: 'shimmer 2.5s linear infinite',
              fadeUp: 'fadeUp .6s ease-out both'
            },
            keyframes: {
              float: {
                '0%, 100%': { transform: 'translateY(0px)' },
                '50%': { transform: 'translateY(-10px)' },
              },
              shimmer: {
                '0%': { backgroundPosition: '-200% 0' },
                '100%': { backgroundPosition: '200% 0' },
              },
              fadeUp: {
                '0%': { opacity: 0, transform: 'translateY(16px)' },
                '100%': { opacity: 1, transform: 'translateY(0)' },
              }
            }
          }
        }
      }
    </script>

    <!-- AOS (Animate on Scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
      /* Fancy gradient background */
      .bg-hero {
        background: radial-gradient(1200px 600px at 10% -10%, rgba(99,102,241,.25), transparent 60%),
                    radial-gradient(1000px 500px at 90% 10%, rgba(236,72,153,.18), transparent 55%),
                    conic-gradient(from 210deg at 50% 50%, #fff 0deg, #f8fafc 120deg, #eef2ff 240deg, #fff 360deg);
      }
      .glass { backdrop-filter: blur(8px); background: rgba(255,255,255,.7); }
      .btn-primary { @apply inline-flex items-center gap-2 rounded-2xl bg-brand-600 px-5 py-3 text-white font-semibold shadow-soft hover:bg-brand-700 transition; }
      .btn-secondary { @apply inline-flex items-center gap-2 rounded-2xl bg-white px-5 py-3 font-semibold text-slate-900 shadow-soft hover:shadow-lg transition border border-slate-200; }
      .badge { @apply inline-flex items-center gap-2 rounded-full px-3 py-1 text-xs font-semibold border border-white/30 text-white; }
    </style>
  </head>

  <body class="antialiased text-slate-800 bg-hero">
    <!-- NAVBAR -->
    <header class="sticky top-0 z-40 backdrop-blur bg-white/70 border-b border-white/50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <a href="#" class="flex items-center gap-2">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-brand-600"><path d="M12 3l3.5 7.5L23 11l-5.5 4.5L19 22l-7-4-7 4 1.5-6.5L1 11l7.5-.5L12 3z" fill="currentColor"/></svg>
            <span class="font-extrabold text-lg tracking-tight">Invita<span class="text-brand-600">Plus</span></span>
          </a>
          <nav class="hidden md:flex items-center gap-6 text-sm font-semibold">
            <a href="#features" class="hover:text-brand-600">Características</a>
            <a href="#pagos" class="hover:text-brand-600">Pagos</a>
            <a href="#como-funciona" class="hover:text-brand-600">Cómo funciona</a>
            <a href="#demo" class="hover:text-brand-600">Demo</a>
            <a href="#faq" class="hover:text-brand-600">FAQ</a>
          </nav>
          <div class="flex items-center gap-3">
            <a href="#crear" class="btn-secondary">Crear Invitación</a>
            <a href="#empezar" class="btn-primary">Empezar</a>
          </div>
        </div>
      </div>
    </header>

    <!-- HERO -->
    <section class="relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20">
        <div class="grid md:grid-cols-2 gap-10 items-center">
          <div data-aos="fade-up">
            <span class="badge bg-gradient-to-r from-brand-600 to-pink-600 text-white">Hecho para Bolivia • Pagos por QR</span>
            <h1 class="mt-5 font-display text-4xl sm:text-5xl leading-tight text-slate-900">
              Invitaciones <span class="text-brand-600">HTML</span> hermosas, 
              <span class="bg-gradient-to-r from-brand-600 to-pink-600 bg-clip-text text-transparent">100% personalizables</span>
            </h1>
            <p class="mt-4 text-lg text-slate-600 max-w-xl">Personaliza nombre del invitado, dirección, fecha, y estilo. Págalo como quieras: <strong>QR (Bs)</strong>, <strong>PayPal</strong> o <strong>Binance</strong>. Descarga el HTML para WhatsApp o publícalo bajo nuestro dominio.</p>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="#crear" class="btn-primary">
                <!-- magic icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v3"/><path d="M12 18v3"/><path d="M3 12h3"/><path d="M18 12h3"/><path d="M5.6 5.6l2.1 2.1"/><path d="M16.3 16.3l2.1 2.1"/><path d="M5.6 18.4l2.1-2.1"/><path d="M16.3 7.7l2.1-2.1"/></svg>
                Crear mi invitación
              </a>
              <a href="#demo" class="btn-secondary">Ver demo</a>
            </div>
            <div class="mt-8 flex items-center gap-4">
              <div class="flex -space-x-2">
                <img class="w-9 h-9 rounded-full border-2 border-white" src="https://i.pravatar.cc/72?img=1" alt="user1"/>
                <img class="w-9 h-9 rounded-full border-2 border-white" src="https://i.pravatar.cc/72?img=7" alt="user2"/>
                <img class="w-9 h-9 rounded-full border-2 border-white" src="https://i.pravatar.cc/72?img=12" alt="user3"/>
                <span class="w-9 h-9 rounded-full bg-brand-600 text-white grid place-items-center border-2 border-white text-sm">+9k</span>
              </div>
              <p class="text-sm text-slate-600">Miles de invitaciones creadas con <strong>calidad premium</strong>.</p>
            </div>
          </div>

          <div class="relative" data-aos="fade-up" data-aos-delay="100">
            <div class="absolute -inset-6 bg-gradient-to-tr from-brand-500/20 via-pink-500/10 to-transparent rounded-3xl blur-2xl"></div>
            <div class="relative glass rounded-3xl p-4 shadow-soft">
              <div class="aspect-[10/16] rounded-2xl bg-white overflow-hidden shadow-2xl animate-float">
                <!-- Mock invitation preview -->
                <div class="h-full w-full relative">
                  <div class="absolute inset-0 bg-gradient-to-b from-pink-50 via-white to-white"></div>
                  <div class="p-6 text-center">
                    <h2 class="font-display text-3xl text-slate-900">Boda de Ana & David</h2>
                    <p class="mt-1 text-slate-500">Sábado, 14 de Diciembre — 18:00</p>
                    <div class="mx-auto my-6 w-24 h-24 rounded-full bg-gradient-to-tr from-brand-500 to-pink-500 shadow-soft"></div>
                    <p class="max-w-xs mx-auto text-slate-600">Salón Jardines del Valle, Cochabamba. <br/>Confirma tu asistencia.</p>
                    <div class="mt-6 flex justify-center gap-3">
                      <button class="btn-primary">Confirmar</button>
                      <button class="btn-secondary">Cómo llegar</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="absolute -bottom-8 -left-6 rotate-[-6deg] hidden md:block">
                <div class="rounded-xl bg-white shadow-soft px-4 py-3 flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-brand-600 text-white grid place-items-center">
                    <!-- pencil icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/></svg>
                  </div>
                  <div>
                    <p class="text-sm font-bold">100% editable</p>
                    <p class="text-xs text-slate-500 -mt-1">Colores, tipografías, textos, música.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PAYMENTS STRIP -->
    <section id="pagos" class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-2xl p-6 shadow-soft" data-aos="fade-up">
          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <p class="text-slate-700 font-semibold flex items-center gap-2">
              <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
              Pagá como quieras
            </p>
            <div class="flex flex-wrap items-center gap-4">
              <span class="inline-flex items-center gap-2 rounded-xl border px-3 py-2 bg-white"><span class="w-2 h-2 rounded-full bg-blue-600"></span><strong>QR</strong> (Bs) • Bolivia</span>
              <span class="inline-flex items-center gap-2 rounded-xl border px-3 py-2 bg-white"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c4.41 0 8.19-2.84 9.5-6.78h-2.18A8.005 8.005 0 0 1 12 20a8 8 0 1 1 7.75-10h-3.71v2.5H22V2h-2.5v3.26A9.98 9.98 0 0 0 12 2Z"/></svg>PayPal</span>
              <span class="inline-flex items-center gap-2 rounded-xl border px-3 py-2 bg-white"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>Binance</span>
            </div>
            <a href="#como-funciona" class="btn-primary">Cómo funciona</a>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto" data-aos="fade-up">
          <h2 class="font-display text-3xl sm:text-4xl text-slate-900">Todo para crear la invitación perfecta</h2>
          <p class="mt-3 text-slate-600">Editor visual, paletas, tipografías, música, mapa y RSVP. Elige descargar el HTML o publicarlo bajo <strong>invitaplus.com</strong>.</p>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition" data-aos="fade-up">
            <div class="w-12 h-12 rounded-xl bg-brand-100 text-brand-700 grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>
            </div>
            <h3 class="mt-4 font-bold">Editor visual</h3>
            <p class="text-slate-600 mt-1">Arrastra bloques, cambia colores y tipografías en segundos.</p>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="50">
            <div class="w-12 h-12 rounded-xl bg-pink-100 text-pink-600 grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3 7 7 1-5 5 1 7-6-3-6 3 1-7-5-5 7-1 3-7z"/></svg>
            </div>
            <h3 class="mt-4 font-bold">Plantillas premium</h3>
            <p class="text-slate-600 mt-1">Diseños para bodas, cumpleaños, bautizos, eventos corporativos y más.</p>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="100">
            <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2z"/></svg>
            </div>
            <h3 class="mt-4 font-bold">RSVP & WhatsApp</h3>
            <p class="text-slate-600 mt-1">Confirma asistencia y comparte por WhatsApp con un toque.</p>
          </div>

          <!-- Card 4 -->
          <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition" data-aos="fade-up">
            <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10H7"/><path d="M21 6H3"/><path d="M21 14H3"/><path d="M21 18H7"/></svg>
            </div>
            <h3 class="mt-4 font-bold">Hosting o descarga</h3>
            <p class="text-slate-600 mt-1">Descarga el HTML final o publícalo bajo nuestro dominio.</p>
          </div>

          <!-- Card 5 -->
          <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="50">
            <div class="w-12 h-12 rounded-xl bg-cyan-100 text-cyan-600 grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v8"/><path d="M8 12h8"/><circle cx="12" cy="12" r="10"/></svg>
            </div>
            <h3 class="mt-4 font-bold">Pagos flexibles</h3>
            <p class="text-slate-600 mt-1">QR (Bs), PayPal y Binance. Fácil y seguro.</p>
          </div>

          <!-- Card 6 -->
          <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="100">
            <div class="w-12 h-12 rounded-xl bg-lime-100 text-lime-700 grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 21l-6-6"/><circle cx="10" cy="10" r="7"/></svg>
            </div>
            <h3 class="mt-4 font-bold">SEO & Analytics</h3>
            <p class="text-slate-600 mt-1">Mide visitas y comparte un link memorable.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- HOW IT WORKS -->
    <section id="como-funciona" class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8 items-start">
          <div class="lg:col-span-1" data-aos="fade-up">
            <h2 class="font-display text-3xl sm:text-4xl text-slate-900">Cómo funciona</h2>
            <p class="mt-3 text-slate-600">Crea, personaliza, paga y comparte. Todo en minutos.</p>
          </div>
          <div class="lg:col-span-2 grid sm:grid-cols-2 gap-6">
            <div class="bg-white rounded-2xl p-6 shadow-soft" data-aos="fade-up">
              <span class="inline-flex w-10 h-10 rounded-xl bg-brand-600 text-white items-center justify-center font-bold">1</span>
              <h3 class="mt-3 font-bold">Elige una plantilla</h3>
              <p class="text-slate-600 mt-1">Selecciona un diseño pensado para tu evento.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-soft" data-aos="fade-up" data-aos-delay="50">
              <span class="inline-flex w-10 h-10 rounded-xl bg-brand-600 text-white items-center justify-center font-bold">2</span>
              <h3 class="mt-3 font-bold">Personaliza</h3>
              <p class="text-slate-600 mt-1">Nombre del invitado, fecha, dirección, mapa y más.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-soft" data-aos="fade-up" data-aos-delay="100">
              <span class="inline-flex w-10 h-10 rounded-xl bg-brand-600 text-white items-center justify-center font-bold">3</span>
              <h3 class="mt-3 font-bold">Paga</h3>
              <p class="text-slate-600 mt-1">QR (Bs) para Bolivia, o PayPal/Binance para global.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-soft" data-aos="fade-up" data-aos-delay="150">
              <span class="inline-flex w-10 h-10 rounded-xl bg-brand-600 text-white items-center justify-center font-bold">4</span>
              <h3 class="mt-3 font-bold">Comparte</h3>
              <p class="text-slate-600 mt-1">Descarga el HTML para WhatsApp o usa nuestro dominio.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- DEMO / SHOWCASE -->
    <section id="demo" class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-3xl p-8 shadow-soft" data-aos="fade-up">
          <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div>
              <h3 class="font-display text-3xl text-slate-900">Descarga o publica con 1 clic</h3>
              <p class="mt-3 text-slate-600">Al finalizar, podrás descargar el archivo HTML optimizado para compartir por WhatsApp, o te damos un enlace en <strong>invitaplus.com/tu-evento</strong>.</p>
              <div class="mt-6 flex flex-wrap gap-3">
                <button class="btn-primary" onclick="toast('Descarga preparada: invitacion.html')">
                  <!-- download icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg>
                  Descargar HTML
                </button>
                <button class="btn-secondary" onclick="toast('Publicación lista: invitaplus.com/ana-david')">
                  <!-- link icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 1 7 0l2 2a5 5 0 0 1-7 7l-2-2"/><path d="M14 11a5 5 0 0 1-7 0L5 9a5 5 0 1 1 7-7l2 2"/></svg>
                  Publicar en nuestro dominio
                </button>
              </div>
            </div>
            <div>
              <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/60">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200&auto=format&fit=crop" alt="Invitación elegante" class="w-full h-full object-cover"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section id="crear" class="py-20">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h3 class="font-display text-3xl sm:text-4xl text-slate-900">¿Listo para crear tu invitación perfecta?</h3>
        <p class="mt-3 text-slate-600 max-w-2xl mx-auto">Empieza gratis, paga solo cuando estés listo para descargar o publicar. Compatible con QR (Bs), PayPal y Binance.</p>
        <div class="mt-6 flex justify-center gap-3">
          <a href="#" class="btn-primary">Empezar ahora</a>
          <a href="#faq" class="btn-secondary">Preguntas frecuentes</a>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="font-display text-3xl text-slate-900 text-center" data-aos="fade-up">Preguntas frecuentes</h3>
        <div class="mt-8 space-y-4">
          <details class="group bg-white rounded-2xl p-5 shadow-soft" data-aos="fade-up">
            <summary class="cursor-pointer list-none flex items-center justify-between font-semibold">¿Puedo personalizar todo?<span class="transition group-open:rotate-45">+</span></summary>
            <p class="mt-3 text-slate-600">Sí. Texto, fotos, colores, tipografías, música, mapa, RSVP y más.</p>
          </details>
          <details class="group bg-white rounded-2xl p-5 shadow-soft" data-aos="fade-up" data-aos-delay="50">
            <summary class="cursor-pointer list-none flex items-center justify-between font-semibold">¿Cómo pago en Bolivia por QR?<span class="transition group-open:rotate-45">+</span></summary>
            <p class="mt-3 text-slate-600">Al finalizar, generamos un QR en bolivianos compatible con apps bancarias locales. También puedes pagar con PayPal o Binance.</p>
          </details>
          <details class="group bg-white rounded-2xl p-5 shadow-soft" data-aos="fade-up" data-aos-delay="100">
            <summary class="cursor-pointer list-none flex items-center justify-between font-semibold">¿Recibo un archivo HTML descargable?<span class="transition group-open:rotate-45">+</span></summary>
            <p class="mt-3 text-slate-600">Sí. Descargas un HTML listo para compartir por WhatsApp o lo publicas bajo nuestro dominio.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-white/60 bg-white/70 backdrop-blur">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
          <div class="flex items-center gap-2">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" class="text-brand-600"><path d="M12 3l3.5 7.5L23 11l-5.5 4.5L19 22l-7-4-7 4 1.5-6.5L1 11l7.5-.5L12 3z"/></svg>
            <span class="font-extrabold">Invita<span class="text-brand-600">Plus</span></span>
          </div>
          <p class="text-sm text-slate-600">© <span id="year"></span> InvitaPlus. Todos los derechos reservados.</p>
          <div class="flex items-center gap-4 text-sm">
            <a href="#" class="hover:text-brand-600">Términos</a>
            <a href="#" class="hover:text-brand-600">Privacidad</a>
            <a href="#" class="hover:text-brand-600">Contacto</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Toast -->
    <div id="toast" class="fixed left-1/2 -translate-x-1/2 bottom-6 z-50 hidden">
      <div class="rounded-xl bg-slate-900 text-white px-4 py-3 shadow-2xl flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/></svg>
        <span id="toast-msg" class="text-sm"></span>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({ once: true, duration: 700, offset: 80 });
      document.getElementById('year').textContent = new Date().getFullYear();
      function toast(msg){
        const t = document.getElementById('toast');
        const m = document.getElementById('toast-msg');
        m.textContent = msg;
        t.classList.remove('hidden');
        setTimeout(()=> t.classList.add('hidden'), 2200);
      }
    </script>
  </body>
</html>
