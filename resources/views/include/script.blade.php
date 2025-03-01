<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lazysize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/swiper.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/odometer.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/counter.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/count-down.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gsap-animation.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gsap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ScrollTrigger.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Splitetext.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <!-- /Javascript -->

    <script>
        // Add event listeners to all quantity controls
        document.querySelectorAll('.quantity-controls').forEach((control) => {
        const decrementButton = control.querySelector('button:first-of-type');
        const incrementButton = control.querySelector('button:last-of-type');
        const quantityInput = control.querySelector('input[type="text"]');

        // Handle decrement
        decrementButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value, 10);
            if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
            }
        });

        // Handle increment
        incrementButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value, 10);
            quantityInput.value = currentValue + 1;
        });
        });

    </script>