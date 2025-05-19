// resources/js/app.js
import './bootstrap';

// Mobile Menu Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Check if elements exist to prevent errors
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && closeMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        closeMenuButton.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });
    }

    // Initialize any interactive components
    initializeComponents();
});

// Function to initialize interactive components
function initializeComponents() {
    // You can add initialization for sliders, dropdowns, etc.
    console.log('Components initialized');
}