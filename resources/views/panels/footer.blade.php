<!-- BEGIN: Footer-->

<style>
    .site-footer .social-icons {
        text-align: right
    }
  
    .social-icons li {
        display: inline-block;
    }

    .social-icons a {
        text-align: center;
        margin-right: 8px;
    }
 
</style>


<footer
    class="site-footer {{($configData['footerType'] === 'footer-hidden') ? 'd-none':''}} {{$configData['footerType']}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <a class="text-white" style="vertical-align: sub;" href="#" target="_blank">iuyr
                    <script>
                        document.write(new Date().getFullYear())
 
                    </script> Copyright &copy; Generación Zoe, Todos los Derechos Reservados
                </a>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a href="#" class=""> <img src="{{ asset('images/zoe/svg/facebook.svg') }}" width="28px"
                                alt=""></a></li>
                    <li><a href="#" class=""> <img src="{{ asset('images/zoe/svg/instagram.svg') }}" width="30px"
                                alt=""></a></li>
                    <li><a href="#" class=""> <img src="{{ asset('images/zoe/svg/linkedin.svg') }}" width="30px"
                                alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
