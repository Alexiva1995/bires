<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset(mix('vendors/js/ui/jquery.sticky.js'))}}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
<!-- custome scripts file for user -->
<script src="{{ asset(mix('js/core/scripts.js')) }}"></script>

@if($configData['blankPage'] === false)
<script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>
@endif
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
<!-- CDN JS-->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    function getlink() {
        var aux = document.createElement("input");
        aux.setAttribute("value", "{{route('register')}}?referred_id={{Auth::id()}}");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        
        Swal.fire({
        title: "Link Copiado",
        icon: 'success',
        color: '#716add',
        text: "Ya puedes pegarlo en su navegador",
        type: "success",
        background:'#043D70',
        confirmButtonClass: 'btn btn-secondary',
        })
    }
</script>
