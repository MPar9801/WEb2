// Mobile Menu Toggle
document.getElementById('mobileMenuToggle').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
  
  // Mobile Dropdown Toggles
  document.querySelectorAll('.mobile-dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', () => {
      const menu = toggle.nextElementSibling;
      menu.classList.toggle('hidden');
    });
  });
  
  // Dark Mode Toggle
  const themeToggle = document.getElementById('themeToggle');
  const sunIcon = document.getElementById('sunIcon');
  const moonIcon = document.getElementById('moonIcon');
  
  // Check for saved theme preference or use system preference
  const savedTheme = localStorage.getItem('theme') || 
                     (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  document.documentElement.classList.toggle('dark', savedTheme === 'dark');
  
  function updateThemeIcons() {
    const darkMode = document.documentElement.classList.contains('dark');
    sunIcon.classList.toggle('hidden', !darkMode);
    moonIcon.classList.toggle('hidden', darkMode);
  }
  
  themeToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
    updateThemeIcons();
  });
  
  // Initial theme icon display
  updateThemeIcons();
  
  // Form Validation for Login/Signup
  function validateForm(formId) {
    const form = document.getElementById(formId);
    if (form) {
      form.addEventListener('submit', (e) => {
        const password = form.querySelector('input[type="password"]');
        const confirmPassword = form.querySelector('input[name="confirm_password"]');
        
        if (confirmPassword && password.value !== confirmPassword.value) {
          e.preventDefault();
          alert('Passwords do not match!');
          confirmPassword.focus();
        }
        
        // Additional validation can be added here
      });
    }
  }
  
  // Initialize form validation
  document.addEventListener('DOMContentLoaded', () => {
    validateForm('loginForm');
    validateForm('signupForm');
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  });
  // Mobile dropdown functionality
document.querySelectorAll('.mobile-dropdown-toggle').forEach(toggle => {
  toggle.addEventListener('click', () => {
    const menu = toggle.nextElementSibling;
    menu.classList.toggle('hidden');
    
    // Close other open dropdowns
    document.querySelectorAll('.mobile-dropdown-menu').forEach(otherMenu => {
      if (otherMenu !== menu && !otherMenu.classList.contains('hidden')) {
        otherMenu.classList.add('hidden');
      }
    });
  });
});

// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
  if (!e.target.closest('.dropdown') && !e.target.closest('.mobile-dropdown-toggle')) {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      menu.classList.remove('opacity-100', 'visible');
    });
    document.querySelectorAll('.mobile-dropdown-menu').forEach(menu => {
      menu.classList.add('hidden');
    });
  }
});
module.exports = {
  darkMode: 'class',
  // ... other config
}