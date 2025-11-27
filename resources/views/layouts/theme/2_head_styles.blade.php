<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
    :root { color-scheme: light dark; }

    /* Efecto cristal mejorado para soportar modo oscuro */
    .glass { 
        background: rgba(255, 255, 255, 0.7); 
        backdrop-filter: blur(12px); 
        -webkit-backdrop-filter: blur(12px); 
        border-bottom: 1px solid rgba(255,255,255,0.3); 
    }
    .dark .glass { 
        background: rgba(15, 23, 42, 0.7); 
        border-bottom: 1px solid rgba(255,255,255,0.05); 
    }

    .card-hover { transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); }
    .card-hover:hover { transform: translateY(-5px); }

    /* Scroll Reveal Helper Class */
    .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
    .reveal.active { opacity: 1; transform: translateY(0); }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
    .dark ::-webkit-scrollbar-thumb { background: #475569; }

    :focus-visible { outline: 2px solid #4F46E5; outline-offset: 2px; }
</style>