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
            modalDescription.textContent = card.dataset.description ?? '';
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
