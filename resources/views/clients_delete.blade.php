<div id="client_destroy" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form name="clients_delete" action="{{route('clients.destroy')}}" method="POST">
                @csrf
                <input type="hidden" name="clientdel_id" id="clientdel_id" value="" />
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Confirmação de exclusão</h4>
                </div>
                <div class="modal-body"> Deseja mesmo excluir este cliente? </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Não</button>
                    <button type="submit" class="btn green">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>