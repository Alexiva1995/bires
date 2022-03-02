<!-- BEGIN: Footer-->
<footer class="footer footer-light {{($configData['footerType'] === 'footer-hidden') ? 'd-none':''}} {{$configData['footerType']}}">
    <div class="clearfix row">
        <div
            class="float-md-start d-block d-md-inline-block text-white pt-2 col-12 col-sm-12 col-md-8 d-flex justify-content-center text-ms-center">
            <a class="text-white" href="#" target="_blank">
                <script>
                    document.write(new Date().getFullYear())
                </script> Copyright &copy; Generación Zoe, Todos los Derechos Reservados
            </a>
        </div>

        <div class="col-12 col-sm-12 col-md-4 d-flex justify-content-center mt-3 mt-sm-1">
            <a href="#" style="margin-right: 0.6rem;">
                <img src={{asset('images/zoe/redes/facebook.png')}} alt="facebook" style=" width:22,08px;height:23px; top:-0px; left:-0px;" />
            </a> 
            <a href="#" style="margin-right: 0.6rem;">
                <img src={{asset('images/zoe/redes/instagram.png')}} alt="instagram" style="width:24px; height:22,08px; top:0,46px; left:0,46px;" />
            </a> 
            <a href="#" style="margin-right: 0.6rem;">
                <img src={{asset('images/zoe/redes/linkdin.png')}} alt="linkdin" style="width:24px; height:22,08px; top:0,46px; left:0,46px;" />
            </a> 
        </div>
    </div> 
</footer> 
<button class="btn btn-primary btn-icon scroll-top"
type="button">
  <i data-feather="arrow-up"></i>
</button> 
<!-- END: Footer-->