<!-- Modal -->
<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="modalInfoTitle">Método de pago: Coinpayments.</h5>
                <button type="button" style="background-color: #4BCFEE;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify primary-background">
                <form action="{{route('settlement.aprobarDeposito')}}" method="post">
                    @csrf

                        <label for="form-control ">Ingrese su billetera USDT TRC20</label>
                        <input type="text" name="wallet" id="modal-wallet" value="" class="form-control mt-2">

                        <input type="hidden" name="cantidad" id="modal-cantidad" value="" class="form-control text-white">

                        <input type="hidden" name="recibido" id="modal-recibido" value="" class="form-control text-white">
                    </h5>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn text-white mt-2" style="background-color:  #4BCFEE;">Continuar</button>
                    </div>
                </form>
            </div>
            {{-- <div class="modal-footer primary-background">
                <button type="button" class="btn btn-sm" data-bs-dismiss="modal">Cerrar</button>
            </div> --}}
        </div>
    </div>
</div>
</div>

<script>
    function mostrarWallet() {
        var cantidad = document.getElementById('cantidad').value;

        document.getElementById('modal-cantidad').value = cantidad;

        var recibido = document.getElementById('recibido').value;
        document.getElementById('modal-recibido').value = recibido;
    }
</script>
