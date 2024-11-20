const wrapper = document.querySelector('.news-wrapper');
const slides = document.querySelectorAll('.news-slide');
const controls = document.querySelector('.news-controls');

let currentSlide = 0;
let startX;
let isDragging = false;
let autoplayInterval;

// Create dots
slides.forEach((_, index) => {
    const dot = document.createElement('div');
    dot.classList.add('news-dot');
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => goToSlide(index));
    controls.appendChild(dot);
});

const dots = document.querySelectorAll('.news-dot');

function updateSlides() {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
    
    wrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function goToSlide(index) {
    currentSlide = index;
    if (currentSlide < 0) currentSlide = slides.length - 1;
    if (currentSlide >= slides.length) currentSlide = 0;
    updateSlides();
    resetAutoplay();
}

function resetAutoplay() {
    clearInterval(autoplayInterval);
    startAutoplay();
}

function startAutoplay() {
    autoplayInterval = setInterval(() => {
        goToSlide(currentSlide + 1);
    }, 5000);
}

// Touch and mouse events
wrapper.addEventListener('mousedown', dragStart);
wrapper.addEventListener('touchstart', dragStart);
wrapper.addEventListener('mousemove', dragging);
wrapper.addEventListener('touchmove', dragging);
wrapper.addEventListener('mouseup', dragEnd);
wrapper.addEventListener('touchend', dragEnd);
wrapper.addEventListener('mouseleave', dragEnd);

function dragStart(e) {
    isDragging = true;
    startX = e.type === 'mousedown' ? e.pageX : e.touches[0].pageX;
    wrapper.style.cursor = 'grabbing';
}

function dragging(e) {
    if (!isDragging) return;
    e.preventDefault();
    const currentX = e.type === 'mousemove' ? e.pageX : e.touches[0].pageX;
    const diff = startX - currentX;
    
    if (Math.abs(diff) > 50) {
        if (diff > 0) {
            goToSlide(currentSlide + 1);
        } else {
            goToSlide(currentSlide - 1);
        }
        isDragging = false;
    }
}

function dragEnd() {
    isDragging = false;
    wrapper.style.cursor = 'grab';
}

// Start autoplay
startAutoplay();
