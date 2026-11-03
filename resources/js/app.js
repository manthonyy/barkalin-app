import './bootstrap';

const navToggle = document.querySelector('[data-nav-toggle]');
const nav = document.querySelector('[data-nav]');
const navbar = document.querySelector('[data-navbar]');

if (navToggle instanceof HTMLButtonElement && nav instanceof HTMLElement) {
    const toggleLabel = navToggle.querySelector('.sr-only');
    const closeNav = () => {
        navToggle.setAttribute('aria-expanded', 'false');

        if (toggleLabel instanceof HTMLElement) {
            toggleLabel.textContent = 'Buka menu navigasi';
        }
    };

    navToggle.addEventListener('click', () => {
        const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
        navToggle.setAttribute('aria-expanded', String(!isExpanded));

        if (toggleLabel instanceof HTMLElement) {
            toggleLabel.textContent = isExpanded ? 'Buka menu navigasi' : 'Tutup menu navigasi';
        }
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

if (
    navbar instanceof HTMLElement &&
    document.body.matches('.home-page, .page-about, .page-operations')
) {
    let scrollUpdateScheduled = false;
    const footer = document.body.matches('.page-about, .page-operations')
        ? document.querySelector('.footer')
        : null;

    const updateNavbar = () => {
        navbar.toggleAttribute('data-scrolled', window.scrollY > 24);
        const footerBounds = footer?.getBoundingClientRect();
        navbar.toggleAttribute(
            'data-footer',
            footerBounds !== undefined &&
                footerBounds.top < window.innerHeight &&
                footerBounds.bottom > 0,
        );
        scrollUpdateScheduled = false;
    };

    window.addEventListener('scroll', () => {
        if (scrollUpdateScheduled) {
            return;
        }

        scrollUpdateScheduled = true;
        window.requestAnimationFrame(updateNavbar);
    }, { passive: true });

    updateNavbar();
}

if (
    'IntersectionObserver' in window &&
    !window.matchMedia('(prefers-reduced-motion: reduce)').matches
) {
    const revealElements = document.querySelectorAll('[data-reveal]');

    if (revealElements.length > 0) {
        document.body.classList.add('has-reveal');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -32px 0px' });

        revealElements.forEach((element) => revealObserver.observe(element));
    }
}

const detailModal = document.querySelector('[data-detail-modal]');

if (detailModal instanceof HTMLElement) {
    const modalTitle = detailModal.querySelector('[data-modal-title]');
    const modalCategory = detailModal.querySelector('[data-modal-category]');
    const modalImage = detailModal.querySelector('[data-modal-image]');
    const modalDescription = detailModal.querySelector('[data-modal-description]');
    const closeButton = detailModal.querySelector('[data-modal-close]');
    const modalPanel = detailModal.querySelector('[role="dialog"]');
    let activeTrigger = null;
    let previousBodyOverflow = '';

    const closeModal = () => {
        if (detailModal.hidden) {
            return;
        }

        detailModal.hidden = true;
        document.body.style.overflow = previousBodyOverflow;

        if (activeTrigger instanceof HTMLElement && activeTrigger.isConnected) {
            activeTrigger.focus();
        }

        activeTrigger = null;
    };

    document.querySelectorAll('[data-detail-card]').forEach((card) => {
        if (!(card instanceof HTMLButtonElement)) {
            return;
        }

        card.addEventListener('click', () => {
            if (
                !(modalTitle instanceof HTMLElement) ||
                !(modalCategory instanceof HTMLElement) ||
                !(modalImage instanceof HTMLImageElement) ||
                !(modalDescription instanceof HTMLElement) ||
                !(closeButton instanceof HTMLButtonElement)
            ) {
                return;
            }

            activeTrigger = card;
            modalTitle.textContent = card.dataset.title ?? '';
            modalCategory.textContent = card.dataset.category ?? '';
            modalImage.src = card.dataset.image ?? '';
            modalImage.alt = card.dataset.title ?? '';
            const details = JSON.parse(card.dataset.gradeDetails ?? '{}');
            const subtitle = document.createElement('h3');
            subtitle.className = 'home-detail-modal__subtitle';
            subtitle.textContent = details.subtitle;

            const source = document.createElement('p');
            const sourceLabel = document.createElement('strong');
            sourceLabel.textContent = 'Sumber lokasi batubara: ';
            source.append(sourceLabel, details.source);

            const description = document.createElement('p');
            description.textContent = details.description;

            const calorificValue = document.createElement('p');
            const calorificLabel = document.createElement('strong');
            calorificLabel.textContent = 'Nilai kalori: ';
            calorificValue.append(calorificLabel, details.calorific_value);

            modalDescription.replaceChildren(
                subtitle,
                source,
                description,
                calorificValue,
            );
            previousBodyOverflow = document.body.style.overflow;
            document.body.style.overflow = 'hidden';
            detailModal.hidden = false;
            closeButton.focus();
        });
    });

    closeButton?.addEventListener('click', closeModal);
    detailModal.querySelector('[data-modal-backdrop]')?.addEventListener('click', closeModal);

    document.addEventListener('keydown', (event) => {
        if (detailModal.hidden) {
            return;
        }

        if (event.key === 'Escape') {
            event.preventDefault();
            closeModal();
            return;
        }

        if (event.key !== 'Tab' || !(modalPanel instanceof HTMLElement)) {
            return;
        }

        const focusableElements = modalPanel.querySelectorAll(
            'button:not([disabled]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])',
        );
        const firstElement = focusableElements.item(0);
        const lastElement = focusableElements.item(focusableElements.length - 1);

        if (!(firstElement instanceof HTMLElement) || !(lastElement instanceof HTMLElement)) {
            event.preventDefault();
            modalPanel.focus();
            return;
        }

        if (event.shiftKey && document.activeElement === firstElement) {
            event.preventDefault();
            lastElement.focus();
        } else if (!event.shiftKey && document.activeElement === lastElement) {
            event.preventDefault();
            firstElement.focus();
        }
    });
}
