@extends('partials.main')

@section('content')
    @include('partials.navbar')
    @include('partials.cart')

    <section class="hero flex h-[70dvh] items-center grow-0 shrink-0 w-full mx-auto relative" id="heroArea">
        <div class="wrapper90 h-full md:mx-auto relative">
            <div class="overlay"></div>
            <div class="w-fit h-10 absolute bottom-4 flex items-center gap-x-2 z-10" id="indicatorButtons">
                <!-- Buttons will be dynamically generated -->
            </div>
        </div>
    </section>

    @include('sections.produk')
    @include('partials.footer')
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const images = [
                '/image/hero1.png',
                '/image/hero2.jpg',
                '/image/hero3.jpg',
                '/image/hero4.jpg'
            ];
            const intervalTime = 5000;
            let currentIndex = 0;

            const $heroArea = $('#heroArea');
            const $indicatorButtons = $('#indicatorButtons');

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

            const updateHeroBackground = () => {
                $heroArea.css('background-image', `url('${images[currentIndex]}')`);
                $('.indicator-button').each((index, button) => {
                    $(button).css('background-color', index === currentIndex ? 'white' : 'transparent');
                });
            };

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
    </script>
@endsection
