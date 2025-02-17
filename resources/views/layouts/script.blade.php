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
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 從 PHP Session 檢查是否需要顯示 Modal
        @if(session('show_modal'))
            const modalId = '{{ session("show_modal") }}';
            const modal = new bootstrap.Modal(document.querySelector(modalId));
            modal.show();
        @endif
    });
</script>