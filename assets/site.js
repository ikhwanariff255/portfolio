// Shared behaviour for every page: mobile menu toggle and footer year
(function () {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (menuBtn && mobileMenu) {
        const setOpen = (open) => {
            mobileMenu.classList.toggle('translate-x-full', !open);
            mobileMenu.classList.toggle('invisible', !open);
            menuIcon.textContent = open ? 'close' : 'menu';
            menuBtn.setAttribute('aria-expanded', String(open));
            document.body.style.overflow = open ? 'hidden' : '';
        };

        menuBtn.addEventListener('click', () => {
            setOpen(mobileMenu.classList.contains('translate-x-full'));
        });
        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => setOpen(false));
        });
    }

    document.querySelectorAll('[data-year]').forEach((el) => {
        el.textContent = new Date().getFullYear();
    });
})();
