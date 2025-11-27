    <header id="site-header" class="fixed w-full top-0 left-0 z-50 transition-all duration-300">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">
          <a href="#" class="flex items-center gap-2 group z-50" aria-label="Ir al inicio">
            <div class="relative w-10 h-10 flex items-center justify-center bg-brand-500 rounded-xl text-white shadow-lg shadow-brand-500/30 group-hover:scale-105 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
              </svg>
            </div>
            <span class="text-xl font-bold text-slate-900 dark:text-white tracking-tight">Invita<span class="text-brand-500">Plus</span></span>
          </a>

          <nav class="hidden md:flex items-center gap-8 bg-white/50 dark:bg-slate-800/50 px-6 py-2 rounded-full border border-white/50 dark:border-slate-700/50 shadow-sm backdrop-blur-md">
            <a href="#como-funciona" class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-brand-500 dark:hover:text-brand-400 transition">Cómo funciona</a>
            <a href="#catalogo" class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-brand-500 dark:hover:text-brand-400 transition">Catálogo</a>
            <a href="#precios" class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-brand-500 dark:hover:text-brand-400 transition">Precios</a>
            <button class="trigger-login text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-brand-500 dark:hover:text-brand-400 transition">Login</button>
          </nav>

          <div class="flex items-center gap-3">
            
            <button id="themeToggle" class="hidden md:flex p-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition">
              <svg id="icon-sun" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
              <svg id="icon-moon" class="w-5 h-5 block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
            </button>

            <div class="relative group hidden sm:block">
              <button class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition text-sm font-medium border border-transparent dark:border-slate-700">
                <img id="currentFlag" src="https://flagcdn.com/w20/es.png" alt="ES" class="w-5 h-4 rounded-sm object-cover">
                <span id="currentLangLabel" class="uppercase text-slate-700 dark:text-slate-200">ES</span>
                <svg class="w-3 h-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
              </button>
              
              <div class="absolute right-0 mt-2 w-40 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-right z-50 overflow-hidden">
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 text-sm hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 transition" data-lang="es" data-flag="https://flagcdn.com/w20/es.png">
                   <img src="https://flagcdn.com/w20/es.png" class="w-5 h-4 rounded-sm"> Español
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 text-sm hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 transition" data-lang="en" data-flag="https://flagcdn.com/w20/us.png">
                   <img src="https://flagcdn.com/w20/us.png" class="w-5 h-4 rounded-sm"> English
                </button>
                <button class="lang-option w-full flex items-center gap-3 px-4 py-3 text-sm hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 transition" data-lang="pt" data-flag="https://flagcdn.com/w20/br.png">
                   <img src="https://flagcdn.com/w20/br.png" class="w-5 h-4 rounded-sm"> Português
                </button>
              </div>
            </div>

            <button class="trigger-login hidden md:inline-flex bg-brand-500 hover:bg-brand-600 text-white text-sm font-medium px-5 py-2.5 rounded-xl shadow-lg shadow-brand-500/25 transition-all hover:-translate-y-0.5">
              Empezar Gratis
            </button>

            <button id="btnMobile" class="md:hidden p-2 text-slate-600 dark:text-slate-300" aria-label="Menu">
              <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
          </div>
        </div>
      </div>
      
      <div id="mobileMenu" class="fixed inset-0 z-40 bg-white dark:bg-slate-900 transform translate-x-full transition-transform duration-300 md:hidden flex flex-col pt-24 px-6 gap-6 h-screen overflow-y-auto">
         <button id="closeMobile" class="absolute top-6 right-6 p-2 bg-slate-100 dark:bg-slate-800 dark:text-white rounded-full"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
         
         <a href="#como-funciona" class="text-2xl font-bold text-slate-800 dark:text-slate-100 mobile-link">Cómo funciona</a>
         <a href="#catalogo" class="text-2xl font-bold text-slate-800 dark:text-slate-100 mobile-link">Catálogo</a>
         <a href="#precios" class="text-2xl font-bold text-slate-800 dark:text-slate-100 mobile-link">Precios</a>
         <button class="trigger-login text-left text-2xl font-bold text-slate-800 dark:text-slate-100 mobile-link">Iniciar Sesión</button>
         
         <hr class="border-slate-100 dark:border-slate-800">

         <div class="flex flex-col gap-4">
            <div class="flex justify-between items-center">
               <span class="text-slate-600 dark:text-slate-400 font-medium">Tema</span>
               <button id="themeToggleMobile" class="flex items-center gap-2 bg-slate-100 dark:bg-slate-800 px-4 py-2 rounded-lg text-slate-700 dark:text-slate-200">
                  <span class="dark:hidden flex items-center gap-2"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg> Claro</span>
                  <span class="hidden dark:flex items-center gap-2"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg> Oscuro</span>
               </button>
            </div>
            
            <div class="flex justify-between items-center">
               <span class="text-slate-600 dark:text-slate-400 font-medium">Idioma</span>
               <div class="flex gap-2">
                  <button class="lang-mobile p-2 rounded-lg bg-slate-100 dark:bg-slate-800 hover:ring-2 ring-brand-500 transition" data-flag="https://flagcdn.com/w40/es.png"><img src="https://flagcdn.com/w40/es.png" class="w-6 h-auto rounded-sm"></button>
                  <button class="lang-mobile p-2 rounded-lg bg-slate-100 dark:bg-slate-800 hover:ring-2 ring-brand-500 transition" data-flag="https://flagcdn.com/w40/us.png"><img src="https://flagcdn.com/w40/us.png" class="w-6 h-auto rounded-sm"></button>
                  <button class="lang-mobile p-2 rounded-lg bg-slate-100 dark:bg-slate-800 hover:ring-2 ring-brand-500 transition" data-flag="https://flagcdn.com/w40/br.png"><img src="https://flagcdn.com/w40/br.png" class="w-6 h-auto rounded-sm"></button>
               </div>
            </div>
         </div>

         <button class="trigger-login w-full bg-brand-500 text-white text-center py-4 rounded-xl font-bold shadow-lg mt-4">Crear Cuenta Gratis</button>
      </div>
    </header>