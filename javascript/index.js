const carousel = document.querySelector('.carousel');
const leftBtn = document.querySelector('.left-btn');
const rightBtn = document.querySelector('.right-btn');

let scrollPosition = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const itemWidth = carouselItems[0].clientWidth + 20; // Width of one item + margin (20px = 2 * 10px margin)

/**
 * Adjust scrolling so the carousel moves exactly by 3 items width including margin.
 */
rightBtn.addEventListener('click', () => {
    if (scrollPosition < carousel.scrollWidth - carousel.clientWidth) {
        scrollPosition += itemWidth * 3; // Scroll by the width of 3 items (including margin)
        carousel.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
        });
    }
});

leftBtn.addEventListener('click', () => {
    if (scrollPosition > 0) {
        scrollPosition -= itemWidth * 3; // Scroll back by the width of 3 items (including margin)
        carousel.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
        });
    }
});
