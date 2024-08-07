$(document).ready(function () {
    $("#arrow-left").click(function () {
        $("#kategoriContainer").animate({ scrollLeft: "-=360px" }, 150);
    });

    $("#arrow-right").click(function () {
        $("#kategoriContainer").animate({ scrollLeft: "+=360px" }, 150);
    });
});

$(document).ready(function () {
    $("#collectionContainer").mouseenter(function () {
        $("#arrow-left").removeClass("arrowleftLeave").addClass("arrowleftEnter");
        $("#arrow-right").removeClass("arrowrightLeave").addClass("arrowrightEnter");
    });
    $("#collectionContainer").mouseleave(function () {
        $("#arrow-left").removeClass("arrowleftEnter").addClass("arrowleftLeave");
        $("#arrow-right").removeClass("arrowrightEnter").addClass("arrowrightLeave");
    });
});

$(document).ready(function() {
    const images = [
        '/image/hero2.jpg',
        '/image/hero3.jpg',
        '/image/hero4.jpg',
        '/image/hero6.jpg'
    ];
    const intervalTime = 5000;
    let currentIndex = 0;

    const $heroArea = $('#heroArea');
    const $indicatorButtons = $('#indicatorButtons');

    // Create image wrappers
    images.forEach((image, index) => {
        const $imageWrapper = $('<div>')
            .addClass('image-wrapper')
            .css('background-image', `url('${image}')`)
            .css('opacity', index === currentIndex ? 1 : 0);
        $heroArea.append($imageWrapper);
    });

    const updateHeroBackground = () => {
        $('.image-wrapper').each((index, element) => {
            $(element).css('opacity', index === currentIndex ? 1 : 0);
        });
        $('.indicator-button').each((index, button) => {
            $(button).toggleClass('active', index === currentIndex);
        });
    };

    // Create indicator buttons
    images.forEach((image, index) => {
        const $button = $('<button>')
            .addClass('indicator-button')
            .on('click', function() {
                currentIndex = index;
                updateHeroBackground();
                resetInterval();
            });
        $indicatorButtons.append($button);
    });

    const nextImage = () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateHeroBackground();
    };

    let interval = setInterval(nextImage, intervalTime);

    const resetInterval = () => {
        clearInterval(interval);
        interval = setInterval(nextImage, intervalTime);
    };

    // Initial setup
    updateHeroBackground();
});

