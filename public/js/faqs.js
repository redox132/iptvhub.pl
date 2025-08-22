document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach(accordion => {
        const toggle = accordion.querySelector('.accordion-toggle');
        const content = accordion.querySelector('.accordion-content');
        const icon = accordion.querySelector('.accordion-icon');

        toggle.addEventListener('click', () => {
            // Close other accordions
            accordions.forEach(otherAccordion => {
                if (otherAccordion !== accordion) {
                    const otherContent = otherAccordion.querySelector('.accordion-content');
                    const otherIcon = otherAccordion.querySelector('.accordion-icon');
                    otherContent.style.maxHeight = null;
                    otherContent.classList.add('max-h-0');
                    otherIcon.classList.remove('rotate-45');
                }
            });

            // Toggle current accordion
            const isOpen = content.style.maxHeight;
            if (isOpen) {
                content.style.maxHeight = null;
                content.classList.add('max-h-0');
                icon.classList.remove('rotate-45');
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.classList.remove('max-h-0');
                icon.classList.add('rotate-45');
            }
        });
    });
});