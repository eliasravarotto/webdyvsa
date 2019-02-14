<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "50000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
  @endif

  @if(Session::has('info'))
      toastr.info("{{ Session::get('info') }}");
  @endif

  @if(Session::has('warning'))
      toastr.warning("{{ Session::get('warning') }}");
  @endif

  @if(Session::has('error'))
      toastr.error("{{ Session::get('error') }}");
  @endif

</script>