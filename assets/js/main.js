document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('nav');
    const heroSection = document.querySelector('#hero1');

    if (!heroSection) {
        console.error('Hero section element not found');
        return;
    }

    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        const heroSectionHeight = heroSection.offsetHeight;
        const maxScroll = heroSectionHeight - window.innerHeight;

        // Calculate the scroll percentage relative to the hero section height
        let scrollPercent = Math.min(scrollY / maxScroll, 1);

        // Smooth transition effect
        if (scrollY > lastScrollTop) {
            // Scrolling down
            let newWidth = Math.max(80, 100 - (20 * scrollPercent)); // 100% to 80%
            navbar.style.width = `${newWidth}%`;

            // Adjust background, shadow, and other properties gradually
            if (scrollY > 50) {
                navbar.style.backgroundColor = `rgba(255, 255, 255, ${0.2 + 0.6 * scrollPercent})`;
                navbar.style.backdropFilter = `blur(${10 * scrollPercent}px)`;
                navbar.style.boxShadow = `0 4px 6px rgba(0, 0, 0, ${0.1 * scrollPercent})`;
                navbar.style.padding = `10px 40px`;
                navbar.style.borderRadius = '12px';
            } else {
                navbar.style.backgroundColor = 'transparent';
                navbar.style.backdropFilter = 'none';
                navbar.style.boxShadow = 'none';
                navbar.style.padding = '10px 20px';
                navbar.style.borderRadius = '0';
            }
        } else {
            // Scrolling up
            navbar.style.width = '100%';
            navbar.style.backgroundColor = 'transparent';
            navbar.style.backdropFilter = 'none';
            navbar.style.boxShadow = 'none';
            navbar.style.padding = '10px 20px';
            navbar.style.borderRadius = '0';
        }

        lastScrollTop = scrollY <= 0 ? 0 : scrollY; // For Mobile Safari
    });
});

// Cart Panel JavaScript
document.addEventListener('DOMContentLoaded', () => {
    const openCartBtn = document.getElementById('openCartBtn');
    const closeCartBtn = document.getElementById('closeCartBtn');
    const cartPanel = document.getElementById('cartPanel');
    const overlay = document.getElementById('overlay');
    const panel = document.getElementById('panel');
  
    openCartBtn.addEventListener('click', () => {
      cartPanel.classList.remove('hidden');
      setTimeout(() => {
        overlay.classList.remove('pointer-events-none', 'opacity-0');
        overlay.classList.add('opacity-100');
        panel.classList.remove('translate-x-full');
        panel.classList.add('translate-x-0');
      }, 10);
    });
  
    closeCartBtn.addEventListener('click', () => {
      panel.classList.remove('translate-x-0');
      panel.classList.add('translate-x-full');
      overlay.classList.remove('opacity-100');
      overlay.classList.add('opacity-0');
      setTimeout(() => {
        overlay.classList.add('pointer-events-none');
        cartPanel.classList.add('hidden');
      }, 500);
    });
  });