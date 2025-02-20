<!-- js -->
<script src="{{ asset('bootstrap-5.3.3/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<!-- 輪播圖 -->
<script src="{{ asset('js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

        $('#navbarSupportedContent > a').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            var targetOffset = $(target).offset().top - 110;
            $('html, body').animate({
                scrollTop: targetOffset
            }, 150);
        });

        var $input = $('#for-search');
        $input.on('focus', function () {
            $(this).css({
                width: '200px',
                opacity: 1,
                padding: '5px 10px',
                border: '1px solid #ccc',
                background: 'white'
            });
        });
        
        $('.search-button .btn').on('click', function (e) {
            e.preventDefault();
            $input.css({
                width: '0',
                opacity: '0',
                padding: '0',
                border: 'none',
                background: 'transparent'
            });
            $input.val('').blur();
        });
    </script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('show_modal'))
            const modalId = '{{ session("show_modal") }}';
            const modal = new bootstrap.Modal(document.querySelector(modalId));
            modal.show();
        @endif
    });
</script>