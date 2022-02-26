<style>
    .swal2-icon.swal2-success .swal2-success-ring{
        border: .25em solid #66FFCC !important;
    }
    
    .swal2-icon.swal2-success [class^=swal2-success-line]{
        background: linear-gradient(90deg, #42e1ac  0%, #66FFCC  94%) !important;
    }

    .swal2-show, .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left], .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right], .swal2-icon.swal2-success .swal2-success-fix{
        background: #043C6F !important;
    }

    #swal2-title, #swal2-content, .swal2-html-container{
        color: white !important;
    }
</style>

<script>
    $('#referred').on('click', function () {
     
        // abre la modal
        Swal.fire({
        title: 'Link de referido copiado!',
        text: 'Ya puede usarlo en su navegador!',
        confirmButtonText: 'Continuar',
        icon: 'success',
        customClass: {
          confirmButton: 'btn btn-success'
        },
        buttonsStyling: !1
      });

    //   copia el link 
      var aux = document.createElement("input");
        aux.setAttribute("value", "{{route('register')}}?referred_id={{Auth::id()}}");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
    })

</script>