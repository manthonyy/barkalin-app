import './bootstrap';

const navToggle = document.querySelector('[data-nav-toggle]');
const nav = document.querySelector('[data-nav]');

if (navToggle instanceof HTMLButtonElement && nav instanceof HTMLElement) {
    const closeNav = () => navToggle.setAttribute('aria-expanded', 'false');

    navToggle.addEventListener('click', () => {
        const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
        navToggle.setAttribute('aria-expanded', String(!isExpanded));
    });

    nav.addEventListener('click', (event) => {
        if (event.target instanceof Element && event.target.closest('a')) {
            closeNav();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeNav();
        }
    });
}
