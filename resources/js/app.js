// Portfolio JavaScript functionality

class Portfolio {
    constructor() {
        this.currentPage = 'home';
        this.init();
    }

    init() {
        this.setupNavigation();
        this.setupMobileMenu();
        this.setupAnimations();
        this.setupScrollEffects();
        this.setActivePage('home');
    }

    setupNavigation() {
        // Navigation links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.getAttribute('data-page');
                this.navigateToPage(page);
                this.closeMobileMenu();
            });
        });

        // Hero buttons
        const heroButtons = document.querySelectorAll('.hero-buttons .btn');
        heroButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const page = button.getAttribute('data-page');
                if (page) {
                    this.navigateToPage(page);
                }
            });
        });

        // About cards
        const aboutCards = document.querySelectorAll('.about-card');
        aboutCards.forEach(card => {
            card.addEventListener('click', (e) => {
                e.preventDefault();
                const page = card.getAttribute('data-page');
                if (page) {
                    this.navigateToPage(page);
                }
            });
        });

        // Contact buttons
        const contactButtons = document.querySelectorAll('a[href^="mailto:"], a[href^="tel:"]');
        contactButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                // Allow default behavior for contact links
                console.log('Contact button clicked:', button.href);
            });
        });
    }

    setupMobileMenu() {
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');

        navToggle.addEventListener('click', () => {
            this.toggleMobileMenu();
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                this.closeMobileMenu();
            }
        });

        // Close mobile menu on window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                this.closeMobileMenu();
            }
        });
    }

    toggleMobileMenu() {
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        
        navToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
    }

    closeMobileMenu() {
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        
        navToggle.classList.remove('active');
        navMenu.classList.remove('active');
    }

    navigateToPage(pageId) {
        // Hide all pages
        const pages = document.querySelectorAll('.page');
        pages.forEach(page => {
            page.classList.remove('active');
        });

        // Show target page
        const targetPage = document.getElementById(`${pageId}-page`);
        if (targetPage) {
            targetPage.classList.add('active');
            this.currentPage = pageId;
            
            // Update active nav link
            this.updateActiveNavLink(pageId);
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Trigger animations for the new page
            setTimeout(() => {
                this.animatePageElements(targetPage);
            }, 100);
        }
    }

    updateActiveNavLink(pageId) {
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('data-page') === pageId) {
                link.classList.add('active');
            }
        });
    }

    setupAnimations() {
        // Add fade-in class to animatable elements
        const animatableElements = document.querySelectorAll(`
            .hero-content,
            .about-card,
            .timeline-item,
            .passion-card,
            .skill-category,
            .competency-card,
            .card
        `);

        animatableElements.forEach(element => {
            element.classList.add('fade-in');
        });
    }

    animatePageElements(page) {
        const elements = page.querySelectorAll('.fade-in');
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.classList.add('visible');
            }, index * 100);
        });
    }

    setupScrollEffects() {
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach(element => {
            observer.observe(element);
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 253, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.backgroundColor = 'var(--color-surface)';
                navbar.style.backdropFilter = 'blur(10px)';
            }
        });
    }

    setActivePage(pageId) {
        this.navigateToPage(pageId);
        
        // Animate initial page load
        setTimeout(() => {
            const activePage = document.querySelector('.page.active');
            if (activePage) {
                this.animatePageElements(activePage);
            }
        }, 300);
    }

    // Utility methods
    smoothScrollTo(target) {
        const element = document.querySelector(target);
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    addHoverEffects() {
        // Add hover effects to cards
        const cards = document.querySelectorAll('.about-card, .passion-card, .competency-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) scale(1)';
            });
        });
    }

    // Skills animation (could be extended for progress bars)
    animateSkills() {
        const skillTags = document.querySelectorAll('.skill-tag');
        skillTags.forEach((tag, index) => {
            setTimeout(() => {
                tag.style.opacity = '0';
                tag.style.transform = 'scale(0.8)';
                setTimeout(() => {
                    tag.style.transition = 'all 0.3s ease-out';
                    tag.style.opacity = '1';
                    tag.style.transform = 'scale(1)';
                }, 50);
            }, index * 100);
        });
    }

    // Contact form handling (if needed later)
    handleContactForm() {
        const contactButtons = document.querySelectorAll('a[href^="mailto:"]');
        contactButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                // Analytics or custom handling could go here
                console.log('Email contact initiated');
            });
        });

        const phoneButtons = document.querySelectorAll('a[href^="tel:"]');
        phoneButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                // Analytics or custom handling could go here
                console.log('Phone contact initiated');
            });
        });
    }

    // Page-specific functionality
    initPageSpecificFeatures() {
        // CV page timeline animations
        const timelineItems = document.querySelectorAll('.timeline-item');
        timelineItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.2}s`;
        });

        // Passion cards hover effects
        const passionCards = document.querySelectorAll('.passion-card');
        passionCards.forEach(card => {
            const image = card.querySelector('.passion-image img');
            if (image) {
                card.addEventListener('mouseenter', () => {
                    image.style.transform = 'scale(1.1)';
                });
                card.addEventListener('mouseleave', () => {
                    image.style.transform = 'scale(1)';
                });
            }
        });

        // Competency cards stagger animation
        const competencyCards = document.querySelectorAll('.competency-card');
        competencyCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    }

    // Error handling
    handleErrors() {
        window.addEventListener('error', (e) => {
            console.error('Portfolio error:', e.error);
        });

        // Handle image loading errors
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.addEventListener('error', () => {
                console.warn('Failed to load image:', img.src);
                // Could add fallback image here
                img.style.display = 'none';
            });
        });
    }

    // Initialize all features
    initAllFeatures() {
        this.addHoverEffects();
        this.handleContactForm();
        this.initPageSpecificFeatures();
        this.handleErrors();
    }
}

// Theme switching (bonus feature)
class ThemeManager {
    constructor() {
        this.currentTheme = this.getStoredTheme() || 'auto';
        this.init();
    }

    init() {
        this.applyTheme();
        this.setupThemeToggle();
    }

    getStoredTheme() {
        try {
            return localStorage.getItem('portfolio-theme');
        } catch (e) {
            return null;
        }
    }

    storeTheme(theme) {
        try {
            localStorage.setItem('portfolio-theme', theme);
        } catch (e) {
            console.warn('Could not store theme preference');
        }
    }

    applyTheme() {
        const html = document.documentElement;
        if (this.currentTheme === 'dark') {
            html.setAttribute('data-color-scheme', 'dark');
        } else if (this.currentTheme === 'light') {
            html.setAttribute('data-color-scheme', 'light');
        } else {
            html.removeAttribute('data-color-scheme');
        }
    }

    setupThemeToggle() {
        // This could be extended to add a theme toggle button
        // For now, it just respects system preference
    }

    toggleTheme() {
        const themes = ['auto', 'light', 'dark'];
        const currentIndex = themes.indexOf(this.currentTheme);
        const nextIndex = (currentIndex + 1) % themes.length;
        
        this.currentTheme = themes[nextIndex];
        this.storeTheme(this.currentTheme);
        this.applyTheme();
        
        return this.currentTheme;
    }
}

// Performance optimization
class PerformanceOptimizer {
    constructor() {
        this.init();
    }

    init() {
        this.optimizeImages();
        this.setupLazyLoading();
        this.debounceScrollEvents();
    }

    optimizeImages() {
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            // Add loading="lazy" if not already present
            if (!img.hasAttribute('loading')) {
                img.setAttribute('loading', 'lazy');
            }
        });
    }

    setupLazyLoading() {
        // Images are already set up with lazy loading in optimizeImages
        // This could be extended for other content
    }

    debounceScrollEvents() {
        let scrollTimeout;
        const originalScrollHandler = window.onscroll;
        
        window.onscroll = function() {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                if (originalScrollHandler) {
                    originalScrollHandler();
                }
            }, 16); // ~60fps
        };
    }
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Initialize main portfolio functionality
    const portfolio = new Portfolio();
    portfolio.initAllFeatures();
    
    // Initialize theme manager
    const themeManager = new ThemeManager();
    
    // Initialize performance optimizations
    const performanceOptimizer = new PerformanceOptimizer();
    
    // Global error handling
    window.addEventListener('unhandledrejection', (e) => {
        console.error('Unhandled promise rejection:', e.reason);
    });
    
    console.log('Portfolio initialized successfully');
});

// Export for potential external use
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { Portfolio, ThemeManager, PerformanceOptimizer };
}

// Récupère le bouton
let mybutton = document.getElementById("scrollTopBtn");

// Affiche le bouton après avoir scrollé de 20px
window.onscroll = function() {scrollFunction();};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// Remonte en haut de la page au clic
function topFunction() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}
