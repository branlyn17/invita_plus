@extends('layouts.theme.4_app')

@section('content')

<div>

    <section class="relative overflow-hidden pt-10 pb-20 lg:pt-20 lg:pb-28">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1200px] h-[600px] bg-gradient-to-tr from-brand-100/40 via-purple-100/30 to-transparent dark:from-brand-900/20 dark:via-purple-900/10 rounded-[100%] blur-3xl -z-10 transition-colors duration-500"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center max-w-3xl mx-auto reveal active">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 dark:bg-slate-800 text-brand-600 dark:text-brand-300 text-xs font-semibold mb-6 border border-brand-100 dark:border-slate-700">
              <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-500"></span>
              </span>
              Nuevo: Confirmación de asistencia por WhatsApp
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-[1.1]">
              Invitaciones que <br> <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-500 to-accent">todos amarán.</span>
            </h1>
            <p class="mt-6 text-lg md:text-xl text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl mx-auto">
              Diseña, envía y gestiona invitaciones digitales para cualquier evento. Plantillas profesionales, seguimiento de RSVP y acceso global.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
              <a href="#catalogo" class="inline-flex items-center justify-center gap-2 bg-brand-500 hover:bg-brand-600 text-white px-8 py-4 rounded-xl text-lg font-semibold shadow-xl shadow-brand-500/20 transition-all hover:-translate-y-1">
                Ver Plantillas
              </a>
              <button class="trigger-login inline-flex items-center justify-center gap-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:border-brand-200 text-slate-700 dark:text-slate-200 hover:text-brand-600 px-8 py-4 rounded-xl text-lg font-semibold shadow-sm transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Ver Demo
              </button>
            </div>

            <div class="mt-12 text-sm text-slate-500 dark:text-slate-500 flex justify-center items-center gap-6">
              <span class="flex items-center gap-1"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Sin tarjeta de crédito</span>
              <span class="flex items-center gap-1"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Descarga instantánea</span>
            </div>
          </div>
          
          <div class="mt-16 relative mx-auto max-w-5xl reveal delay-200">
             <div class="relative rounded-2xl bg-slate-900 p-2 shadow-2xl overflow-hidden ring-1 ring-white/10 dark:ring-white/5">
                <div class="absolute top-0 left-0 right-0 h-6 bg-slate-800 flex items-center px-4 gap-1.5">
                   <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                   <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                   <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                </div>
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2674&auto=format&fit=crop" class="w-full rounded-lg mt-4 opacity-90 hover:opacity-100 transition duration-700" alt="Dashboard Preview">
                
                <div class="absolute -right-4 md:-right-10 top-1/3 bg-white dark:bg-slate-800 p-4 rounded-xl shadow-xl animate-float hidden md:block max-w-xs border border-transparent dark:border-slate-700">
                   <div class="flex items-center gap-3 mb-2">
                      <div class="w-8 h-8 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 flex items-center justify-center text-xs font-bold">JD</div>
                      <div>
                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Juan D. confirmó asistencia</p>
                        <p class="text-[10px] text-slate-500">Hace 2 minutos</p>
                      </div>
                   </div>
                   <div class="h-1.5 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
                      <div class="h-full bg-green-500 w-3/4"></div>
                   </div>
                </div>
             </div>
          </div>
        </div>
    </section>

    <section id="como-funciona" class="py-20 bg-white dark:bg-dark-bg transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Crear es tan fácil como 1-2-3</h2>
        <p class="mt-4 text-slate-600 dark:text-slate-400">No necesitas saber de diseño. Nosotros ponemos la tecnología.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10 relative">
        <div class="hidden md:block absolute top-12 left-1/6 right-1/6 h-0.5 bg-gradient-to-r from-transparent via-brand-200 dark:via-slate-700 to-transparent -z-10"></div>

        <div class="relative text-center group reveal delay-100">
            <div class="w-24 h-24 mx-auto bg-white dark:bg-slate-800 border-2 border-brand-100 dark:border-slate-700 rounded-3xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 mb-6 relative z-10">
            <span class="text-4xl">🎨</span>
            <div class="absolute -top-3 -right-3 w-8 h-8 bg-brand-500 text-white rounded-full flex items-center justify-center font-bold border-4 border-white dark:border-slate-900">1</div>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Elige una plantilla</h3>
            <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 px-4">Explora cientos de diseños para bodas, cumpleaños y eventos corporativos.</p>
        </div>

        <div class="relative text-center group reveal delay-200">
            <div class="w-24 h-24 mx-auto bg-white dark:bg-slate-800 border-2 border-brand-100 dark:border-slate-700 rounded-3xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 mb-6 relative z-10">
            <span class="text-4xl">✏️</span>
            <div class="absolute -top-3 -right-3 w-8 h-8 bg-brand-500 text-white rounded-full flex items-center justify-center font-bold border-4 border-white dark:border-slate-900">2</div>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Personaliza</h3>
            <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 px-4">Cambia textos, fotos, colores y música. Añade ubicación con Google Maps.</p>
        </div>

        <div class="relative text-center group reveal delay-300">
            <div class="w-24 h-24 mx-auto bg-white dark:bg-slate-800 border-2 border-brand-100 dark:border-slate-700 rounded-3xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 mb-6 relative z-10">
            <span class="text-4xl">🚀</span>
            <div class="absolute -top-3 -right-3 w-8 h-8 bg-brand-500 text-white rounded-full flex items-center justify-center font-bold border-4 border-white dark:border-slate-900">3</div>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Comparte</h3>
            <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 px-4">Envía el link por WhatsApp, Email o redes. Recibe las confirmaciones al instante.</p>
        </div>
        </div>
    </div>
    </section>

    <section id="catalogo" class="py-20 bg-slate-50 dark:bg-slate-900/50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 reveal">
        <div>
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Explora nuestro catálogo</h2>
            <p class="mt-2 text-slate-600 dark:text-slate-400">Diseños modernos que se adaptan a tu estilo.</p>
        </div>
        
        <div class="bg-white dark:bg-slate-800 p-1.5 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm flex flex-wrap gap-1">
            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors bg-brand-500 text-white shadow" data-filter="all">Todos</button>
            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-brand-500 dark:hover:text-brand-400 transition-colors" data-filter="wedding">Bodas</button>
            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-brand-500 dark:hover:text-brand-400 transition-colors" data-filter="birthday">Cumpleaños</button>
            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-brand-500 dark:hover:text-brand-400 transition-colors" data-filter="corporate">Empresas</button>
        </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" id="catalogGrid">
        <article class="card group bg-white dark:bg-dark-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 dark:border-slate-700 reveal" data-type="wedding">
            <div class="relative overflow-hidden aspect-[3/4]">
            <img src="https://images.unsplash.com/photo-1605106702734-205df224ecce?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Elegant Wedding">
            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
            <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition duration-300">
                <button class="w-full py-3 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-slate-900 dark:text-white font-semibold rounded-xl hover:bg-white dark:hover:bg-slate-800 shadow-lg preview-btn" 
                data-img="https://images.unsplash.com/photo-1605106702734-205df224ecce?q=80&w=800"
                data-title="Boda Minimalista" 
                data-desc="Elegancia pura con tipografía serif y espacios en blanco. Ideal para bodas modernas.">Vista Previa</button>
            </div>
            </div>
            <div class="p-5">
            <div class="text-xs text-brand-500 font-bold mb-1 uppercase tracking-wider">Boda</div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Minimalist Love</h3>
            <div class="flex justify-between items-center mt-3">
                <span class="text-slate-500 dark:text-slate-400 text-sm">Editable 100%</span>
                <span class="font-bold text-slate-900 dark:text-white">$9.99</span>
            </div>
            </div>
        </article>

        <article class="card group bg-white dark:bg-dark-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 dark:border-slate-700 reveal delay-100" data-type="birthday">
            <div class="relative overflow-hidden aspect-[3/4]">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Birthday Party">
                <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition duration-300">
                <button class="w-full py-3 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-slate-900 dark:text-white font-semibold rounded-xl hover:bg-white dark:hover:bg-slate-800 shadow-lg preview-btn"
                data-img="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800"
                data-title="Neon Party" 
                data-desc="Colores vibrantes para fiestas nocturnas inolvidables.">Vista Previa</button>
            </div>
            </div>
            <div class="p-5">
            <div class="text-xs text-accent font-bold mb-1 uppercase tracking-wider">Cumpleaños</div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Neon Night</h3>
                <div class="flex justify-between items-center mt-3">
                <span class="text-slate-500 dark:text-slate-400 text-sm">Animada</span>
                <span class="font-bold text-slate-900 dark:text-white">$5.99</span>
            </div>
            </div>
        </article>

        <article class="card group bg-white dark:bg-dark-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 dark:border-slate-700 reveal delay-200" data-type="corporate">
            <div class="relative overflow-hidden aspect-[3/4]">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Corporate Event">
                <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition duration-300">
                <button class="w-full py-3 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-slate-900 dark:text-white font-semibold rounded-xl hover:bg-white dark:hover:bg-slate-800 shadow-lg preview-btn"
                data-img="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800"
                data-title="Summit 2024" 
                data-desc="Diseño profesional y sobrio para eventos de networking y conferencias.">Vista Previa</button>
            </div>
            </div>
            <div class="p-5">
            <div class="text-xs text-blue-500 font-bold mb-1 uppercase tracking-wider">Corporativo</div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Tech Summit</h3>
                <div class="flex justify-between items-center mt-3">
                <span class="text-slate-500 dark:text-slate-400 text-sm">QR Code</span>
                <span class="font-bold text-slate-900 dark:text-white">$14.99</span>
            </div>
            </div>
        </article>

            <article class="card group bg-white dark:bg-dark-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 dark:border-slate-700 reveal delay-300" data-type="wedding">
            <div class="relative overflow-hidden aspect-[3/4]">
            <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Floral Wedding">
                <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition duration-300">
                <button class="w-full py-3 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-slate-900 dark:text-white font-semibold rounded-xl hover:bg-white dark:hover:bg-slate-800 shadow-lg preview-btn"
                data-img="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=800"
                data-title="Botánica" 
                data-desc="Estilo natural con acuarelas florales. Romántico y atemporal.">Vista Previa</button>
            </div>
            </div>
            <div class="p-5">
            <div class="text-xs text-brand-500 font-bold mb-1 uppercase tracking-wider">Boda</div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Botánica Real</h3>
                <div class="flex justify-between items-center mt-3">
                <span class="text-slate-500 dark:text-slate-400 text-sm">Clásico</span>
                <span class="font-bold text-slate-900 dark:text-white">$12.99</span>
            </div>
            </div>
        </article>
        </div>
        
        <div class="mt-12 text-center">
        <a href="#" class="text-brand-600 dark:text-brand-400 font-semibold hover:text-brand-700 flex items-center justify-center gap-2">Ver todo el catálogo 
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        </div>
    </div>
    </section>

    <section id="crear" class="py-20 bg-white dark:bg-dark-bg text-slate-800 dark:text-white overflow-hidden relative border-t border-b border-slate-100 dark:border-slate-800">
        
        {{-- Los efectos de desenfoque deben usar colores que cambien con el tema --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-400/10 dark:bg-red-900/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-500/10 dark:bg-brand-500/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
            
                <div class="reveal">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight">Tu estudio de diseño personal, <br><span class="text-brand-500 dark:text-brand-400">sin complicaciones.</span></h2>
                    
                    {{-- CAMBIO: text-slate-800 para modo claro y dark:text-slate-300 para modo oscuro --}}
                    <p class="mt-4 text-slate-600 dark:text-slate-300 text-lg">Arrastra, suelta y edita. Nuestro editor está optimizado para que termines tu invitación en menos de 10 minutos.</p>
                    
                    <ul class="mt-8 space-y-4">
                    <li class="flex items-center gap-3">
                        {{-- Los colores del círculo y el ícono también deben ser theme-aware --}}
                        <div class="w-8 h-8 rounded-full bg-brand-500/10 dark:bg-brand-500/20 flex items-center justify-center text-brand-500 dark:text-brand-400"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div>
                        <span class="text-slate-800 dark:text-white">Bibliotecas de stickers y fuentes premium.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-brand-500/10 dark:bg-brand-500/20 flex items-center justify-center text-brand-500 dark:text-brand-400"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg></div>
                        <span class="text-slate-800 dark:text-white">Añade música de fondo a tu invitación.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-brand-500/10 dark:bg-brand-500/20 flex items-center justify-center text-brand-500 dark:text-brand-400"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                        <span class="text-slate-800 dark:text-white">Integración nativa con Google Maps y Waze.</span>
                    </li>
                    </ul>
                    
                    {{-- Usar la función route() de Laravel para el enlace --}}
                    <a href="" class="inline-block mt-8 bg-brand-500 hover:bg-brand-600 text-white px-8 py-3 rounded-xl font-bold transition shadow-lg shadow-brand-500/30">Probar Editor Gratis</a>
                </div>
                
                <div class="relative reveal delay-200">
                    {{-- CAMBIO: Contenedor del Editor Mockup --}}
                    <div class="bg-slate-100 dark:bg-slate-800 rounded-xl shadow-2xl border border-slate-200 dark:border-slate-700 overflow-hidden">
                        
                        {{-- CAMBIO: Barra superior --}}
                        <div class="flex items-center justify-between px-4 py-3 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700">
                        <div class="flex gap-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        </div>
                        <div class="text-xs text-slate-500 dark:text-slate-400 font-mono">Editor - Boda Boho</div>
                        </div>
                        
                        <div class="flex h-[400px]">
                        
                        {{-- CAMBIO: Barra de herramientas lateral --}}
                        <div class="w-16 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-700 flex flex-col items-center py-4 gap-6 text-slate-500 dark:text-slate-400">
                            <svg class="w-6 h-6 hover:text-brand-500 dark:hover:text-white cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16" stroke-width="2" stroke-linecap="round"/></svg>
                            <svg class="w-6 h-6 hover:text-brand-500 dark:hover:text-white cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="2" stroke-linecap="round"/></svg>
                            <svg class="w-6 h-6 text-brand-500 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2" stroke-linecap="round"/></svg>
                        </div>
                        
                        {{-- CAMBIO: Área de trabajo principal del editor --}}
                        <div class="flex-1 bg-slate-50 dark:bg-slate-800 p-8 flex items-center justify-center relative">
                            <div class="bg-white w-[250px] aspect-[3/4] shadow-xl flex items-center justify-center text-slate-800 relative">
                            <div class="absolute inset-0 border-2 border-brand-500 pointer-events-none"></div> <div class="absolute -top-3 -right-3 w-6 h-6 bg-brand-500 rounded-full text-white flex items-center justify-center cursor-nwse-resize shadow">↔</div>
                            <div class="text-center p-4">
                                <p class="font-serif text-2xl">Ana & Juan</p>
                                <p class="text-xs mt-2 uppercase tracking-widest">Se casan</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="precios" class="py-20 bg-white dark:bg-dark-bg transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16 reveal">
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Precios simples</h2>
            <p class="mt-4 text-slate-600 dark:text-slate-400">Paga una vez, usa para siempre. Sin suscripciones ocultas.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
        <div class="border border-slate-200 dark:border-slate-700 bg-white dark:bg-dark-card rounded-2xl p-8 hover:border-brand-300 transition reveal delay-100">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Básico</h3>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Para eventos pequeños.</p>
            <div class="my-6">
                <span class="text-4xl font-extrabold text-slate-900 dark:text-white">$0</span>
            </div>
            <ul class="space-y-3 mb-8 text-sm text-slate-600 dark:text-slate-400">
                <li class="flex gap-2"><svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 1 Diseño básico</li>
                <li class="flex gap-2"><svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Descarga en JPG</li>
                <li class="flex gap-2 opacity-50"><svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg> Sin gestión de RSVP</li>
            </ul>
            <button class="trigger-login w-full py-3 border border-slate-200 dark:border-slate-600 rounded-xl font-semibold hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 transition">Crear Cuenta</button>
        </div>

        <div class="border-2 border-brand-500 rounded-2xl p-8 relative shadow-xl shadow-brand-500/10 reveal delay-200 transform md:-translate-y-4 bg-white dark:bg-dark-card">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-brand-500 text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Más Popular</div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Premium Event</h3>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Todo lo que necesitas.</p>
            <div class="my-6">
                <span class="text-4xl font-extrabold text-slate-900 dark:text-white">$19</span>
                <span class="text-slate-500 dark:text-slate-400">/evento</span>
            </div>
            <ul class="space-y-3 mb-8 text-sm text-slate-600 dark:text-slate-400">
                <li class="flex gap-2"><svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Plantillas Premium</li>
                <li class="flex gap-2"><svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> RSVP Ilimitados</li>
                <li class="flex gap-2"><svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Integración con Maps</li>
                <li class="flex gap-2"><svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Música de fondo</li>
            </ul>
            <button class="trigger-login w-full py-3 bg-brand-500 rounded-xl font-semibold text-white hover:bg-brand-600 shadow-lg shadow-brand-500/30 transition">Elegir Plan</button>
        </div>

        <div class="border border-slate-200 dark:border-slate-700 bg-white dark:bg-dark-card rounded-2xl p-8 hover:border-brand-300 transition reveal delay-300">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Pack Agencia</h3>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-2">Para organizadores.</p>
            <div class="my-6">
                <span class="text-4xl font-extrabold text-slate-900 dark:text-white">$99</span>
                <span class="text-slate-500 dark:text-slate-400">/mes</span>
            </div>
            <ul class="space-y-3 mb-8 text-sm text-slate-600 dark:text-slate-400">
                <li class="flex gap-2"><svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 10 Eventos al mes</li>
                <li class="flex gap-2"><svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Sin marca de agua</li>
                <li class="flex gap-2"><svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Soporte prioritario</li>
            </ul>
            <button class="w-full py-3 border border-slate-200 dark:border-slate-600 rounded-xl font-semibold hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 transition">Contactar Ventas</button>
        </div>
        </div>
    </div>
    </section>

    <section class="py-20 bg-slate-50 dark:bg-slate-900/50 transition-colors duration-300">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-slate-900 dark:text-white mb-10">Preguntas Frecuentes</h2>
        
        <div class="space-y-4">
            <details class="group bg-white dark:bg-dark-card rounded-xl shadow-sm p-4 [&_summary::-webkit-details-marker]:hidden open:ring-1 ring-brand-200 dark:ring-brand-900">
            <summary class="flex items-center justify-between cursor-pointer font-medium text-slate-800 dark:text-slate-200">
                ¿Puedo editar la invitación después de enviarla?
                <span class="ml-1.5 flex-shrink-0 transition duration-300 group-open:-rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </span>
            </summary>
            <p class="mt-4 leading-relaxed text-slate-600 dark:text-slate-400 text-sm">
                Sí, con el Plan Premium tu invitación vive en un enlace web. Cualquier cambio que hagas en el editor se actualiza automáticamente en el enlace que ya enviaste.
            </p>
            </details>

            <details class="group bg-white dark:bg-dark-card rounded-xl shadow-sm p-4 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex items-center justify-between cursor-pointer font-medium text-slate-800 dark:text-slate-200">
                ¿Cómo reciben los invitados la invitación?
                <span class="ml-1.5 flex-shrink-0 transition duration-300 group-open:-rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </span>
            </summary>
            <p class="mt-4 leading-relaxed text-slate-600 dark:text-slate-400 text-sm">
                Generamos un enlace único (ej: invitaplus.com/tu-boda) o una imagen de alta calidad que puedes enviar por WhatsApp, Telegram, Email o SMS.
            </p>
            </details>

            <details class="group bg-white dark:bg-dark-card rounded-xl shadow-sm p-4 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex items-center justify-between cursor-pointer font-medium text-slate-800 dark:text-slate-200">
                ¿Existen reembolsos?
                <span class="ml-1.5 flex-shrink-0 transition duration-300 group-open:-rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </span>
            </summary>
            <p class="mt-4 leading-relaxed text-slate-600 dark:text-slate-400 text-sm">
                Si no estás satisfecho con el resultado antes de publicar o descargar la versión final, contáctanos y te ayudaremos. Al ser un producto digital, los reembolsos se evalúan caso por caso.
            </p>
            </details>
        </div>
    </div>
    </section>

    <section class="py-20 bg-brand-600 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold">Empieza a diseñar hoy</h2>
            <p class="mt-4 text-brand-100 text-lg">Únete a más de 10,000 personas celebrando momentos únicos.</p>
            <button class="trigger-login inline-block mt-8 bg-white text-brand-600 font-bold px-8 py-4 rounded-xl shadow-xl hover:bg-slate-100 transition transform hover:-translate-y-1">Crear mi Invitación</button>
        </div>
    </section>

    <div id="cookieBanner" class="fixed bottom-0 left-0 right-0 p-4 bg-white dark:bg-slate-800 border-t border-slate-200 dark:border-slate-700 shadow-[0_-10px_40px_rgba(0,0,0,0.1)] z-40 transform translate-y-full transition-transform duration-500 flex flex-col sm:flex-row items-center justify-between gap-4 max-w-7xl mx-auto rounded-t-xl sm:rounded-none">
        <div class="text-sm text-slate-600 dark:text-slate-300">
        Usamos cookies para mejorar tu experiencia. Al continuar navegando, aceptas nuestra política.
        </div>
        <div class="flex gap-3">
        <button id="acceptCookies" class="bg-brand-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-brand-600 transition">Aceptar</button>
        <button id="rejectCookies" class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 px-4 py-2 text-sm transition">Cerrar</button>
        </div>
    </div>

    <div id="modal" class="fixed inset-0 hidden z-[100] items-center justify-center p-4">
        <div id="modalBackdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0"></div>
        <div id="modalContent" class="relative bg-white dark:bg-dark-card rounded-2xl shadow-2xl max-w-4xl w-full overflow-hidden transform scale-95 opacity-0 transition-all duration-300">
            
            <div class="grid md:grid-cols-2">
                <div class="bg-slate-100 dark:bg-slate-900 p-8 flex items-center justify-center">
                <img id="modalImage" src="" alt="Preview" class="rounded-lg shadow-lg max-h-[60vh] object-cover">
                </div>
                <div class="p-8 flex flex-col justify-center">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 id="modalTitle" class="text-2xl font-bold text-slate-900 dark:text-white">Titulo</h3>
                        <div class="flex gap-1 mt-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 text-slate-300 dark:text-slate-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                    </div>
                    <button id="modalClose" class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-white rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <p id="modalDesc" class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">Descripción detallada de la plantilla.</p>
                
                <div class="space-y-3">
                    <button class="w-full py-3 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-xl shadow-lg shadow-brand-500/30 transition transform hover:-translate-y-0.5">Editar esta plantilla</button>
                    <button class="w-full py-3 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-200 font-bold rounded-xl hover:bg-slate-50 dark:hover:bg-slate-700 transition">Ver demostración en vivo</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div id="checkoutModal" class="fixed inset-0 hidden z-[120] items-center justify-center p-4">
        <div id="checkoutBackdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm transition-opacity opacity-0"></div>
        <div id="checkoutContent" class="relative bg-white dark:bg-slate-800 rounded-2xl shadow-2xl max-w-lg w-full overflow-hidden transform scale-95 opacity-0 transition-all duration-300 border border-slate-100 dark:border-slate-700">
            <button id="checkoutClose" class="absolute top-4 right-4 z-10 p-2 text-slate-400 hover:text-slate-600 dark:hover:text-white rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <div class="p-8">
                <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-2">Checkout Pro</h3>
                <p class="text-slate-500 dark:text-slate-400 mb-6">Completa el pago único para descargar tu archivo HTML.</p>

                <div class="flex justify-between items-center p-4 bg-brand-50 dark:bg-slate-700 rounded-xl mb-6">
                    <span class="font-medium text-slate-700 dark:text-slate-200">Plantilla: <span id="checkoutTemplateName" class="font-bold"></span></span>
                    <span id="checkoutTemplatePrice" class="text-xl font-bold text-brand-600 dark:text-brand-300">$9.99 USD</span>
                </div>

                <h4 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Elige tu método de pago</h4>
                
                <div class="space-y-3">
                    <button class="payment-option w-full flex items-center justify-between p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl hover:ring-2 ring-brand-500 transition">
                        <span class="font-semibold text-slate-800 dark:text-slate-100">Tarjeta de Crédito / Débito</span>
                        <div class="flex gap-2">
                            <img src="https://flagcdn.com/w20/us.png" alt="Card" class="w-5 h-4 rounded-sm">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" class="h-4">
                        </div>
                    </button>
                    
                    <button class="payment-option w-full flex items-center justify-between p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl hover:ring-2 ring-brand-500 transition">
                        <span class="font-semibold text-slate-800 dark:text-slate-100">PayPal</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal_Logo_for_White_Background.svg" class="h-5">
                    </button>

                    <button class="payment-option w-full flex items-center justify-between p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl hover:ring-2 ring-brand-500 transition">
                        <span class="font-semibold text-slate-800 dark:text-slate-100">Pix (Brasil)</span>
                        <div class="flex gap-2 items-center">
                            <img src="https://flagcdn.com/w20/br.png" alt="BR" class="w-5 h-4 rounded-sm">
                            <span class="text-sm font-bold text-green-600">PIX</span>
                        </div>
                    </button>

                    <button class="payment-option w-full flex items-center justify-between p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl hover:ring-2 ring-brand-500 transition">
                        <span class="font-semibold text-slate-800 dark:text-slate-100">QR Pago / Pago Efectivo</span>
                        <div class="flex gap-2 items-center">
                                <img src="https://flagcdn.com/w20/pe.png" alt="PE" class="w-5 h-4 rounded-sm">
                                <img src="https://flagcdn.com/w20/bo.png" alt="BO" class="w-5 h-4 rounded-sm">
                            <svg class="w-5 h-5 text-brand-500" fill="currentColor" viewBox="0 0 24 24"><path d="M8 12.001c.552 0 1-.448 1-1s-.448-1-1-1-1 .448-1 1 .448 1 1 1zm0 4c.552 0 1-.448 1-1s-.448-1-1-1-1 .448-1 1 .448 1 1 1zm0-8c.552 0 1-.448 1-1s-.448-1-1-1-1 .448-1 1 .448 1 1 1zm12 2v-4c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h4v-2H4V6h16v4h2V6c0-1.103-.897-2-2-2zm-2 16h4c1.103 0 2-.897 2-2V14c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2zm0-2v-4h4l.001 4H18z"/></svg>
                        </div>
                    </button>
                </div>
                
                <button class="w-full py-3 mt-6 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg shadow-green-600/30 transition transform hover:-translate-y-0.5">Proceder al Pago</button>
                
                <p class="mt-4 text-xs text-center text-slate-400">Transacción segura y protegida por un proveedor externo.</p>
            </div>
        </div>
    </div>

    <div id="loginModal" class="fixed inset-0 hidden z-[110] items-center justify-center p-4">
        <div id="loginBackdrop" class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity opacity-0"></div>
        <div id="loginContent" class="relative bg-white dark:bg-slate-800 rounded-2xl shadow-2xl max-w-md w-full p-8 transform scale-95 opacity-0 transition-all duration-300 border border-slate-100 dark:border-slate-700">
            <button id="loginClose" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 dark:hover:text-white"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
            
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-brand-100 dark:bg-brand-900 text-brand-600 dark:text-brand-300 mb-4">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Bienvenido de nuevo</h3>
                <p class="text-slate-500 dark:text-slate-400 mt-2">Ingresa tus datos para continuar</p>
            </div>

            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Email</label>
                    <input type="email" class="w-full px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-2 focus:ring-brand-500 outline-none transition" placeholder="hola@ejemplo.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Contraseña</label>
                    <input type="password" class="w-full px-4 py-2 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-2 focus:ring-brand-500 outline-none transition" placeholder="••••••••">
                </div>
                <button type="button" class="w-full py-3 bg-brand-500 text-white font-bold rounded-xl shadow-lg hover:bg-brand-600 transition">Iniciar Sesión</button>
            </form>
            
            <div class="mt-6 text-center text-sm text-slate-500 dark:text-slate-400">
                ¿No tienes cuenta? <a href="#" class="trigger-register text-brand-500 font-bold hover:underline">Regístrate</a>
            </div>
        </div>
    </div>




    <div id="registerModal" class="fixed inset-0 hidden z-[120] items-center justify-center p-4">
        <div id="registerBackdrop" class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity opacity-0"></div>
        
        <div id="registerContent" class="relative bg-white dark:bg-slate-800 rounded-2xl shadow-2xl max-w-md w-full p-8 transform scale-95 opacity-0 transition-all duration-300 border border-slate-100 dark:border-slate-700">
            
            <button id="registerClose" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 dark:hover:text-white">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- Contenido del formulario --}}
            @include('users.partials.register-modal-content')

        </div>
    </div>


</div>