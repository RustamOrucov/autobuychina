document.addEventListener("DOMContentLoaded", function() {
    const swiperContainers = document.querySelectorAll('.swiper-container');

    swiperContainers.forEach((container, index) => {
        const swiper = new Swiper(container, {
            loop: false,
            on: {
                slideChange: function () {
                    updatePagination(this.activeIndex, container);
                }
            }
        });

        createPaginationBullets(container);
    });

    function createPaginationBullets(container) {
        const slides = container.querySelectorAll('.swiper-slide');
        const paginationContainer = container.querySelector('.swiper-pagination');

        slides.forEach((slide, index) => {
            const bullet = document.createElement('span');
            bullet.classList.add('swiper-pagination-bullet');
            if (index === 0) {
                bullet.classList.add('swiper-pagination-bullet-active');
            }
            paginationContainer.appendChild(bullet);
        });
    }

    function updatePagination(activeIndex, container) {
        const bullets = container.querySelectorAll('.swiper-pagination-bullet');
        bullets.forEach((bullet, index) => {
            bullet.classList.toggle('swiper-pagination-bullet-active', index === activeIndex);
        });
    }
});