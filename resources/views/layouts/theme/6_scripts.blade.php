  <script>
    (function () {
      'use strict';
      
      const $ = sel => document.querySelector(sel);
      const $$ = sel => document.querySelectorAll(sel);
      
      // 1. Dynamic Year
      $('#year').textContent = new Date().getFullYear();

      // 2. Header Scroll Effect
      const header = $('#site-header');
      window.addEventListener('scroll', () => {
        if(window.scrollY > 20) {
          header.classList.add('glass', 'shadow-md');
          header.classList.remove('py-4');
          header.classList.add('py-2');
        } else {
          header.classList.remove('glass', 'shadow-md', 'py-2');
          header.classList.add('py-4');
        }
      });

      // 3. Mobile Menu Logic
      const btnMobile = $('#btnMobile');
      const closeMobile = $('#closeMobile');
      const mobileMenu = $('#mobileMenu');
      const mobileLinks = $$('.mobile-link');
      
      function toggleMenu() {
        mobileMenu.classList.toggle('translate-x-full');
        document.body.classList.toggle('overflow-hidden');
      }
      
      btnMobile.addEventListener('click', toggleMenu);
      closeMobile.addEventListener('click', toggleMenu);
      mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

      // 4. Dark Mode Logic
      const themeToggle = $('#themeToggle');
      const themeToggleMobile = $('#themeToggleMobile');
      
      function toggleTheme() {
         if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light';
            $('#icon-sun').classList.add('hidden');
            $('#icon-moon').classList.remove('hidden');
         } else {
            document.documentElement.classList.add('dark');
            localStorage.theme = 'dark';
            $('#icon-sun').classList.remove('hidden');
            $('#icon-moon').classList.add('hidden');
         }
      }

      // Initial Icon State
      if (document.documentElement.classList.contains('dark')) {
          $('#icon-sun').classList.remove('hidden');
          $('#icon-moon').classList.add('hidden');
      }

      themeToggle.addEventListener('click', toggleTheme);
      themeToggleMobile.addEventListener('click', toggleTheme);

      // 5. Language Selector Logic
      const langOptions = $$('.lang-option');
      const langMobiles = $$('.lang-mobile');
      const currentFlag = $('#currentFlag');
      const currentLabel = $('#currentLangLabel');

      function setLanguage(code, flagUrl) {
         currentFlag.src = flagUrl;
         currentLabel.textContent = code;
         // Here you would add real translation logic
      }

      langOptions.forEach(btn => {
         btn.addEventListener('click', () => setLanguage(btn.dataset.lang, btn.dataset.flag));
      });
      
      langMobiles.forEach(btn => {
         btn.addEventListener('click', () => {
             // Visual feedback for mobile
             langMobiles.forEach(b => b.classList.remove('ring-2', 'ring-brand-500'));
             btn.classList.add('ring-2', 'ring-brand-500');
             setLanguage('ES', btn.dataset.flag); // Simplified for demo
         });
      });

      // 6. Catalog Filtering
      const filterBtns = $$('.filter-btn');
      const cards = $$('.card');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          filterBtns.forEach(b => {
             b.classList.remove('bg-brand-500', 'text-white', 'shadow');
             b.classList.add('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-50', 'dark:hover:bg-slate-700');
          });
          btn.classList.remove('text-slate-600', 'dark:text-slate-400', 'hover:bg-slate-50', 'dark:hover:bg-slate-700');
          btn.classList.add('bg-brand-500', 'text-white', 'shadow');

          const filter = btn.dataset.filter;
          cards.forEach(card => {
             if(filter === 'all' || card.dataset.type === filter) {
                card.style.display = 'block';
                card.classList.remove('reveal');
                void card.offsetWidth; 
                card.classList.add('reveal', 'active');
             } else {
                card.style.display = 'none';
             }
          });
        });
      });

      // 7. Scroll Reveal
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
           if(entry.isIntersecting) {
              entry.target.classList.add('active');
           }
        });
      }, { threshold: 0.1 });
      $$('.reveal').forEach(el => observer.observe(el));

      // 8. Preview Modal Logic
      const modal = $('#modal');
      const modalBackdrop = $('#modalBackdrop');
      const modalContent = $('#modalContent');
      const previewBtns = $$('.preview-btn');
      const modalClose = $('#modalClose');
      
      function openModal(img, title, desc) {
         $('#modalImage').src = img;
         $('#modalTitle').textContent = title;
         $('#modalDesc').textContent = desc;
         modal.classList.remove('hidden');
         modal.classList.add('flex');
         setTimeout(() => {
           modalBackdrop.classList.remove('opacity-0');
           modalContent.classList.remove('scale-95', 'opacity-0');
           modalContent.classList.add('scale-100', 'opacity-100');
         }, 10);
      }
      function closeModal() {
         modalBackdrop.classList.add('opacity-0');
         modalContent.classList.remove('scale-100', 'opacity-100');
         modalContent.classList.add('scale-95', 'opacity-0');
         setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
         }, 300);
      }
      previewBtns.forEach(btn => {
         btn.addEventListener('click', (e) => {
            e.stopPropagation();
            openModal(btn.dataset.img, btn.dataset.title, btn.dataset.desc);
         });
      });
      modalClose.addEventListener('click', closeModal);
      modalBackdrop.addEventListener('click', closeModal);

      // 9. Login Modal Logic
      const loginModal = $('#loginModal');
      const loginBackdrop = $('#loginBackdrop');
      const loginContent = $('#loginContent');
      const loginTriggers = $$('.trigger-login');
      const loginClose = $('#loginClose');

      function openLogin() {
          if (mobileMenu.classList.contains('translate-x-0')) toggleMenu(); // Close mobile menu if open
          loginModal.classList.remove('hidden');
          loginModal.classList.add('flex');
          setTimeout(() => {
             loginBackdrop.classList.remove('opacity-0');
             loginContent.classList.remove('scale-95', 'opacity-0');
             loginContent.classList.add('scale-100', 'opacity-100');
          }, 10);
      }
      function closeLogin() {
          loginBackdrop.classList.add('opacity-0');
          loginContent.classList.remove('scale-100', 'opacity-100');
          loginContent.classList.add('scale-95', 'opacity-0');
          setTimeout(() => {
             loginModal.classList.add('hidden');
             loginModal.classList.remove('flex');
          }, 300);
      }
      loginTriggers.forEach(btn => btn.addEventListener('click', (e) => {
          e.preventDefault();
          openLogin();
      }));
      loginClose.addEventListener('click', closeLogin);
      loginBackdrop.addEventListener('click', closeLogin);

      // 10. Cookie Banner Logic
      setTimeout(() => {
         if(!localStorage.getItem('cookiesAccepted')) {
            $('#cookieBanner').classList.remove('translate-y-full');
         }
      }, 2000);
      
      $('#acceptCookies').addEventListener('click', () => {
         localStorage.setItem('cookiesAccepted', 'true');
         $('#cookieBanner').classList.add('translate-y-full');
      });
      $('#rejectCookies').addEventListener('click', () => {
         $('#cookieBanner').classList.add('translate-y-full');
      });

      // 11. Register Modal Logic
      const registerModal = $('#registerModal');
      const registerBackdrop = $('#registerBackdrop');
      const registerContent = $('#registerContent');
      const registerTriggers = $$('.trigger-register');
      const registerClose = $('#registerClose');

      function openRegister() {
         registerModal.classList.remove('hidden');
         registerModal.classList.add('flex');
         setTimeout(() => {
            registerBackdrop.classList.remove('opacity-0');
            registerContent.classList.remove('scale-95', 'opacity-0');
            registerContent.classList.add('scale-100', 'opacity-100');
         }, 10);
      }

      function closeRegister() {
         registerBackdrop.classList.add('opacity-0');
         registerContent.classList.remove('scale-100', 'opacity-100');
         registerContent.classList.add('scale-95', 'opacity-0');
         setTimeout(() => {
            registerModal.classList.add('hidden');
            registerModal.classList.remove('flex');
         }, 300);
      }

      registerTriggers.forEach(btn => btn.addEventListener('click', (e) => {
         e.preventDefault();
         closeLogin(); // si el modal login estaba abierto
         openRegister();
      }));

      registerClose.addEventListener('click', closeRegister);
      registerBackdrop.addEventListener('click', closeRegister);



      // Permitir ir desde el modal de registro -> login
      $$('.trigger-login').forEach(btn => {
         btn.addEventListener('click', (e) => {
            e.preventDefault();
            closeRegister(); // cerrar el modal de registro si está abierto
            openLogin();     // abrir el modal de login
         });
      });

      // Global Escape Key
      document.addEventListener('keydown', (e) => {
         if(e.key === 'Escape') {
            closeModal();
            closeLogin();
         }
      });

    })();
  </script>