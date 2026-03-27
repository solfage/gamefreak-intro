window.TopFlame = window.TopFlame || {};

window.TopFlame.state = {
    version: '1.0.0-foundation',
    initializedAt: new Date().toISOString(),
};

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-topflame-toggle]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const target = trigger.getAttribute('data-topflame-toggle');
            if (!target) {
                return;
            }

            const element = document.querySelector(target);
            if (!element) {
                return;
            }

            element.classList.toggle('hidden');
        });
    });
});
