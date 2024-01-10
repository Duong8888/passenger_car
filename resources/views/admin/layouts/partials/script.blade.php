@vite('resources/js/app.js');
<!-- Vendor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
<script>
     $('.js-select-status-contact').change(function(e){
        console.log(1);
        e.preventDefault();
        let $form = $(this).closest('form');
        $form.submit();
    });
</script>
<script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('admin/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/libs/feather-icons/feather.min.js')}}"></script>

<!-- knob plugin -->
<script src="{{asset('admin/libs/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{ asset('admin/js/custom/user-permission.js') }}"></script>
<!-- App js-->
<script src="{{asset('admin/js/app.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--Chartist Chart-->
<script src="{{ asset('admin/libs/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('admin/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>
<!-- Init js -->
<script src="{{ asset('admin/js/pages/chartist.init.js') }}"></script>

<script src=" {{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
<script src=" {{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js') }}"></script>
