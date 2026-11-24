import './bootstrap';

import { createIcons, icons } from 'lucide';

function renderIcons() {
    createIcons({ icons });
}

document.addEventListener('DOMContentLoaded', renderIcons);

// Re-render icons after Livewire/Alpine navigation if applicable
document.addEventListener('livewire:navigated', renderIcons);

// Expose for manual re-trigger after dynamic DOM updates (e.g. after AJAX)
window.renderLucideIcons = renderIcons;