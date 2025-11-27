<script>
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
</script>
<script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#f0f3ff',
              100: '#e0e7ff',
              500: '#4F46E5', 
              600: '#4338ca',
              900: '#312e81',
            },
            accent: '#EC4899', 
            dark: {
              bg: '#0f172a',     // Slate 900
              card: '#1e293b',   // Slate 800
              border: '#334155'  // Slate 700
            }
          },
          fontFamily: {
            pop: ['Poppins', 'system-ui', 'sans-serif']
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'fade-up': 'fadeUp 0.8s ease-out forwards',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' },
            },
            fadeUp: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            }
          }
        }
      }
    }
  </script>