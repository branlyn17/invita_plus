@extends('layouts.theme.4_app')

@section('content')

    <section class="relative overflow-hidden pt-10 pb-20 lg:pt-20 lg:pb-28">
        
        {{-- Fondo degradado sutil para el header del catálogo (usa tus colores) --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1200px] h-[600px] bg-gradient-to-tr from-brand-100/40 via-purple-100/30 to-transparent dark:from-brand-900/20 dark:via-purple-900/10 rounded-[100%] blur-3xl -z-10 transition-colors duration-500"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto reveal active">
                
                {{-- TÍTULO PRINCIPAL DEL CATÁLOGO --}}
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-[1.1] mt-[3rem]">
                    Explora nuestra <br> <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-500 to-accent">Colección Completa.</span>
                </h1>
                <p class="mt-6 text-lg md:text-xl text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl mx-auto">
                    Más de 200 plantillas listas para Bodas, Cumpleaños, Eventos Corporativos y más. ¡Encuentra la inspiración!
                </p>
                
                {{-- BARRA DE BÚSQUEDA DEL CATÁLOGO --}}
                <div class="mt-10 max-w-2xl mx-auto">
                    <div class="relative flex items-center bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 p-1">
                        <input type="text" placeholder="Buscar por tema: Boda, Floral, Infantil..." class="w-full px-4 py-3 bg-transparent text-slate-700 dark:text-slate-200 focus:outline-none placeholder-slate-400 dark:placeholder-slate-500">
                        <button class="bg-brand-500 text-white p-3 rounded-xl hover:bg-brand-600 transition flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="galeria-catalogo" class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- FILTROS AVANZADOS (FLEXIBLE) --}}
            <div class="flex flex-wrap justify-center md:justify-start gap-3 mb-10 reveal">
                <button class="filter-btn-full px-4 py-2 text-sm font-medium rounded-full bg-brand-500 text-white shadow-md transition" data-filter="all">Todas</button>
                <button class="filter-btn-full px-4 py-2 text-sm font-medium rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 transition" data-filter="bodas">Bodas</button>
                <button class="filter-btn-full px-4 py-2 text-sm font-medium rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 transition" data-filter="cumpleanos">Cumpleaños</button>
                <button class="filter-btn-full px-4 py-2 text-sm font-medium rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 transition" data-filter="baby">Baby Shower</button>
                <button class="filter-btn-full px-4 py-2 text-sm font-medium rounded-full text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 transition" data-filter="corporativo">Corporativos</button>
            </div>

            {{-- GALERÍA DE INVITACIONES (MÁS GRANDE Y VARIADA) --}}
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                
                {{-- ITERACIÓN DE INVITACIONES (Ejemplos) --}}
                
                @for ($i = 1; $i <= 10; $i++)
                <div class="card card-hover bg-white dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition-shadow overflow-hidden reveal delay-{{ $i * 50 }}" data-type="bodas">
                    <div class="relative aspect-[3/4]">
                        <img src="https://via.placeholder.com/300x400.png?text=Boda+Vintage+{{ $i }}" alt="Boda Vintage" class="w-full h-full object-cover">
                        <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-1 rounded-full">Boda</span>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold truncate text-slate-900 dark:text-white">Estilo Floral Clásico</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">
                            <span class="font-bold text-brand-500">$9.99</span>
                        </p>
                    </div>
                    <button class="w-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 py-2 text-xs font-semibold hover:bg-slate-200 dark:hover:bg-slate-600 transition">Vista Rápida</button>
                </div>
                @endfor
                
                {{-- Ejemplo de una Tarjeta Vertical (para variar) --}}
                <div class="card card-hover bg-white dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition-shadow overflow-hidden reveal delay-600" data-type="cumpleanos">
                    <div class="relative aspect-[4/3]">
                        <img src="https://via.placeholder.com/400x300.png?text=Cumple+Infantil+1" alt="Cumpleaños Infantil" class="w-full h-full object-cover">
                        <span class="absolute top-2 right-2 bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">Cumpleaños</span>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold truncate text-slate-900 dark:text-white">Cumpleaños de Aventuras</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">
                            <span class="font-bold text-brand-500">Gratis</span>
                        </p>
                    </div>
                    <button class="w-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 py-2 text-xs font-semibold hover:bg-slate-200 dark:hover:bg-slate-600 transition">Vista Rápida</button>
                </div>
                
                {{-- Más ejemplos de otros tipos --}}
                 @for ($i = 1; $i <= 4; $i++)
                <div class="card card-hover bg-white dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition-shadow overflow-hidden reveal delay-{{ 600 + $i * 50 }}" data-type="corporativo">
                    <div class="relative aspect-[3/4]">
                        <img src="https://via.placeholder.com/300x400.png?text=Corp+Moderno+{{ $i }}" alt="Corporativo Moderno" class="w-full h-full object-cover">
                        <span class="absolute top-2 right-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-1 rounded-full">Corp.</span>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold truncate text-slate-900 dark:text-white">Lanzamiento Digital</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">
                            <span class="font-bold text-brand-500">$14.99</span>
                        </p>
                    </div>
                    <button class="w-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 py-2 text-xs font-semibold hover:bg-slate-200 dark:hover:bg-slate-600 transition">Vista Rápida</button>
                </div>
                @endfor
                
            </div>
            
            {{-- PAGINACIÓN --}}
            <div class="mt-16 flex justify-center reveal">
                <button class="bg-brand-500 hover:bg-brand-600 text-white px-6 py-3 rounded-full font-bold transition shadow-lg shadow-brand-500/30">Cargar Más Plantillas</button>
            </div>

        </div>
    </section>

@endsection

@section('javascript')
<script>
    // ... (Código anterior de 1 a 5)

// 6. Catalog Filtering (Ajustado para el catálogo completo)
const filterBtnsFull = $$('.filter-btn-full');
const catalogCards = $$('.card'); // Usamos la clase genérica 'card'

filterBtnsFull.forEach(btn => {
    btn.addEventListener('click', () => {
        // Resetear estilos de todos los botones
        filterBtnsFull.forEach(b => {
            b.classList.remove('bg-brand-500', 'text-white', 'shadow-md');
            b.classList.add('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
        });
        
        // Aplicar estilos al botón seleccionado
        btn.classList.remove('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-100', 'dark:hover:bg-slate-700');
        btn.classList.add('bg-brand-500', 'text-white', 'shadow-md');

        const filter = btn.dataset.filter;
        catalogCards.forEach(card => {
            // Lógica de filtrado
            if(filter === 'all' || card.dataset.type === filter) {
                card.style.display = 'block';
                // Reiniciar animación Scroll Reveal
                card.classList.remove('reveal');
                void card.offsetWidth; 
                card.classList.add('reveal');
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// ... (Resto del código, Scroll Reveal, Modales, etc.)
</script>
@endsection